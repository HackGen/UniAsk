<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->model('question_model');
	}
	
	public function index()
	{
		$data['title'] = "UniAsk :: 由你問大學";
		$data['logged_in'] = $this->session->userdata('user_id');
		$data['question'] = $this->question_model->get_question();
		$this->load->view('welcome_message', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
