<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_Jurusan extends CI_Model
{
    public function getAllJurusan()
    {
        return $this->db->get('jurusan')->result();
    }

    public function getJurusanAktif(){
        $status ='Aktif';
        $this->db->select('*');	
		$this->db->from('jurusan');	
		$this->db->where('status', $status,true);
		return $this->db->get()->result_array();
    }


    public function inputData()
    {
        $data = [
            "kd_jurusan" => $this->input->post('kd_jurusan', true),
            "nm_jurusan" => $this->input->post('nm_jurusan', true),
            "status" => 'Aktif'
        ];
        return $this->db->insert('jurusan', $data);
    }

    
    public function hapusData()
    {
        $id = $this->input->post('id');
        $this->db->where('id_jurusan', $id);
        return $this->db->delete('jurusan');
    }
    
    function updateData()
    {
        $id = $this->input->post('id_jurusan');
        $kd_jurusan = $this->input->post('kd_jurusan');
        $nm_jurusan = $this->input->post('nm_jurusan');
        $this->db->set('kd_jurusan', $kd_jurusan);
        $this->db->set('nm_jurusan', $nm_jurusan);
        $this->db->where('id_jurusan', $id);
        return $this->db->update('jurusan');
    }

    public function changeStatus()
    {
        $id = $this->input->post('id_jurusan');

        $this->db->select('status');	
		$this->db->from('jurusan');	
		$this->db->where('id_jurusan', $id);
		$query=$this->db->get();
	    foreach ($query->result() as $row)
		{
        	$st  = $row->status;
        	if($st=='Aktif'){
        		$sts='NonAktif';
        	}
        	else if($st=='NonAktif'){
        		$sts='Aktif';
        	}
        }	   		
	    $this->db->set('status',$sts, true);
		$this->db->where('id_jurusan', $id);
        return $this->db->update('jurusan');
        
        // $this->db->where('id_gel', $id);
        // return $this->db->delete('gelombang');
    }
    
}
