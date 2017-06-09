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
	}
}
?>

