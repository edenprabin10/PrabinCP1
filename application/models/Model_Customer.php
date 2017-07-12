<?php

class Model_Customer extends CI_Model{
	public function Register($firstname,$lastname,$username,$password,$email,$address,$contactno){
								
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


public function editcustomer($firstname,$lastname,$username,$password,$email,$address,$contactno,$customerid){
		$array=array(
		
			"first_name"=>$firstname,
			"last_name"=>$lastname,
			"username"=>$username,
			"password"=>$password,
			"email"=>$email,
			"address"=>$address,
			"mobile_no"=>$contactno
		);
		$this->db->where("customerid",$customerid);
		$this->db->update('customer',$array);
		return "data updated";
	}
	



//customer select garxha

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
	

public function selectcustomerbyid($sessionData){

	$this->db->where("customerid",$sessionData);
	$results=$this->db->get('customer');
	return $results->result();
}


public function booking($firstname,$lastname,$phone,$bookingdate,
							$bookingtime){
		$sessionData=$this->session->userdata('customerid');		
		    $array=array(

			"firstname"=>$firstname,
			"lastname"=>$lastname,			
			"phone"=>$phone,
			"bookingdate"=>$bookingdate,
			"bookingtime"=>$bookingtime,
			"customerid"=>$sessionData
		);
		$this->db->insert("booking",$array); //Active Records
		return "Data saved";
	}
	
	public function selectbooking()
		{
	
	$query = $this->db->get('booking');
	return $query->result();
		}



		public function billcustomer($sessionData){


		//$this->db->select('*','sum(order.itemprice)');
		$this->db->from('order');
		//$this->db->join('user','user.user_id=order.cart_session','inner');
		$this->db->join('customer','customer.customerid=order.customerid','inner');
		$this->db->where('customer.customerid',$sessionData);
		$res=$this->db->get();	
	
		return $res->result_array();
	}

	

}
?>

