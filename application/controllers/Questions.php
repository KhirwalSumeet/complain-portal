<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {
	public function view($page = 'Complain Portal')
	{
	        $data['title'] = ucfirst($page); // Capitalize the first letter
	        $this->load->helper('url');
	        $this->load->view('layout/header', $data);
	        $this->load->view('layout/navbar');
	        $this->load->view("questions");
	        $this->load->view('layout/footer');
	}
	public function index(){
		$this->view();
	}
}
