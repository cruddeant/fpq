<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	
	public function index()
	{
		$check = $this->session->userdata('admin');
		if($check)
		{
			redirect('admin');
		}
		$this->load->view('head');
		$this->load->view('header');
		$this->load->view('home');
		$this->load->view('footer');
	}

	// public function register()
	// {
	// 	$this->load->view('head');
	// 	$this->load->view('header2');
	// 	$this->load->view('register');
	// 	$this->load->view('footer');
	// }	
	
}
