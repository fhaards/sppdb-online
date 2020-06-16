<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_ruang extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }

    function getAll()
    {
        $this->db->select('ruang_ujian.id_ruang as ruangId,ruang_ujian.nm_ruang,ruang_ujian.max,COUNT(peserta_pendaftar.id_ruang) as total');
        $this->db->join('peserta_pendaftar', 'peserta_pendaftar.id_ruang = ruang_ujian.id_ruang','left');
        $this->db->from('ruang_ujian');
        $this->db->group_by("ruangId");
        return $this->db->get()->result_array();
    }
    
    public function inputData()
    {
        $data = [
            "nm_ruang" => $this->input->post('nm_ruang', true),
            "max" => $this->input->post('max', true),
        ];
        return $this->db->insert('ruang_ujian', $data);
    }

    public function updateData(){
        $id = $this->input->post('id_ruang');
        $data = [
            "nm_ruang" => $this->input->post('nm_ruang', true),
            "max" => $this->input->post('max', true),
        ];
        $this->db->where('id_ruang', $id);
        return $this->db->update('ruang_ujian',$data);
    }

    public function hapusData()
    {
        $id = $this->input->post('id_ruang');
        $this->db->where('id_ruang', $id);
        return $this->db->delete('ruang_ujian');
    }


}
