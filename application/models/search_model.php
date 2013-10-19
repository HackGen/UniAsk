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
			$this->db->or_like("catalog_school", $search_keyword);
			$this->db->or_like("catalog_detail", $search_keyword);
			$this->db->or_like("content", $search_keyword);
		}
		
		$query = $this->db->get("questions");
		return $query->result_array();
	}
	 
	public function get_count_answer($question_id = FALSE) 
	{
		$this->db->where('question_id', $question_id);
		$this->db->from('answer');
		
		if($this->db->count_all_results())
			return $this->db->count_all_results();
		else
			return "0";
	}
	/*
	public function get_search($search_keyword = FALSE)
	{
		//$search_keywords = explode(' ', trim($search_keyword));
		
		$parts = substr_count(trim($search_keyword), ' ');

		switch($parts){
			case 0:
				$this->db->or_like('catalog_school', $search_keyword);
				$this->db->or_like('catalog_school', $search_keyword);
				$this->db->or_like('content', $search_keyword);
				break;
			case 1;
				$this->db->or_like('CONCAT(catalog_school, " ", content)', $search_keyword);
				$this->db->or_like('CONCAT(catalog_detail, " ", content)', $search_keyword);
				$this->db->or_like('CONCAT(catalog_school, " ", catalog_detail)', $search_keyword);
				break;
			case 2:
			default:
				$this->db->or_like('CONCAT(catalog_school, " ", catalog_detail, " ", content)', $search_keyword);
				break;

		}	

		$query = $this->db->get('questions');
		return $query->result_array();
		
	}
	*/
	
	
	

}
