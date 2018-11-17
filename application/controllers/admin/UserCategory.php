<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserCategory extends CI_Controller {

	public function index()
	{
		$data['title'] = "Kategori Penguna | Bank Saku";
		$data['page'] = "user_cat";
		$this->load->view('admin/usercategory/index', $data);
	}

	public function add($id){
		$data['title'] = "Tambah Kategori Pengguna | Bank Saku";
		$data['page'] = "user_cat";
		$this->load->view('admin/usercategory/add', $data);
	}
}
