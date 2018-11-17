<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saldo extends CI_Controller {

	public function index()
	{
		$data['title'] = "Saldo | Bank Saku";
		$data['page'] = "saldo";
		$this->load->view('user/saldo/index', $data);
	}
}
