<?php
	defined('BASEPATH') or exit('No direct script access allowed');

class Cntlr_frontend extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url_helper');
		$this->load->helper('array');
		$this->load->model('model_gelombang');
		$this->load->model('model_berita');
		$this->load->model('model_jurusan');
		// $this->load->library('pagination');
	}

	public function index()
	{
		$data['getBerita']= $this->model_berita->showAll();
		$data['logo']= $this->model_sekolah->getAll();
		$data['getGelStatus']= $this->model_gelombang->getStatusAktif();
		$data['num_row'] = count($data['getGelStatus'] );
		$data['infoPendaftaran']= $this->model_infopendaftaran->getAll();
		$data['getJurusan']= $this->model_jurusan->getJurusanAktif();
		$data['title'] = 'Selamat Datang PMB Online';
		$this->load->view('frontend/master', $data);
	}

	public function login()
	{
		$data['content'] = '_adminpage/master-admin';
		if ($this->session->userdata('status') == "login") {
			redirect(base_url("dashboard"));
		} else {
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			if ($this->form_validation->run() === FALSE) {
				$this->load->view('master-admin', $data);
			} else {
				$email = $this->input->post('email');
				$password = $this->input->post('password');

				$cek = $this->model_user->cekLogin($email, $password);
				if ($cek) {
					$userData = $this->model_user->findBy('email', $email);
					$data_session = array('email' => $email, 'status' => "login", 'level' => $userData['level']);
					$this->session->set_userdata($data_session);
					redirect(base_url("dashboard"));
				} else {
					$scriptJs = '$(function(){$("#modalLogin").modal("show")});';
					runScriptJs($scriptJs);
					$this->session->set_flashdata('failLogin', 'Data berhasil ditambahkan');
					redirect(base_url("webapp"));
				}
			}
		}
	}

	public function registrasi()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');
		if ($this->form_validation->run() === FALSE) {
			$scriptJs = '$(function(){$("#modalLogin").modal("show")});';
			runScriptJs($scriptJs);
			$this->session->set_flashdata('failRegist', '');
			redirect(base_url("webapp"));
		} else {
			$nama = $this->input->post('nama');
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			$newPass = password_hash($password, PASSWORD_DEFAULT);
			$gelombang = $this->input->post('idGel');
			$jurId = $this->input->post('jurId');
			$this->model_user->registrasi($nama,$email,$newPass,$gelombang,$jurId);
			$scriptJs = '$(function(){$("#modalLogin").modal("show")});';
			runScriptJs($scriptJs);
			$this->session->set_flashdata('successRegist', ' ');
			redirect(base_url("webapp"));
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url("webapp"));
	}

}
