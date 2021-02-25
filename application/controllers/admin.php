<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct(){
        parent::__construct();
        if($this->session->userdata('role') != '1'){
			redirect();
		}
    }

	public function index()
	{
		$data['page'] = 'home';
		$this->load->view('v_landing',$data);
	}

	public function produk()
	{
		$data['page'] = 'produk';
		$params = $this->input->get(NULL,TRUE);
		$data['params'] = $params;
		$data['produk'] = $this->Mdl_web->selectProduk($params);
		$this->load->view('v_admin_produk',$data);
	}

	public function user()
	{
		$data['page'] = 'user';
		$data['users'] = $this->Mdl_web->selectUserAccount('');
		$this->load->view('v_admin_user',$data);
	}

	public function form_produk()
	{
		$data['page'] = 'produk';
		if($this->input->post('nama')){
			$datas = $this->input->post(NULL,TRUE);
			$this->Mdl_web->createProduk($datas);
			$callback['message'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
											<strong>Berhasil !</strong> Berhasil menambahkan produk
										</div>';
			$this->session->set_flashdata($callback);
			redirect('Admin/produk');
		}
		$this->load->view('v_form_produk',$data);
	}

	public function form_user()
	{
		$data['page'] = 'user';
		if($this->input->post('nama')){
			$datas = $this->input->post(NULL,TRUE);
			$check = $this->Mdl_web->selectUserAccount($datas);
			if($check){
				$callback['message'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<strong>Gagal !</strong> Email akun sudah digunakan
										</div>';
			  	$this->session->set_flashdata($callback);
				redirect('Admin/form_user');
			}else{
				$this->Mdl_web->createUserAccount($datas);
				$callback['message'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
												<strong>Berhasil !</strong> Berhasil menambahkan user
											</div>';
				$this->session->set_flashdata($callback);
				redirect('Admin/user');
			}
		}
		$this->load->view('v_form_user',$data);
	}

	public function delete_produk($id=''){
		if($id){
			$result = $this->Mdl_web->deleteProduk($id);
			if($result){
				$callback['message'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
											<strong>Berhasil !</strong> Berhasil menghapus produk
											</div>';
				$this->session->set_flashdata($callback);
				redirect('Admin/produk');
			}else{
				$callback['message'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<strong>Gagal !</strong> Gagal menghapus produk
											</div>';
				$this->session->set_flashdata($callback);
				redirect('Admin/produk');
			}
		}else{
			redirect('Admin/produk');
		}
	}

	public function edit_produk($id){
		if($id){
			$params = array('id_produk' => $id);
			$results = $this->Mdl_web->selectProduk($params);
			if($this->input->post('id_produk')){
				$datas = $this->input->post(NULL,TRUE);
				$this->Mdl_web->editProduk($datas);
				$callback['message'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
											<strong>Berhasil !</strong> Produk berhasil di edit
											</div>';
				$this->session->set_flashdata($callback);
				redirect('Admin/produk');
			}
			if($results){
				$data['produk'] = $results;
				$data['page'] = 'produk';
				$this->load->view('v_form_produk',$data);
			}else{
				$callback['message'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<strong>Gagal !</strong> Produk tidak ada untuk di edit
											</div>';
				$this->session->set_flashdata($callback);
				redirect('Admin/produk');
			}
		}else{
			redirect("Admin/produk");
		}
	}

	public function delete_user($id=''){
		if($id){
			$result = $this->Mdl_web->deleteUserAccount($id);
			if($result){
				$callback['message'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
											<strong>Berhasil !</strong> Berhasil menghapus user
											</div>';
				$this->session->set_flashdata($callback);
				redirect('Admin/user');
			}else{
				$callback['message'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<strong>Gagal !</strong> Gagal menghapus user
											</div>';
				$this->session->set_flashdata($callback);
				redirect('Admin/user');
			}
		}else{
			redirect('Admin/user');
		}
	}

	public function edit_user($id){
		if($id){
			$params = array('id_user' => $id);
			$results = $this->Mdl_web->selectUserAccount($params);
			if($this->input->post('id_user')){
				$datas = $this->input->post(NULL,TRUE);
				$this->Mdl_web->editUserAccount($datas);
				$callback['message'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
											<strong>Berhasil !</strong> User berhasil di edit
											</div>';
				$this->session->set_flashdata($callback);
				redirect('Admin/user');
			}
			if($results){
				$data['user'] = $results;
				$data['page'] = 'user';
				$this->load->view('v_form_user',$data);
			}else{
				$callback['message'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<strong>Gagal !</strong> User tidak ada untuk di edit
											</div>';
				$this->session->set_flashdata($callback);
				redirect('Admin/user');
			}
		}else{
			redirect("Admin/user");
		}
	}
    
}
