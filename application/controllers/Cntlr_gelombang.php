<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cntlr_gelombang extends CI_Controller {
	function __construct(){
		parent::__construct();
        redirectIfNotLogin();
        $this->load->model('model_gelombang');
	}
	public function index()
	{
        $data = [
			'modal' => '_adminpages/gelombang/modal_gelombang',
			'title' => 'Gelombang',
            'content' => '_adminpages/gelombang/index'
		];
		$this->load->view('_adminpages/master-admin',$data);
    }
    
    public function tampilData()
    {
        $data = $this->model_gelombang->getAll();
        echo json_encode($data);
    }

    public function simpanData()
    {
        $data = $this->model_gelombang->inputData();
        echo json_encode($data);
    }

    public function updateData()
    {
        $data = $this->model_gelombang->updateData();
        echo json_encode($data);
    }

    public function hapusData()
    {
        $data = $this->model_gelombang->hapusData();
        echo json_encode($data);
    }

    public function changeStatus()
    {
        $data = $this->model_gelombang->changeStatus();
        echo json_encode($data);
    }
}
