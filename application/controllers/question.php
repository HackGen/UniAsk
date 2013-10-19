<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Question extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('question_model');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('date');
		
	}
	
	public function index()
	{
	}
	
	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		echo "a0";
		
		if($this->session->userdata('user_id')==FALSE) {
        	redirect(base_url());
        }
        
        $data['logged_in'] = $this->session->userdata('user_id');
        $data['title'] = "發問";

		$this->form_validation->set_rules('text', 'text', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			//$this->load->view('templates/header', $data);
			$this->load->view('question/create');
			//$this->load->view('templates/footer');

		}
		else
		{
			$this->question_model->set_question();
			$query = $this->db->query("SELECT * FROM `questions` WHERE `content` = '".$this->input->post('text')."' AND `user_id` = '".$this->session->userdata('user_id')."' ");
			$row = $query->row();
			redirect('question/view/'.$row->question_id);
		}
	}
	
	public function view($question_id)
	{
		
		$data['logged_in'] = $this->session->userdata('user_id');
		$data['question'] = $this->question_model->get_question($question_id);
		$data['title'] = $data['question']['content'];
		$data['ques_id'] = $question_id ;
		$data['user'] = $this->question_model->get_user($data['question']['user_id']);
		
		
		if (empty($data['question']))
		{
			show_404();
		}
		
		$this->load->view('templates/header', $data);
		$this->load->view('question/view', $data);
		
		$this->load->view('answer/view',$data);
		
		//$this->load->view('answer/view',$data);
		$this->load->view('templates/footer');
	}


	public function insert()
	{

		$this->form_validation->set_rules('area', 'text', 'required');
		if ($this->form_validation->run() === TRUE)
		{	
			$data1 = array(
			'question_id' => $question_id,
			'user_id' => $this->session->userdata('user_id'),
			'type' => 1,
			'content' => $this->input->post('area'),
			'rating_plus' => 0,
			'rating_minus' => 0,
			'correct' => 0,
			'date' => now(),
			);
			$this->db->insert('answer',$data1);
			echo $this->input->post('area');
		}
	}

	public function all()
	{
		
		$data['question'] = $this->question_model->get_question();
		
		if (empty($data['question']))
		{
			show_404();
		}
		
		//$this->load->view('templates/header', $data);
		$this->load->view('question/all', $data);
		//$this->load->view('templates/footer');
	}
}
