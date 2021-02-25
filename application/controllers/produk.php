<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index()
	{
		$data['page'] = 'produk';
		$this->load->view('v_produk',$data);
	}
}
