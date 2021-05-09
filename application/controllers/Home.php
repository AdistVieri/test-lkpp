<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Customer_model');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('home_view');
	}

	public function tentang_kami()
	{
		$this->load->view('tentang_kami_view');
	}

	public function portfolio()
	{
		$this->load->view('portfolio_view');
	}
}
