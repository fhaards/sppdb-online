<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_berita extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('_berita')->result();
    }

    public function showAll()
    {
        $this->db->select('*');	
		$this->db->from('_berita');	
		$query=$this->db->get();
	    return $query->result_array();
        //return $this->db->get('_berita')->result();
    }

    function data($number,$offset){
		return $this->db->get('_berita',$number,$offset)->result();		
	}
 
	function jumlah_data(){
		return $this->db->get('_berita')->num_rows();
	}
    
    
    public function getById()
    {
        $id="8";
        $this->db->select('*');	
		$this->db->from('_berita');	
		$this->db->where('id_berita',$id);
		$query=$this->db->get();
		return $query->row_array();
    }

    public function inputData()
    {   
        $dateNow  = date('Y-m-d');
        $data = [
            "judul_berita" => $this->input->post('judul_berita', true),
            "isi_berita" => $this->input->post('isi_berita', true),
            "tgl_berita" => $dateNow,
            "status" => 'Aktif',
        ];
        return $this->db->insert('_berita', $data);
    }

    public function hapusData()
    {
        $id = $this->input->post('id_berita',true);
        $this->db->where('id_berita', $id);
        return $this->db->delete('_berita');
    }
    
    function updateData($id)
    {
        $data = array(
            'judul_berita' => $this->input->post('judul_berita'),
            'isi_berita' => $this->input->post('isi_berita')
        );
        $this->db->where('id_berita', $id);
        return $this->db->update('_berita',$data);
    }

    public function detailData($id){
		$this->db->select('*');	
		$this->db->from('_berita');	
		$this->db->where('id_berita',$id);
		$query=$this->db->get();
		return $query->row_array();
	}	
}
