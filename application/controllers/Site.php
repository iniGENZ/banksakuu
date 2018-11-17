<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __Contruct(){
		parent::__Contruct();
	}

	public function index()
	{
		$data['title'] = "Bank Saku | (Bank Sampahku)";
		$this->load->view('site/index', $data);
	}

	public function proses_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if ($username == "admin") {
			redirect('admin');
		} else if ($username != ''){
			redirect('user');
		} else {
			redirect('site');
		}
	}

	public function register(){
		$data['title'] = "Register | Bank Saku";
		$this->load->view('site/register', $data);
	}

	public function proses_register(){
		redirect('site');
	}

	public function logout(){
		redirect('site');
	}
}
