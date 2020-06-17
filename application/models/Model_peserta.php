<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Model_peserta extends CI_Model
{

    public function __construct()
    {
        $this->load->database();
    }
    function getAll(){
        $this->db->select('*');
        $this->db->from('peserta_pendaftar');
        return $this->db->get()->result_array();
    }

    function getPartially(){
        $this->db->select('peserta_pendaftar.id_pendaftaran,
                            peserta_pendaftar.id_user,
                            peserta_pendaftar.kd_peserta,
                            peserta_pendaftar.nm_lengkap,
                            peserta_pendaftar.jk,
                            peserta_pendaftar.status,peserta_bayar_daftar.img_bukti');
        $this->db->join('peserta_bayar_daftar', 'peserta_bayar_daftar.id_pendaftaran = peserta_pendaftar.id_pendaftaran');
        return $this->db->get('peserta_pendaftar')->result_array();
    }

    function findBy(){
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
            $this->db->join('peserta_bayar_daftar', 'peserta_bayar_daftar.id_pendaftaran = peserta_pendaftar.id_pendaftaran');
            $this->db->where('peserta_pendaftar.id_pendaftaran', $idPendaftaran);
            $query2 = $this->db->get();
            return $query2->row_array();
        }
    }

    function findByUser()
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

    function changeJurusan()
    {
        $idPendaftaran = $this->input->post('id_pendaftaran');
        $idJurusan = $this->input->post('id_jurusan');
        $this->db->set('id_jurusan', $idJurusan);
        $this->db->where('id_pendaftaran', $idPendaftaran);
        return $this->db->update('peserta_pendaftar');
    }

    public function changeStatus()
    {
        $id = $this->input->post('id_pendaftaran');
        $status=$this->input->post('status');
        
	    $this->db->set('status',$status, true);
		$this->db->where('id_pendaftaran', $id);
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
    
    }

    function updateBuktiPembayaran($idPendaftaran, $dataKonfirmasiPembayaran, $dataUbahStatus){
        $this->db->where('id_pendaftaran', $idPendaftaran);
        $this->db->update('peserta_pendaftar', $dataUbahStatus);

        $this->db->where('id_pendaftaran', $idPendaftaran);
        return $this->db->update('peserta_bayar_daftar', $dataKonfirmasiPembayaran);
    }
}

