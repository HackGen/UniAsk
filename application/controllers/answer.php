<?php
class Answer extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('date');

	}
	public function view($ques_id)
	{

		$this->load->helper('form');
		$this->load->library('form_validation');
		//echo $ques_id ;
		$query = $this->db->query("SELECT * FROM `questions` WHERE `question_id`='".$ques_id."'");
		if($query->num_rows() > 0){
			foreach($query->result() as $questions){
				$data['user_id'] = $questions->user_id."\n";
				$data['date'] = $questions->date."\n";
				$data['content'] = $questions->content."\n";
				$data['question_id'] = $ques_id;
				$user_id = $questions->user_id;			
			}
		}

				

		$query = $this->db->query("SELECT * FROM `users` WHERE `user_id`='".$user_id."'");
		if($query->num_rows() > 0){
			foreach($query->result() as $user){
				$data['fb_id'] = $user->fb_id."\n";
				$data['email'] = $user->email."\n";
				$fb_id = $user->fb_id;
			}
		}
		//echo '<div class="view_pic"> <img src="https://graph.facebook.com/'.$fb_id.'/picture?height=100&width=100" /></div>';
		
		$data['logged_in'] = $this->session->userdata('user_id');
        	$data['title'] = "發問";	
		$this->load->view('templates/header', $data);
		$this->load->view('answer/view',$data);
		
		$this->form_validation->set_rules('area', 'text', 'required');
		if ($this->form_validation->run() === TRUE)
		{	
			$data1 = array(
			'question_id' => $ques_id,
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
		$this->load->view('templates/footer');
	}
	
}

?>
