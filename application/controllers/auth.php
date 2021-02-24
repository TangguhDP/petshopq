<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('v_login');
	}

	public function register()
	{
		$this->load->view('v_register');
	}

	public function logout()
	{
		$this->load->view('v_register');
	}
}
