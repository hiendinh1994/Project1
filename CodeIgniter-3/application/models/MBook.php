<?php
class MBook extends CI_Model
{
	function all()
	{
		$data = $this->db->get('book');
		/*
		$this->db->select('*');
		$this->db->get('book');
		$this->db->result_array();

		 */
		return $data->result();
	}

	function row($book_id)
	{
		$this->db->select('*');
		$this->db->from('book');
		$this->db->where(array('book_id'=>$book_id));
		$data = $this->db->get();

		return $data->result();
	}
}