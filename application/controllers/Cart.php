	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Cart extends CI_Controller {

		public function selectitemcart(){
			$this->load->model("Model_Cart");
			$data['message']=$this->Model_Cart->selectitemcart();
			$this->load->view('itemcart',$data);// 
		}
	}

	
?>