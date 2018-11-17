<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$data['title'] = "Pengguna | Bank Saku";
		$data['page'] = "user";
		$this->load->view('admin/user/index', $data);
	}

	public function add($id){
		$data['title'] = "Tambah Pengguna | Bank Saku";
		$data['page'] = "user";
		$this->load->view('admin/user/add', $data);
	}
}
