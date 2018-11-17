<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['title'] = "Beranda | Bank Saku";
		$data['page'] = "dashboard";
		$this->load->view('user/dashboard/index', $data);
	}
}
