<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_Admin extends CI_Model {


		public function selectlistcategory(){
	
	$query = $this->db->get('category');
	return $query->result();

											}

		public function deletecustomer(){
			$id = $this->uri->segment(3);
			$this->load->model('Model_Admin');
			$data['message']=$this->Model_Admin->deletecustomer($id);
			 $this->load->view('admindash');
										}




public function addItem($itemname,$itemprice,$itemdescription){
								
		$array=array(
			"itemname"=>$itemname,
			"itemprice"=>$itemprice,
			"itemdescription"=>$itemdescription			
		);
		$this->db->insert("item",$array); //Active Records
		return "Data saved";
	}

		public function addCategory($categoryname){						
		$array=array(
			"categoryname"=>$categoryname				
		);
		$this->db->insert("category",$array); //Active Records
		return "Data saved";
									}

	

//select all category
	public function listAofCategory(){
		$query=$this->db->get('category');
		return $query->result();
	}

public function selectitem()
		{
	
	$query = $this->db->get('item');
	return $query->result();
		}

		//deleting Item
	public function removeItem($itemid){
		$this->db->where("itemid",$itemid);
		$result=$this->db->delete("item");
		return "data deleted";
	}

	public function updateItem($itemID,$itemName,$itemPrice,$itemDescription){
	$arr=array("itemID"=>$itemID,
				"itemName"=>$itemName,
				"itemPrice"=>$itemPrice,
				"itemDescription"=>$itemDescription,
			);
		$this->db->where("itemID",$itemID);
		$this->db->update('item',$arr);
		return "data updated";
	}



/*public function deleteitem($itemid){
			$this->db->where('itemid',$id);
			$this->db->delete('item');
		}
*/
	}

	?>