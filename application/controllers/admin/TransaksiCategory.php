<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TransaksiCategory extends CI_Controller {

	public function index()
	{
		$data['title'] = "Kategori Transaksi | Bank Saku";
		$data['page'] = "transaksi_cat";
		$this->load->view('admin/transaksicategory/index', $data);
	}

	public function add($id){
		$data['title'] = "Tambah Kategori Transaksi | Bank Saku";
		$data['page'] = "transaksi_cat";
		$this->load->view('admin/transaksicategory/add', $data);
	}
}
