<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('search_model');
		$this->load->model('question_model');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('date');
	}
	
	public function get($search_keyword)
	{
		if(isset($search_keyword)) {
			$search_keyword = urldecode($search_keyword);
			$data['logged_in'] = $this->session->userdata('user_id');
			$data['question'] = $this->search_model->get_search($search_keyword);

			if (empty($data['question']))
			{
				show_404();
			} else {
				$data['title'] = $search_keyword);
				//$data['user'] = $this->question_model->get_user($data['question']['user_id']);
			
				$this->load->view('templates/header', $data);
				$this->load->view('question/all', $data);
				$this->load->view('templates/footer');
			}
		}
	}	
	
	public function index()
	{
		$data['logged_in'] = $this->session->userdata('user_id');
		$data['title'] = "Seach ";
		$this->load->view('templates/header', $data);
		$this->load->view('search/index');
		$this->load->view('templates/footer');
	}
	

	
}
