<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Receipt extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		// $customer = $this->Customer_model->get_all();

		$data = array(
			'controller' => 'Receipt',
			'judul_halaman' => 'Find Receipt',

		);
		$this->load->view('admin/templates/header', $data);
		$this->load->view('admin/templates/sidebar');
		$this->load->view('admin/receipt_view', $data);
		$this->load->view('admin/templates/footer');
		$this->session->set_flashdata('');
	}
}
