<?php

class ModelAdmin extends CI_Model{
public function addItem($itemname,$itemprice,$itemdescription){
								
		$array=array(
			"itemname"=>$itemname,
			"itemprice"=>$itemprice,
			"itemdescription"=>$itemdescription			
		);
		$this->db->insert("item",$array); //Active Records
		return "Data saved";
	}
}
?>