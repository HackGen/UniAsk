<?php
class Search_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_search($search_keyword = FALSE)
	{
		$search_keywords = explode(' ', trim($search_keyword));
		
		foreach($search_keywords as $search_keyword) {
			$this->db->or_like("content", $search_keyword);
		}
		$query = $this->db->get("questions");
		return $query->result_array();
	}
	
	
	

}