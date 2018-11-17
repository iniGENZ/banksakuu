<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function index()
	{
		$data['title'] = "Admin Bank Saku | (Ban Sampahku)";
		$data['page'] = "dashboard";
		$this->load->view('admin/dashboard/index', $data);
	}

	public function profile()
	{
		$data['title'] = "Admin Bank Saku | (Ban Sampahku)";
		$data['page'] = "dashboard";
		$this->load->view('admin/dashboard/index', $data);
	}

}
