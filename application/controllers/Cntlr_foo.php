<?php
	defined('BASEPATH') or exit('No direct script access allowed');

class Cntlr_foo extends CI_Controller
{
	public function index()
	{
		$this->load->view('frontend/foo');
	}
}