<?php
 
class M_product extends CI_Model{

		function get_product(){
		 $result = $this->db->get('product');
		 return $result;
		 }
}