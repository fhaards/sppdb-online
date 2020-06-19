<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cntlr_sekolah extends CI_Controller {
	function __construct(){
		parent::__construct();
        redirectIfNotLogin();
    }
    
	public function index()
	{
        //$data['logo']= $this->model_sekolah->getAll();
        $data = [
			'modal' => '_adminpages/sekolah/modal_sekolah',
			'title' => 'Data Sekolah',
            'content' => '_adminpages/sekolah/index',
            'jsloader' => 'opSekolah'
		];
		$this->load->view('_adminpages/master-admin',$data);
    }
    
    public function tampilData()
    {
        $data = $this->model_sekolah->getAll();
        echo json_encode($data);
    }

    public function updateData()
    {
        $data = $this->model_sekolah->updateData();
        echo json_encode($data);
    }
    public function editLogo()
    {
        $config['upload_path']="./assets/images/school";
        $config['allowed_types']='gif|jpg|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library('upload',$config);
        if($this->upload->do_upload("file")){
            $getId = $this->input->post('id_sekolah');
            $imageData  = array('upload_data' => $this->upload->data());
            $image = $imageData['upload_data']['file_name']; 
            $this->model_sekolah->upLogo($getId,$image);
            redirect('school');
        }
    }

}
