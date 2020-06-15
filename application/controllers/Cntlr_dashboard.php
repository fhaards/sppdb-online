<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cntlr_dashboard extends CI_Controller {
	function __construct(){
		parent::__construct();
		redirectIfNotLogin();
	}
	public function index()
	{
		$data = [
			'modal' => '_adminpages/_partials/empty',
			'title' => 'Welcome',
			'content' => '_adminpages/dashboard'
		];
		$this->load->view('_adminpages/master-admin',$data);
	}
}
