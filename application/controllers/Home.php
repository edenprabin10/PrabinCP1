<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('dashboard1');
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

	public function deletecustomer(){
		//$this->load->view('user');
		echo "DEleted";
	}
	
	public function addcategory(){
		$this->load->view('addcategory');
	}

	public function selectcategory(){
		$this->load->view('selectcategory');
	}

	public function selectCustomer(){
		$this->load->view('user');
	}

	public function updatecategory(){
		$this->load->view('updatecategorylist');
	}

	public function updatecustomerprofile(){
		$this->load->view('editcustomer');
	}

	public function booking(){
		$this->load->view('booking');
	}
	public function cart(){
		$this->load->view("cart");
	}
}