<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {

	public function index()
	{
		$data['title'] = "Product | Bank Saku";
		$data['page'] = "product";
		$this->load->view('admin/product/index', $data);
	}

	public function add($id){
		$data['title'] = "Tambah Product | Bank Saku";
		$data['page'] = "product";
		$this->load->view('admin/product/add', $data);
	}
}
