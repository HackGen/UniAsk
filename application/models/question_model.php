<?php
class Question_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_question($question_id = FALSE)
	{
		if ($question_id === FALSE)
		{
			$this->db->order_by("date", "desc");
			$query = $this->db->get('questions');
			return $query->result_array();
		}

		$query = $this->db->get_where('questions', array('question_id' => $question_id));
		return $query->row_array();
	}
	
	
	public function get_user($user_id = FALSE)
	{
		if ($user_id === FALSE)
		{
			$query = $this->db->get('users');
			return $query->result_array();
		}

		$query = $this->db->get_where('users', array('user_id' => $user_id));
		return $query->row_array();
	}
	
	public function set_question()
	{
		$this->load->library('session');
		$this->load->helper('date');
		//$this->load->helper('url');

		//$question_id = url_title($this->input->post('title'), 'dash', TRUE);

		$data = array(
			'content' => $this->input->post('text'),
			'user_id' => $this->session->userdata('user_id'),
			'user_fb_id' => $this->session->userdata('fb_id'),
			'catalog_school' => $this->input->post('catalog_school'),
			'catalog_detail' => $this->input->post('catalog_detail'),
			'date' => now(),
			
		);

		return $this->db->insert('questions', $data);
	}
}
