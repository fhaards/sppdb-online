<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_gelombang extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('gelombang')->result();
    }

    public function getStatusAktif(){
        $status ='Aktif';
        $this->db->select('*');	
		$this->db->from('gelombang');	
		$this->db->where('status', $status);
		$this->db->order_by('nm_gel','DESC');
		$this->db->LIMIT('1');
		return $this->db->get()->result();
    }

    public function inputData()
    {
        $data = [
            "nm_gel" => $this->input->post('nm_gel', true),
            "tgl_mulai" => $this->input->post('tgl_mulai', true),
            "tgl_akhir" => $this->input->post('tgl_akhir', true),
            "status" => "Aktif"
        ];
        return $this->db->insert('gelombang', $data);
    }

    public function hapusData()
    {
        $id = $this->input->post('id_gel');
        $this->db->where('id_gel', $id);
        return $this->db->delete('gelombang');
    }

    public function changeStatus()
    {
        $id = $this->input->post('id_gel');

        $this->db->select('status');	
		$this->db->from('gelombang');	
		$this->db->where('id_gel', $id);
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
		$this->db->where('id_gel', $id);
        return $this->db->update('gelombang');
        
        // $this->db->where('id_gel', $id);
        // return $this->db->delete('gelombang');
    }
    
    function updateData()
    {
        $id = $this->input->post('id_gel');
        $data = [
            "nm_gel" => $this->input->post('nm_gel', true),
            "tgl_mulai" => $this->input->post('tgl_mulai', true),
            "tgl_akhir" => $this->input->post('tgl_akhir', true)
        ];
        $this->db->where('id_gel', $id);
        return $this->db->update('gelombang',$data);
    }
}
