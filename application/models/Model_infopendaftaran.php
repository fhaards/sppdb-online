<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_infopendaftaran extends CI_Model
{
    public function getAll()
    {
        return $this->db->get('_info')->row_array();
    }

    function updateData()
    {
        $id = $this->input->post('id_info');
        $welcomeMsg = $this->input->post('welcome_msg',true);
        $caraMendaftar = $this->input->post('cara_mendaftar',true);
        $dokumen = $this->input->post('dokumen',true);
        $info_pembayaran = $this->input->post('info_pembayaran',true);
        $data=array(
            'welcome_msg' => $welcomeMsg,
            'cara_mendaftar' => $caraMendaftar,
            'dokumen' => $dokumen,
            'info_pembayaran' => $info_pembayaran
        );
        $this->db->where('id_info', $id);
        return $this->db->update('_info',$data);
    }
}
