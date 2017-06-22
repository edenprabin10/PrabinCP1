<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_Admin extends CI_Model {

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

	   public function selectCategory(){
            $query = $this->db->get('category');
             if($query->num_rows()>0){
             return $query-> result();  
        }
}
		


//adding item
public function addItem($itemname,$categoryID,$itemprice,$itemdescription){
								
		$array=array(
			
			"itemname"=>$itemname,
			"categoryID"=>$categoryID,
			"itemprice"=>$itemprice,
			"itemdescription"=>$itemdescription	
		);
		$this->db->insert("item",$array); //Active Records
		return "Data saved";
	}
public function finditem($id){
	$this->db->where('itemid',$id);
	$result=$this->db->get('item');
	return $result->result();
}
		
//item selectfuncing

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

//select customer list
		public function selectCustomer()
		{
	
	$query = $this->db->get('customer');
	return $query->result();
		}

//delete Customer
		public function removecustomer($customerid){
		$this->db->where("customerid",$customerid);
		$result=$this->db->delete("customer");
		return "data deleted";
	}

public function updateitem($itemid){
		$result=$this->db->select('*')
					->from('item')
					->join('category','category.categoryid=item.categoryID')
					->where('item.itemid',$itemid)
					->get();
		return $result->result();
	}
	

	public function editItem($itemID,$itemName,$itemPrice,$itemDescription){
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