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
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username','username',
					'required|trim|min_length[3]|max_length[20]');
					
			$this->form_validation->set_rules('password','password',
					'required|trim|min_length[5]|max_length[15]');
		if ($this->form_validation->run()){
			$username=$this->input->post('username');
			$password=$this->input->post('password');
			
			$this->load->model('Model_Customer');
			$result=$this->Model_Customer->logincheck($username,$password);
			if ($result){
				if ($result==1){
					return redirect('Welcome/admindash');
				}else{
					$this->load->library('session');
					$this->session->set_userdata('customerid',$result);
					echo "customer login";
					
				}
			}else{
				echo ("password not match");
			}
			}
			else{
				$this->load->view('login');
			}
				
				
					//echo "customer login";
					//$data['msg']="successfull";
					//$this->load->view("message",$data);
				//echo "login bhayo";
			
	}
	}

?>

