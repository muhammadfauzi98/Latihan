<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function __construct()
	{	
		parent::__construct();
		$this->load->library('cart');
		$this->load->model('keranjang_model');
	}
	
	public function cara_bayar()
		{
			$data['kategori'] = $this->keranjang_model->get_kategori_all();
			$this->load->view('customer/cara_bayar',$data);
		}

	public function contact_us()
	{
		$this->load->view('customer/contact_us');
	}		
}
