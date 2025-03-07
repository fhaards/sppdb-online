<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cntlr_peserta extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        redirectIfNotLogin();
        $this->load->model('model_peserta');
        $this->load->model('model_ruang');
    }
    public function index()
    {
        $data = [
            'modal' => '_adminpages/peserta/modal_peserta',
            'title' => 'Peserta',
            'content' => '_adminpages/peserta/index',
            'jsloader' => 'opPeserta'
        ];
        $this->load->view('_adminpages/master-admin', $data);
    }
    public function tampilData()
    {
        $data = $this->model_peserta->getPartially();
        echo json_encode($data);
    }

    public function simpanData()
    {
        $data = $this->model_peserta->inputData();
        echo json_encode($data);
    }

    public function updateData()
    {
        $data = $this->model_peserta->updateData();
        echo json_encode($data);
    }

    public function hapusData()
    {
        $data = $this->model_peserta->hapusData();
        echo json_encode($data);
    }

    public function changeStatus()
    {
        $data = $this->model_peserta->changeStatus();
        echo json_encode($data);
    }

    public function cekRuang()
    {
        $data = $this->model_ruang->cekRuang();
        echo json_encode($data);
    }
}
