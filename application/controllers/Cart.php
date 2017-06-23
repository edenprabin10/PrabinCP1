	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Cart extends CI_Controller {
		

		public function selectitemcart(){
			$this->load->model("Model_Cart");
			$data['message']=s$this->Model_Cart->selectitemcart();
			$this->load->view('itemcart',$data);// 
		}
	

	public function addtocart($itemid){
		$sessionData=$this->session->userdata('customerid');

		if($sessionData!=''){
			$this->load->model('Model_Cart');
			
			$data['message']=$this->Model_Cart->additemtocart
							($sessionData,$itemid);
			//redirect(site_url('Cart/selectitemtocart'));
			echo "Added To Cart";					
		} else{
			$this->load->view('home/customerdash');
		}
	}
}
	
?>