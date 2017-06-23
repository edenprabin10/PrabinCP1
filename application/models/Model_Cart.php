<?php
defined('BASEPATH') OR exit('No direct script access allowed');

	class Model_Cart extends CI_Model {
public function selectitemcart()
		{
	
	$query = $this->db->get('item');
	return $query->result();
		}
	}

	?>












