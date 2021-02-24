<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function index()
	{
		$this->load->view('v_landing');
	}

	public function produk()
	{
		$this->load->view('v_admin_produk');
	}

	public function user()
	{
		$this->load->view('v_admin_user');
	}

	public function form_produk()
	{
		$this->load->view('v_form_produk');
	}

	public function form_user()
	{
		$this->load->view('v_form_user');
	}
    
}
