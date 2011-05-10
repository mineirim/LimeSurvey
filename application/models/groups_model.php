<?php if ( ! defined('BASEPATH')) die('No direct script access allowed');

class Groups_model extends CI_Model {
	
	function getAllRecords()
	{
		$data = $this->db->get('groups');
		
		return $data;
	}

	function getSomeRecords($fields,$condition=FALSE)
	{
		foreach ($fields as $field)
		{
			$this->db->select($field);
		}
		if ($condition != FALSE)
		{
			$this->db->where($condition);	
		}
		
		$data = $this->db->get('groups');
		
		return $data;
	}

}