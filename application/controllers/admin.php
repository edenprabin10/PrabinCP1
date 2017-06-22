	<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller {

		public function addcategory(){
		
			$categoryname=$this->input->post('categoryname');
			$this->load->model('Model_Admin');
			
			$data['message']=$this->Model_Admin->addcategory
							($categoryname);
							
			 $this->load->view('addcategory',$data);
			 //return redirect('home/admindash');
			
		}



			
		public function additem(){
			
			$itemname=$this->input->post('itemname');
			$categoryID=$this->input->post('categoryID');
			$itemprice=$this->input->post('itemprice');
			$itemdescription=$this->input->post('itemdescription');
			$this->load->model('Model_Admin');
			
			$data['message']=$this->Model_Admin->addItem(
							$itemname,$categoryID,$itemprice,$itemdescription);
							
			 //$this->load->view('additem',$data);
			 redirect('home/additem'); 
			echo "successfull";
		} 
		


		public function selectitem(){
			$this->load->model("Model_Admin");
			$data['message']=$this->Model_Admin->selectitem();
			$this->load->view('item',$data);// 
		}


			
				public function deleteitem($itemid){
		$this->load->model('Model_Admin');
		$check=$this->Model_Admin->removeItem($itemid);
		if ($check){
			echo "Done";
		} else{
			echo "Not done";
		}
	}


	

				public function updateitem($itemid){
		$this->load->model('Model_Admin');
		$check['message']=$this->Model_Admin->updateitem($itemid);
		$this->load->view('edititem',$check);
	}
	
	public function finditem($id){


        $this->load->model('Model_Admin');
        $data['message']=$this->Model_Admin->finditem($id);
        $data['messages']=$this->Model_Admin->selectcategory();
        $this->load->view('edititem',$data);
       
    }


	
		 
		 //select Customer
public function selectcustomer(){
			$this->load->model("Model_Admin");
			$data['message']=$this->Model_Admin->selectCustomer();
			$this->load->view('user',$data);// 
		}

//delete customer
		public function deletecustomer($customerid){
		$this->load->model('Model_Admin');
		$check=$this->Model_Admin->removecustomer($customerid);
		if ($check){
			echo "Done";
		} else{
			echo "Not done";
		}
	}
		
		

		//list of category
			public function listofCategory(){
			$this->load->model("Model_Admin");
			$data['message']=$this->Model_Admin->listAofCategory();
			$this->load->view('selectcategory',$data);// 
		}


 public function selectCategory(){

   
        $this->load->model('Model_Admin');
        $selectCategory=$this->Model_Admin->selectCategory();
        /* printing to see wether value is passed in array or not print_r($getCategory);*/
        $this->load->view('additem',['getCategory'=>$selectCategory]);
       
    }
		/*	public function listCategoryUpdate() {
		$this->load->model('Model_Admin');
		$data['records']=$this->Model_Admin->listAllCategory();
		$this->load->view('UpdateCategoryList',$data);
	}*/

/*public function listCategoryUpdate() {
		$this->load->model('Model_Admin');
		$data['records']=$this->Model_Admin->listCategoryUpdate();
		$this->load->view('updatecategory',$data);
	}
	
	public function editcategory($categoryid){
		$this->load->model('Model_Admin');
		$category=$this->Model_Admin->findCategory($categoryID);
		$this->load->view('updatecategory',['category'=>$categoryname]);
	}
	
	public function updatecategory(){
		$categoryid=$this->input->post('hiddenID');
		$categoryname=$this->input->post('categoryname');
		$this->load->model('Model_Admin');
		$data['records']=$this->Model_Admin->updatecategory();
		$check=$this->Model_Admin->updatecategory($categoryid,$categoryname);
		if ($check){
			echo "Done";
		} else{
			echo "Not done";
		}
	}
*/
	/*

	
	public function updateCategory($categoryID, $categoryName){
	$arr=array("categoryID"=>$categoryID,
		"categoryName"=>$categoryName);
		$this->db->where("categoryID",$categoryID);
		$this->db->update('category',$arr);
		return "data updated";
	}
	
	// Delete Category
	public function removeCategory($categoryID){
		$this->db->where("categoryID",$categoryID);
		$result=$this->db->delete("category");
		return "data deleted";
	}*/
	

	}	

		?>