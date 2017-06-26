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
			"itemid"=>$itemid
			//"item_name"=>$item_name
		);
		 $this->db->set('date', 'NOW()', FALSE);
		$this->db->insert("cart",$array); //Active Records
		return "Data saved";
	}

//name and price na aako le yesto garya
public function getnameprice($itemid){
		echo $itemid;
		$this->db->where("itemid", $itemid);
			$result=$this->db->get("item");
			$row=$result->result_array();
			$itemprice= ($row[0]['itemprice']);
						$itemname= ($row[0]['itemname']);
			echo $itemprice;
			$array=array(
			"itemid"=>$itemid,
			"itemprice"=>$itemprice,
			"itemname"=>$itemname);
		$this->db->where("itemid",$itemid);
		$this->db->update('cart',$array);
	}
}


	?>












