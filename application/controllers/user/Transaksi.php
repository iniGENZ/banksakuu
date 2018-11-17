<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	public function index()
	{
		$data['title'] = "Transaksi | Bank Saku";
		$data['page'] = "transaksi";
		$this->load->view('user/transaksi/index', $data);
	}

	public function add($id)
	{
		$data['title'] = "Tambah Transaksi | Bank Saku";
		$data['page'] = "transaksi";
		$this->load->view('user/transaksi/add', $data);
	}
}
