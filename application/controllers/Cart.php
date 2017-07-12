	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Cart extends CI_Controller {
		
//item list gareko
		public function selectitemcart(){
		$sessionData=$this->session->userdata('customerid');			
			$this->load->model("Model_Cart");
			$data['message']=$this->Model_Cart->getCartProduct($sessionData);
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

public function viewCartDetails(){

		$sessionData=$this->session->userdata('customerid');
		if($sessionData!=''){
			$this->load->model('Model_Cart');
			
			$cartItem['message']=$this->Model_Cart->viewCartDetails($sessionData);
			//redirect(site_url('Customer/viewcartitem'));	
			$this->load->view('viewcartitem',$cartItem);
			//$this->load->view('selectcart');

		} else{
			redirect('customerdash');
		}
	}


	// Delete Items From Cart
	     public function deletecartitem($cartid){
		$this->load->model('Model_Cart');
		$check=$this->Model_Cart->removecartitem($cartid);
		if ($check){
			echo "Done";
		} else{
			echo "Not done";
		}
	}


	public function updateitemcart(){

			
			$cartid=$this->input->post('cartid');
			//$qty=$this->input->post('qty');
			$quantity=$this->input->post('quantity');


			$this->load->model('Model_Cart');
			
			$data['message']=$this->Model_Cart->updateitemcart
							($cartid,$quantity);

						redirect('cart/viewCartDetails');

	} 

//cart id lai select gareko cart menu item lai update garna
		public function updates($cartid){

			$data=array(
					'cartid'=>$cartid
				);
			$this->load->view('updatecartitemform',$data);							
		}
}
	


	
?>