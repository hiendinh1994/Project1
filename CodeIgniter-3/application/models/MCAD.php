<?php
/**
 * 
 */
class MCAD extends CI_Model
{

	function all(){
		$data = $this->db->get('monmoi');
		return $data -> result();
	}
	
	function ten()
	{
		
	}
}
 ?>