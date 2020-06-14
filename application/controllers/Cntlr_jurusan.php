<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cntlr_jurusan extends CI_Controller {
	function __construct(){
		parent::__construct();
        redirectIfNotLogin();
        $this->load->model('model_jurusan');
	}
	public function index()
	{
        $data['logo']= $this->model_sekolah->getAll();
        $data['title']='Jurusan';
        $data['modal']='_adminpages/jurusan/modal_jurusan';
        $data['content']='_adminpages/jurusan/index';
		$this->load->view('_adminpages/master-admin',$data);
    }
    
    public function tampilData()
    {
        $data = $this->model_jurusan->getAllJurusan();
        echo json_encode($data);
    }

    public function simpanData()
    {
        $data = $this->model_jurusan->inputData();
        echo json_encode($data);
    }

    public function updateData()
    {
        $data = $this->model_jurusan->updateData();
        echo json_encode($data);
    }

    public function hapusData()
    {
        $data = $this->model_jurusan->hapusData();
        echo json_encode($data);
    }

    public function changeStatus()
    {
        $data = $this->model_jurusan->changeStatus();
        echo json_encode($data);
    }
}
