<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cntlr_infopendaftaran extends CI_Controller {
	function __construct(){
		parent::__construct();
        redirectIfNotLogin();
	}
	public function index()
	{
        $data['logo']= $this->model_sekolah->getAll();
        $data['infoPendaftaran'] = $this->model_infopendaftaran->getAll();
        $data['title']='Informasi Pendaftaran';
        $data['modal']='_adminpages/info_pendaftaran/modal_infopendaftaran';
        $data['content']='_adminpages/info_pendaftaran/index';
		$this->load->view('_adminpages/master-admin',$data);
    }
    public function tampilData()
    {
        $data = $this->model_infopendaftaran->getAll();
        echo json_encode($data);
    }

    public function updateData()
    {
        $data = $this->model_infopendaftaran->updateData();
        echo json_encode($data);
    }
}
