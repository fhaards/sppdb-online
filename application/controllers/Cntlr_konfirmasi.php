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
        $this->load->helper('directory');
        $this->load->helper("file");
    }

    public function index()
    {
        $data = [
            'modal' => '_adminpages/konfirmasi/modal_konfirmasi',
            'title' => 'Konfirmasi Pendaftaran',
            'content' => '_adminpages/konfirmasi/index'
        ];
        $data['getJurusan'] = $this->model_jurusan->getJurusanAktif();
        $this->load->view('_adminpages/master-admin', $data);
    }

    public function simpanData()
    {
        $this->form_validation->set_rules('kota', 'Kota', 'required');
        $this->form_validation->set_rules('nisn', 'Nisn', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('failConf', ' ');
            redirect(base_url("konfirmasi"));
        } else {
            $idPendaftaran = $this->input->post('idPendaftaran');
            $kdpeserta = getPesertaData()['kd_peserta'];
            $uploadPath = './uploads/dokumen_peserta/' . $kdpeserta;
            $config = array('upload_path' => $uploadPath, 'allowed_types' =>
            'jpg|jpeg|gif|png', 'max_size' => '5000', 'encrypt_name' => true);

            $this->load->library('upload', $config);
            // if (!is_dir('uploads/dokumen_peserta')) {
            //     mkdir($uploadPath, 0777, true);
            // }

            if (!is_dir('uploads/dokumen_peserta/' . $kdpeserta)) {
                mkdir($uploadPath, 0777, true);
            } else {
            }

            if ($this->upload->do_upload("photo")) {
                unlink($uploadPath . '/' . getPesertaData()['photo']);
                $imgPhoto  = array('upload_data' => $this->upload->data());
                $getImgPhoto = $imgPhoto['upload_data']['file_name'];
            } else {
                $getImgPhoto = $this->input->post('cekImgPhoto');
            }

            if (getPesertaData()['status'] == 'Valid(Waiting)') {
                $setStatus = getPesertaData()['status'];
            } else {
                $setStatus = "Valid(Unpaid)";
            }

            $data = array(
                'nisn' => $this->input->post('nisn'),
                'jk' => $this->input->post('jenisK'),
                'agama' => $this->input->post('agama'),
                'tempat_lahir' => $this->input->post('tempatLahir'),
                'tgl_lahir' => $this->input->post('tglLahir'),
                'provinsi' => $this->input->post('provinsi'),
                'kota' => $this->input->post('kota'),
                'alamat' => $this->input->post('alamat'),
                'photo' => $getImgPhoto,
                'status' => $setStatus
            );

            $dataOrtu = array(
                'nm_ayah' => $this->input->post('nm_ayah'),
                'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
                'nm_ibu' => $this->input->post('nm_ibu'),
                'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
                'gaji_orangtua' => $this->input->post('gaji_orangtua')
            );

            if ($this->upload->do_upload("ijasah")) {
                unlink($uploadPath . '/' . getPesertaData()['img_ijasah']);
                $imgIjasah  = array('upload_data' => $this->upload->data());
                $getImgIjasah = $imgIjasah['upload_data']['file_name'];
            } else {
                $getImgIjasah = $this->input->post('imgIjasahCek');
            }

            if ($this->upload->do_upload("skhun")) {
                unlink($uploadPath . '/' . getPesertaData()['img_skhun']);
                $imgSkhun  = array('upload_data' => $this->upload->data());
                $getImgSkhun = $imgSkhun['upload_data']['file_name'];
            } else {
                $getImgSkhun = $this->input->post('imgSkhunCek');
            }

            if ($this->upload->do_upload("rsem4")) {
                unlink($uploadPath . '/' . getPesertaData()['img_raport_s4']);
                $imgrsem4  = array('upload_data' => $this->upload->data());
                $getImgrsem4 = $imgrsem4['upload_data']['file_name'];
            } else {
                $getImgrsem4 = $this->input->post('imgR4Cek');
            }

            if ($this->upload->do_upload("rsem5")) {
                unlink($uploadPath . '/' . getPesertaData()['img_raport_s5']);
                $imgrsem5  = array('upload_data' => $this->upload->data());
                $getImgrsem5 = $imgrsem5['upload_data']['file_name'];
            } else {
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
            redirect(base_url("konfirmasi"));
        }
    }

    public function konfirmasiPembayaran()
    {

        $data['getJurusan'] = $this->model_jurusan->getJurusanAktif();
        $data = [
            'modal' => '_adminpages/konfirmasi/modal_konfirmasi',
            'title' => 'Konfirmasi Pembayaran',
            'content' => '_adminpages/konfirmasi/form_konfirmasi_pembayaran'
        ];
        $this->load->view('_adminpages/master-admin', $data);
    }

    public function updateKonfirmasiPembayaran()
    {
        $this->form_validation->set_rules('idPendaftaran', 'Bukti Pembayaran', 'required');
        if ($this->form_validation->run() === FALSE) {
            $this->session->set_flashdata('failUpload', ' ');
            redirect(base_url("konfirmasi-pembayaran"));
        } else {
            $idPendaftaran = $this->input->post('idPendaftaran');
            $kdpeserta = getPesertaData()['kd_peserta'];
            $uploadPath = './uploads/dokumen_peserta/' . $kdpeserta . '/bukti_pembayaran';
            $config = array('upload_path' => $uploadPath, 'allowed_types' =>
            'jpg|jpeg|gif|png', 'max_size' => '5000', 'encrypt_name' => true);

            $this->load->library('upload', $config);

            if (!is_dir('uploads/dokumen_peserta/' . $kdpeserta . '/bukti_pembayaran')) {
                mkdir($uploadPath, 0777, true);
            } else {
            }

            if ($this->upload->do_upload("bukti")) {
                unlink($uploadPath . '/' . getPesertaData()['img_bukti']);
                $imgBukti  = array('upload_data' => $this->upload->data());
                $getImgBukti = $imgBukti['upload_data']['file_name'];
            } else {
                $getImgBukti = $this->input->post('cekImgBukti');
            }

            $dataKonfirmasiPembayaran = [
                'img_bukti' => $getImgBukti
            ];

            $dataUbahStatus = [
                'status' => 'Valid(Waiting)'
            ];

            $this->model_peserta->updateBuktiPembayaran($idPendaftaran, $dataKonfirmasiPembayaran, $dataUbahStatus);
            $this->session->set_flashdata('successUpload', ' ');
            redirect(base_url("konfirmasi-pembayaran"));
        }
    }
    public function gantiJurusan()
    {
        $data = $this->model_peserta->changeJurusan();
        echo json_encode($data);
    }
}
