<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model{	
	protected $table='user';

	public function __construct(){
		$this->load->database();
    }
    
    function cekLogin($email, $password){		
		$userData= $this->db->get_where($this->table,['email'=>$email])->row_array();
		if(is_null($userData)){
			return false;
		}
		else{
			return password_verify($password, $userData['password']);
		}
	}	

	function registrasi($nama,$email,$newPass,$gelombang,$jurId){
		$dataUser = array(
			'nama' => $nama,
			'email' => $email,
			'password' => $newPass,
			'level' => 'User'
		);
		$query=$this->db->insert('user',$dataUser);
		$getIdUser=$this->db->insert_id($query);
		if($query){
			$no_rand1 = (mt_rand(10,99));
			$no_rand2 = (mt_rand(100,999));
			$no_rand3 = random_string('numeric',5);
			$getNum =  $no_rand1.$no_rand2.$no_rand3;
			
			$this->db->select('kd_peserta');	
			$this->db->from('peserta_pendaftar');	
			$this->db->where('kd_peserta',$getNum);
			$query2=$this->db->get();
			$hitung=$query2->num_rows();
			if($hitung>0){
				$newno_rand1 = (mt_rand(10,99));
				$newno_rand2 = (mt_rand(100,999));
				$newno_rand3 = random_string('numeric',5);
				$newGetNum = $newno_rand1.$newno_rand2.$newno_rand3;
			}
			else{
				$newGetNum = $getNum;
			}

			$dataPendaftar = array(
				'kd_peserta' => $newGetNum,
				'id_user' => $getIdUser,
				'id_jurusan'=> $jurId,
				'nm_lengkap' => $nama,
				'id_gel' => $gelombang,
				'status' => 'Invalid(Unpaid)'
			);
			$query3=$this->db->insert('peserta_pendaftar',$dataPendaftar);
			$getIdPendaftaran=$this->db->insert_id($query3);
			if($query3){
				$insertToOther = array('id_pendaftaran'=>$getIdPendaftaran);
				$this->db->insert('peserta_orangtua',$insertToOther);
				$this->db->insert('peserta_dokumen',$insertToOther);
				$this->db->insert('peserta_bayar_daftar',$insertToOther);

				$this->db->set('total_peserta','total_peserta+1',false);
				$this->db->where('id_gel', $gelombang);
				$this->db->update('gelombang');
				return $newGetNum;
			}
		}
		
	}

	function getLevelByEmail($email){
		$this->db->select('*');	
		$this->db->from('user');	
		$this->db->where('email',$email);
		$query=$this->db->get();
		return $query->row_array()['level'];
	}
	
	function findBy($fieldName, $value){
		$this->db->select('*');	
		$this->db->from('user');	
		$this->db->where($fieldName,$value);
		$query=$this->db->get();
		return $query->row_array();
	}
}