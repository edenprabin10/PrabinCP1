	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Cart extends CI_Controller {
		
//item list gareko
		public function selectitemcart(){
			$this->load->model("Model_Cart");
			$data['message']=$this->Model_Cart->selectitemcart();
			$this->load->view('itemcart',$data);// 
		}
	
	//Add Item TO Cart

	public function addtocart($itemid){
		$sessionData=$this->session->userdata('customerid');

		if($sessionData!=''){
			$this->load->model('Model_Cart');
			
			$data['message']=$this->Model_Cart->additemtocart
							($sessionData,$itemid);
			$this->Model_Cart->getnameprice($itemid);
			//redirect(site_url('Cart/selectitemtocart'));
			echo "Added To Cart";	
			//redirect(site_url('Cart/selectitemtocart'));				
		} else{
			$this->load->view('home/customerdash');
		}
	}
}
	


	
?>