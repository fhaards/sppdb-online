<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cntlr_berita extends CI_Controller {
	function __construct(){
		parent::__construct();
        redirectIfNotLogin();
        $this->load->model('model_berita');
	}
	public function index()
	{
        $data['logo']= $this->model_sekolah->getAll();
        $data['title']='Berita';
        $data['modal']='_adminpages/berita/modal_berita';
        $data['content']='_adminpages/berita/index';
		$this->load->view('_adminpages/master-admin',$data);
    }
    
    public function tampilData()
    {
        $data = $this->model_berita->getAll();
        echo json_encode($data);
    }

    public function simpanData()
    {
        $data = $this->model_berita->inputData();
        echo json_encode($data);
    }

    public function showUpdate($id)
    {
        $data['logo']= $this->model_sekolah->getAll();
        $data['title']='Berita';
        $data['modal']='_adminpages/berita/modal_berita';
        $data['content']='_adminpages/berita/edit';
        $data['showDetail']=$this->model_berita->detailData($id);
        $this->load->view('_adminpages/master-admin',$data);
    }

    public function updateData($id)
    {
        $this->form_validation->set_rules('judul_berita', 'Judul Berita', 'required');
		if($this->form_validation->run() === FALSE){
			echo "error";
		}
		else{
			$this->model_berita->updateData($id);
			redirect('berita');
		}
    }

    public function hapusData()
    {
        $data = $this->model_berita->hapusData();
        echo json_encode($data);
    }

    public function detailData($id)
	{
        $data['logo']= $this->model_sekolah->getAll();
        $data['title']='Berita';
        $data['modal']='_adminpages/berita/modal_berita';
        $data['content']='_adminpages/berita/detail';
        $data['showDetail']=$this->model_berita->detailData($id);
		$this->load->view('_adminpages/master-admin',$data);
    }
}
