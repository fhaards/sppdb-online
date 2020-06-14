<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_peserta extends CI_Model
{
    protected $table = 'user';

    public function __construct()
    {
        $this->load->database();
    }

    function findBy()
    {
        $getIdUser = getUserData()['id_user'];
        $this->db->select('*');
        $this->db->from('peserta_pendaftar');
        $this->db->join('gelombang', 'gelombang.id_gel = peserta_pendaftar.id_gel');
        $this->db->join('jurusan', 'jurusan.id_jurusan = peserta_pendaftar.id_jurusan');
        $this->db->where('id_user', $getIdUser);
        $query = $this->db->get();
        return $query->row_array();
    }

    function getDataPeserta()
    {
        $getIdUser = getUserData()['id_user'];
        $this->db->select('id_pendaftaran');
        $this->db->from('peserta_pendaftar');
        $this->db->where('id_user', $getIdUser);
        $query = $this->db->get();
        $idPendaftaran=$query->row_array()['id_pendaftaran'];
        if($query){
            $this->db->select('*');
            $this->db->from('peserta_pendaftar');
            $this->db->join('peserta_orangtua', 'peserta_orangtua.id_pendaftaran = peserta_pendaftar.id_pendaftaran');
            $this->db->join('peserta_dokumen', 'peserta_dokumen.id_pendaftaran = peserta_pendaftar.id_pendaftaran');
            $this->db->where('peserta_pendaftar.id_pendaftaran', $idPendaftaran);
            $query2 = $this->db->get();
            return $query2->row_array();
        }
     
    }

    function changeJurusan()
    {
        $idPendaftaran = $this->input->post('id_pendaftaran');
        $idJurusan = $this->input->post('id_jurusan');
        $this->db->set('id_jurusan', $idJurusan);
        $this->db->where('id_pendaftaran', $idPendaftaran);
        return $this->db->update('peserta_pendaftar');
    }

    function updateDataPribadi($idPendaftaran, $data, $dataOrtu, $dataDokumen)
    {
        $idPendaftaranOrtu = $idPendaftaran;
        $idPendaftaranDokumen = $idPendaftaran;

        $this->db->where('id_pendaftaran', $idPendaftaran);
        $this->db->update('peserta_pendaftar', $data);

        $this->db->where('id_pendaftaran', $idPendaftaranOrtu);
        $this->db->update('peserta_orangtua', $dataOrtu);

        $this->db->where('id_pendaftaran', $idPendaftaranDokumen);
        return $this->db->update('peserta_dokumen', $dataDokumen);
        
        // if(!empty($dataDokumen)){
           
        // }
        // else{
        //     $dataDokumen2 = array(
        //         'img_ijasah' => $this->input->post('imgIjasahCek'),
        //         'img_skhun' => $this->input->post('imgSkhunCek'),
        //         'img_raport_s4' => $this->input->post('imgR4Cek'),
        //         'img_raport_s5' => $this->input->post('imgR5Cek')
        //     );
        //     $this->db->where('id_pendaftaran', $idPendaftaranDokumen);
        //     return $this->db->update('peserta_dokumen', $dataDokumen2);
        // }
    }
}

// $this->db->select('kd_orangtua');
// $this->db->where('id_pendaftaran', $idPendaftaranOrtu);
// $query2 = $this->db->get('peserta_orangtua');
// $kdOrtu=$query2->row_array()['kd_orangtua'];
// var_dump($idPendaftaranOrtu,$kdOrtu);
// exit;
