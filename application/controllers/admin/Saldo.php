<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saldo extends CI_Controller {

	public function index()
	{
		$data['title'] = "Saldo Bank Saku | (Ban Sampahku)";
		$data['page'] = "saldo";
		$this->load->view('admin/saldo/index', $data);
	}

	public function add($id){
		$data['title'] = "Tambah Saldo | Bank Saku";
		$data['page'] = "saldo";
		$this->load->view('admin/saldo/add', $data);
	}
}
