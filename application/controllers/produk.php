<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {

	public function index()
	{
		$data['page'] = 'produk';
		$params = $this->input->get(NULL,TRUE);
		$data['params'] = $params;
		$data['produk'] = $this->Mdl_web->selectProduk($params);
		$this->load->view('v_produk',$data);
	}

	public function checkout(){
		if(($this->input->post('quantity')) && ($this->input->post('id_produk'))){
			$params = $this->input->post(NULL,TRUE);
			$checkProduk = $this->Mdl_web->selectProduk($params);
			if($checkProduk){
				if($checkProduk[0]->stok >= $params['quantity']){
					$restok = array(
								'id_produk' => $params['id_produk'] , 
								'stok' => ($checkProduk[0]->stok - $params['quantity']) 
							);
					$this->Mdl_web->updateStok($restok);
					$this->Mdl_web->createCheckout($params);
					$callback['message'] = '<div class="alert alert-success alert-dismissible fade show" role="alert">
											<strong>Berhasil !</strong> Berhasil membeli produk
										</div>';
					$this->session->set_flashdata($callback);
					redirect('Produk');
				}else{
					$callback['message'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<strong>Gagal !</strong> Stok produk sudah habis
										</div>';
					$this->session->set_flashdata($callback);
					redirect('Produk');
				}
			}else{
				$callback['message'] = '<div class="alert alert-danger alert-dismissible fade show" role="alert">
											<strong>Gagal !</strong> Produk sudah tidak ada
										</div>';
				$this->session->set_flashdata($callback);
				redirect('Produk');
			}
		}
	}
}
