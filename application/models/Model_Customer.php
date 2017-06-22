<?php

class Model_Customer extends CI_Model{
	public function Register($firstname,$lastname,$username,$password,$email,
							$address,$contactno){
								
		$array=array(
			"first_name"=>$firstname,
			"last_name"=>$lastname,
			"username"=>$username,
			"password"=>$password,
			"email"=>$email,
			"address"=>$address,
			"mobile_no"=>$contactno
		);
		$this->db->insert("customer",$array); //Active Records
		return "Data saved";
	}

	public function logincheck($username,$password){
		$query=$this->db->where(['username'=>$username,'password'=>$password])->get('customer');
		if($query->num_rows()>=1){
			return $query->row()->customerid;
			$this->session->set_customerdata($sess_array);
			echo"login";
		}else{
			echo "login failed";
		}
	}

public function addItem($itemname,$itemprice,$itemdescription,$categoryID){
								
		$array=array(
			"itemname"=>$itemname,			
			"itemprice"=>$itemprice,
			"itemdescription"=>$itemdescription,
			"categoryID"=>$categoryID			
		);
		$this->load->model('Model_Admin');
		$this->db->insert("item",$array); //Active Records
		return "Data saved";
	}
	
	public function addCategory($categoryname){
								
		$array=array(
			"categoryname"=>$categoryname			
		);
		$this->load->model('Model_Admin');
		$this->db->insert("category",$array); //Active Records
		return "Data saved";
	}


public function updateCustomerProfile($customerID,$first_name,$last_name,$username,$password,$email,
				$address,$mobile_no){
		$array=array(
			"first_name"=>$first_name,
			"last_name"=>$last_name,
			"username"=>$username,
			"password"=>$password,
			"email"=>$email,
			"address"=>$address,
			"mobile_no"=>$mobile_no
		);
		$this->db->where("customerid",$customerid);
		$this->db->update('customer',$array);
		return "data updated";
	}
	

public function selectcustomer(){
	
	$query = $this->db->get('customer');
	return $query->result();

}
public function deletecustomer($id){
			$this->db->where('customerid',$id);
			$this->db->delete('customer');
		}
	

public function selectitem(){
	
	$query = $this->db->get('item');
	return $query->result();

}

public function deleteitem($id){
			$this->db->where('itemid',$id);
			$this->db->delete('item');
		}
	


	
}
?>

