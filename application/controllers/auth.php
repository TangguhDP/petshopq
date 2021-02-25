<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		if($this->session->userdata('email')){
			redirect();
		}

		$data['page'] = 'login';

		if(($this->input->post('email'))&&($this->input->post('password'))){
			$params = $this->input->post(NULL,TRUE);
			$check = $this->Mdl_web->selectUserAccount($params);
			if($check){
				if($check[0]->password == $this->input->post('password')){
					$sess = array(
						'login_state' => true,
						'id_user' => $check[0]->id_user,
						'email' => $check[0]->email,
						'role' => $check[0]->role
					);
					$this->session->set_userdata($sess);
					if($check[0]->role == '1'){
						redirect('Admin');
					}else{
						redirect('Produk');
					}
				}else{
					$callback['message'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<strong>Gagal !</strong> Password salah
										</div>';
			  		$this->session->set_flashdata($callback);
					redirect('Auth');
				}
			}else{
				$callback['message'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<strong>Gagal !</strong> Email atau password salah
										</div>';
			  	$this->session->set_flashdata($callback);
				redirect('Auth');
			}
		}

		$this->load->view('v_login',$data);
	}

	public function register()
	{
		if($this->session->userdata('email')){
			redirect();
		}

		$data['page'] = 'register';

		if($this->input->post('email')){
			$params = $this->input->post(NULL,TRUE);
			$check = $this->Mdl_web->selectUserAccount($params);
			if($check){
				$callback['message'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<strong>Gagal !</strong> Email akun sudah digunakan
										</div>';
			  	$this->session->set_flashdata($callback);
				redirect('Auth/register');
			}else{
				$insert = $this->Mdl_web->createUserAccount($params);
				if($insert){
					$sess = array(
						'login_state' => true,
						'id_user' => $params['id_user'],
						'email' => $params['email'],
						'role' => $params['role']
					);
					$this->session->set_userdata($sess);
					redirect('Produk');
				}
			}
		}

		$this->load->view('v_register',$data);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Auth');
	}
}
