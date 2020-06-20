<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Cntlr_ruangujian extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        redirectIfNotLogin();
        $this->load->model('model_ruang');
    }
    public function index()
    {
        $data = [
            'modal' => '_adminpages/ruang_ujian/modal_ruang',
            'title' => 'Ruang Ujian',
            'content' => '_adminpages/ruang_ujian/index',
            'jsloader' => 'opRuangUjian'
        ];
        $this->load->view('_adminpages/master-admin', $data);
    }
    public function detailData($id)
    {   
        $this->load->library('RoomLayout');
        $this->roomlayout->init(30);
        $data = [
            'modal' => '_adminpages/ruang_ujian/modal_ruang',
            'title' => 'Ruang Ujian',
            'content' => '_adminpages/ruang_ujian/detail',
            'jsloader' => 'opRuangUjian',
            'detailRuang' => $this->model_ruang->detailRuangUjian($id),
            // 'listDetailRuang' => $this->model_ruang->listDetailRuangUjian($id),
            'listDetailRuang' => $this->roomlayout->roomFormatter($this->model_ruang->listDetailRuangUjian($id))
        ];
        $this->load->view('_adminpages/master-admin', $data);
    }
    public function tampilData()
    {
        $data = $this->model_ruang->getAll();
        echo json_encode($data);
    }

    public function simpanData()
    {
        $data = $this->model_ruang->inputData();
        echo json_encode($data);
    }

    public function updateData()
    {
        $data = $this->model_ruang->updateData();
        echo json_encode($data);
    }

    public function hapusData()
    {
        $data = $this->model_ruang->hapusData();
        echo json_encode($data);
    }
}
