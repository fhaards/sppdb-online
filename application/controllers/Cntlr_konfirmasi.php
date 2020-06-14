<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cntlr_konfirmasi extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        redirectIfNotLogin();
        $this->load->model('model_jurusan');
        $this->load->model('model_peserta');
    }

    public function index()
    {
        $data['logo'] = $this->model_sekolah->getAll();
        $data['getJurusan'] = $this->model_jurusan->getJurusanAktif();
        $data['title'] = 'Konfirmasi Pendaftaran';
        $data['modal'] = '_adminpages/konfirmasi/modal_konfirmasi';
        $data['content'] = '_adminpages/konfirmasi/index';
        $this->load->view('_adminpages/master-admin', $data);
    }

    public function simpanData()
    {
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('nisn', 'Nisn', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('failConf', '<div class="alert alert-danger"> Gagal Konfirmasi </div>');
            redirect(base_url("dashboard"));
        } else {
            $idPendaftaran = $this->input->post('idPendaftaran');

            $data = array(
                'nisn' => $this->input->post('nisn'),
                'jk' => $this->input->post('jenisK'),
                'agama' => $this->input->post('agama'),
                'tempat_lahir' => $this->input->post('tempatLahir'),
                'tgl_lahir' => $this->input->post('tglLahir'),
                'provinsi' => $this->input->post('provinsi'),
                'kota' => $this->input->post('kota'),
                'alamat' => $this->input->post('alamat'),
                'status' => 'Valid(Unpaid)'
            );

            $dataOrtu = array(
                'nm_ayah' => $this->input->post('nm_ayah'),
                'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                'nm_ibu' => $this->input->post('nm_ibu'),
                'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                'gaji_orangtua' => $this->input->post('gaji_orangtua')
            );

            $config['upload_path'] = './uploads/dokumen_peserta/';
            $config['allowed_types'] = 'jpg|png';
            $config['max_size'] = 5024;
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);

            if ($this->upload->do_upload("ijasah")) {
                $imgIjasah  = array('upload_data' => $this->upload->data());
                $getImgIjasah = $imgIjasah['upload_data']['file_name'];
            }else{
                $getImgIjasah = $this->input->post('imgIjasahCek');
            }

            if ($this->upload->do_upload("skhun")) {
                $imgSkhun  = array('upload_data' => $this->upload->data());
                $getImgSkhun = $imgSkhun['upload_data']['file_name'];
            }else{
                $getImgSkhun = $this->input->post('imgSkhunCek');
            }

            if ($this->upload->do_upload("rsem4")) {
                $imgrsem4  = array('upload_data' => $this->upload->data());
                $getImgrsem4 = $imgrsem4['upload_data']['file_name'];
            }else{
                $getImgrsem4 = $this->input->post('imgR4Cek');
            }

            if ($this->upload->do_upload("rsem5")) {
                $imgrsem5  = array('upload_data' => $this->upload->data());
                $getImgrsem5 = $imgrsem5['upload_data']['file_name'];
            }else{
                $getImgrsem5 = $this->input->post('imgR5Cek');
            }

            $dataDokumen = array(
                'img_ijasah' => $getImgIjasah,
                'img_skhun' => $getImgSkhun,
                'img_raport_s4' => $getImgrsem4,
                'img_raport_s5' => $getImgrsem5
            );

            $this->model_peserta->updateDataPribadi($idPendaftaran, $data, $dataOrtu, $dataDokumen);
            $this->session->set_flashdata('successConf', '<div class="alert alert-success"> Sukses Konfirmasi </div>');
            redirect(base_url("dashboard"));
        }
    }

    public function konfirmasiPembayaran(){
        $data['logo'] = $this->model_sekolah->getAll();
        $data['getJurusan'] = $this->model_jurusan->getJurusanAktif();
        $data['title'] = 'Konfirmasi Pembayaran';
        $data['modal'] = '_adminpages/konfirmasi/modal_konfirmasi';
        $data['content'] = '_adminpages/konfirmasi/form_konfirmasi_pembayaran';
        $this->load->view('_adminpages/master-admin', $data);
    }
    public function gantiJurusan()
    {
        $data = $this->model_peserta->changeJurusan();
        echo json_encode($data);
    }
}
