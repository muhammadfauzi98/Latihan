<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('login_model');
	}

	function index()
	{
		$this->load->view('admin/login.php');
	}

	function overview()
	{
		$this->load->view('admin/overview.php');
	}

	function login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->login_model->cek_login("overview",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("overview"));

		}else{
			echo "Username dan Password Salah!!!";
		}
	}

	function logout(){
		$this->session->sess_destroy();
    	redirect(base_url());
	}
}