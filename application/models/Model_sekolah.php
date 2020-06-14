<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_sekolah extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('_sekolah')->row_array();
    }

    function updateData()
    {
        $id = $this->input->post('id_sekolah');
        $data=array(
            'nm_sekolah' => $this->input->post('nm_sekolah',true),
            'email' => $this->input->post('email',true),
            'no_telp' => $this->input->post('no_telp',true),
            'alamat' => $this->input->post('alamat',true),
            'nm_apl' => $this->input->post('nm_apl',true),
            'initial_apl' => $this->input->post('initial_apl',true)
        );
        $this->db->where('id_sekolah', $id);
        return $this->db->update('_sekolah',$data);
    }

    function upLogo($getId,$image){
        //$logo =$this->input->post($image,true);
        $data=array(
            'logo' => $image
        );
        $this->db->where('id_sekolah', $getId);
        return $this->db->update('_sekolah',$data);

    }

}
