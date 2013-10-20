<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Question extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('question_model');
		$this->load->model('search_model');	
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('date');
		$this->load->helper('form');
		$this->load->library('form_validation');
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
		$this->load->view('answer/correct_ajax');
		$this->get_answer($question_id);
		if($this->session->userdata('name')!=NULL){
			$this->load->view('answer/view_text',$data);
		}
		
		//$this->load->view('answer/view',$data);
		$this->load->view('templates/footer');
	}


	public function insert($question_id)
	{

		$this->form_validation->set_rules('area', 'text', 'required');
		if ($this->form_validation->run() === TRUE)
		{	
			$query = "UPDATE questions SET rating=rating+1 WHERE question_id=".$question_id;
			$this->db->query($query);
			$data1 = array(
			'question_id' => $question_id,
			'user_id' => $this->session->userdata('user_id'),
			'name' => $this->session->userdata('name'),
			'type' => 1,
			'content' => $this->input->post('area'),
			'rating_plus' => 0,
			'rating_minus' => 0,
			'correct' => 0,
			'date' => now(),
			);
			$this->db->insert('answer',$data1);
			//$this->load->view('answer/finish',$data1);
			//echo $this->input->post('area');
			
		}
		redirect('question/view/'.$question_id);
	}
	public function get_answer($question_id){
		$query = $this->db->query("SELECT * FROM `answer` WHERE `question_id`='".$question_id."'");
		foreach($query->result() as $ans){
			$ans_data['answer_id'] = $ans->answer_id;
			$ans_data['question_id'] = $ans->question_id;
			$ans_data['user_id'] = $ans->user_id;
			$ans_data['name'] = $ans->name;
			$ans_data['type'] = $ans->type;
			$ans_data['content'] = $ans->content;
			$ans_data['rating_plus'] = $ans->rating_plus;
			$ans_data['rating_minus'] = $ans->rating_minus;
			$ans_data['correct'] = $ans->correct;	
			$ans_data['date'] = $ans->date;
			$ans_data['user'] = $this->question_model->get_user($ans_data['user_id']);
			$this->load->view('answer/view',$ans_data);		
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
