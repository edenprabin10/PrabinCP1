<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_Cart extends CI_Model {
public function selectitemcart()
		{
	
	$query = $this->db->get('item');
	return $query->result();
		}
	

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


}

	?>












