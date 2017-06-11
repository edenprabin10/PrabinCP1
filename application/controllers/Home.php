<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard');
	}
	
	public function register()
	{
		$this->load->view('register');
	}
	
	public function login()
	{
		$this->load->view('login');	
	}

	public function admindash()
	{
		$this->load->view('admindash');
	}

	public function customerdash()
	{
		$this->load->view('customerdash');
	}
	
	public function additem()
	{
		$this->load->view('additem');
	}

	public function updatecustomer()
	{
		$this->load->view('updatecustomer');
	}
}
