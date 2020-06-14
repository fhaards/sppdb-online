<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Error404 extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        // if ($this->session->userdata('status') != "login") {
        //     redirect(base_url("login"));
        // }
        $this->load->helper('url');
    }

    public function index()
    {
        $this->load->view('error404');
    }
}
