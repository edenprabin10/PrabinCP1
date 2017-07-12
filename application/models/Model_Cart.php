<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_Cart extends CI_Model {
		//Item Haru Select Garya
public function selectitemcart()
		{
	
	$query = $this->db->get('item');
	return $query->result();
		}
	
	// Adding Item To Cart

	public function additemtocart($sessionData,$itemid){

		
		$array=array(
			"cartsession"=>$sessionData,
			"itemid"=>$itemid,
			"quantity"=>1
			//"item_name"=>$item_name
		);
		 $this->db->set('date', 'NOW()', FALSE);
		$this->db->insert("cart",$array); //Active Records
		return "Data saved";
	}

//name and price na aako le yesto garya
public function getnameprice($itemid){
		
		$this->db->where("itemid", $itemid);
			$result=$this->db->get("item");
			$row=$result->result_array();
			$itemprice= ($row[0]['itemprice']);
						$itemname= ($row[0]['itemname']);
			
			$array=array(
			"itemid"=>$itemid,
			"itemprice"=>$itemprice,
			"itemname"=>$itemname);
		$this->db->where("itemid",$itemid);
		$this->db->update('cart',$array);
	}


public function viewCartDetails($sessionData){
		$this->db->where("cartsession",$sessionData);
		//$this->db->order_by("date");
		$result=$this->db->get("cart");
		return $result->result();
	}

	public function removecartitem($cartid){
		$this->db->where("cartid",$cartid);
		$result=$this->db->delete("cart");
		return "data deleted";
	}


public function updateitemcart($cartid,$quantity){

		$array=array(
			"cartid"=>$cartid,
			"quantity"=> $quantity
			
		);
		 $this->db->where('cartid',$cartid);
		$this->db->update("cart",$array); //Active Records
		return "Data saved";
	}

	public function getCartProduct($sessionData){
	
		$query = $this->db->select('*')
						->from('item')
						->join('category','item.categoryid=category.categoryid')
						->get();
        return $query->result();
	}



}



	?>












