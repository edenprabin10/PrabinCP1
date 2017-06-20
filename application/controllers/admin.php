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



	/*public function addItem(){

		 //uploading image
		$config['upload_path']="assets/img/itemimage";
		$config['allowed_types']="jpg|gif|png";
		$config['max-width']="250";
		$config['max_height']="250";

		
		
		$this->load->library('upload',$config);
		$this->upload->do_upload('file');
		
		$data=array('upload_data'=>$this->upload->data());
		
		$itemname=$this->input->post('itemname');
		$itemprice=$this->input->post('itemprice');
		//$categoryid=$this->input->post('categoryid');
		$itemdescription=$this->input->post('itemdescription');
		$itemimage=$data['upload_data']['file'];
		echo $itemname;
		echo $itemprice;
		echo $itemdescription;
		echo $itemimage;

		$this->load->model('Model_Admin');
		$this->Model_Admin->additem($itemname,$itemprice,$itemdescription,$itemimage);
		
		$data['insertmsg']="data inserted successfully";
		$this->load->view('additem',$data);
		//redirect('Home/additem');

		echo "successfull";
		} */
		
		public function additem(){
		
			$itemname=$this->input->post('itemname');
			$itemprice=$this->input->post('itemprice');
			$itemdescription=$this->input->post('itemdescription');
			$this->load->model('Model_Admin');
			
			$data['message']=$this->Model_Admin->addItem
							($itemname,$itemprice,$itemdescription);
							
			 //$this->load->view('additem',$data);
			 redirect('home/additem'); 
			echo "successfull";
		} 
		

		public function updateitem(){
			$data = array(
               'itemname' => $title,
               'itemprice' => $name,
               'itemdescription' => $date
            );

$this->db->where('itemid', $id);
$this->db->update('item', $data);
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
	

		/*	public function deleteitem(){
			$id = $this->uri->segment(3);
			$this->load->model('Model_Admin');
			$data['message']=$this->Model_Admin->deleteitem($id);
			 $this->load->view('additem');
		}*/
		 
public function selectcustomer(){
			$this->load->model("Model_Admin");
			$data['message']=$this->Model_Admin->selectcustomer();
			$this->load->view('user',$data);// 
		}

		
		public function deletecustomer(){
			$id = $this->uri->segment(3);
			$this->load->model('Model_Admin');
			$data['message']=$this->Model_Admin->deletecustomer($id);
			 $this->load->view('admindash');
		}


			public function listofCategory(){
			$this->load->model("Model_Admin");
			$data['message']=$this->Model_Admin->listAofCategory();
			$this->load->view('selectcategory',$data);// 
		}

		
	public function updateCategory(){
	$itemID=$this->input->post('hiddenID');
			$itemName=$this->input->post('itemName');
			$itemPrice=$this->input->post('itemPrice');
			$itemDescription=$this->input->post('itemDescription');
				
			$this->load->model('ManagerModel');
			$check=$this->ManagerModel->updateItem($itemID,$itemName,
							$itemPrice,$itemDescription);
			if ($check){
			echo "Done";
			} else{
				echo "Not done";
			}
		}

	/*// Update Category	

	
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