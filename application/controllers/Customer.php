<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Customer extends CI_Controller {

		public function getRegister(){
		
			$firstname=$this->input->post('firstname');
			$lastname=$this->input->post('lastname');
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			$email=$this->input->post('email');
			$address=$this->input->post('address');
			$contactno=$this->input->post('contactno');

			$this->load->model('Model_Customer');
			
			$data['message']=$this->Model_Customer->Register
							($firstname,$lastname,$username,$password,$email,
							$address,$contactno);
							
			 $this->load->view('login');
			echo "successfull";
		} 
		
		
		public function login(){
			$username=$this->input->post('username');
			$password=$this->input->post('password');

			$this->load->model('Model_Customer');
			$result=$this->Model_Customer->logincheck($username,$password);
			if ($result){
				if ($result==1){
					return redirect('Home/admindash');
				}else{
					$this->load->library('session');
					$this->session->set_userdata('customerid',$result);
					return redirect('Home/customerdash');
					/*echo "customer login";*/
					
				}
			}else{
				echo ("password not match");
			}
				
				
			
			
	}


	public function additem(){
		
			$itemname=$this->input->post('itemname');
			$itemprice=$this->input->post('itemprice');
			$itemdescription=$this->input->post('itemdescription');
			$this->load->model('Model_Customer');
			
			$data['message']=$this->Model_Customer->addItem
							($itemname,$itemprice,$itemdescription);
							
			 //$this->load->view('login');
			echo "successfull";
		} 
		

		public function selectcustomer(){
			$this->load->model("Model_Customer");
			$data['message']=$this->Model_Customer->selectcustomer();
						 $this->load->view('user',$data);// 
							


		}

		public function deletecustomer(){
			$id = $this->uri->segment(3);
			$this->load->model('Model_Customer');
			$data['message']=$this->Model_Customer->deletecustomer($id);
			// $this->load->view('user');
			echo "deleted";		
		}
}	
?>

