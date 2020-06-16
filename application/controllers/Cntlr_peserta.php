<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cntlr_peserta extends CI_Controller {
	function __construct(){
		parent::__construct();
        redirectIfNotLogin();
        $this->load->model('model_peserta');
	}
	public function index()
	{
        $data = [
			'modal' => '_adminpages/peserta/modal_peserta',
			'title' => 'Peserta',
            'content' => '_adminpages/peserta/index'
		];
		$this->load->view('_adminpages/master-admin',$data);
    }
    public function tampilData()
    {
        $data = $this->modal_peserta->getAll();
        echo json_encode($data);
    }

    public function simpanData()
    {
        $data = $this->modal_peserta->inputData();
        echo json_encode($data);
    }

    public function updateData()
    {
        $data = $this->modal_peserta->updateData();
        echo json_encode($data);
    }

    public function hapusData()
    {
        $data = $this->modal_peserta->hapusData();
        echo json_encode($data);
    }
}