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
		$this->load->helper('form');
	}
	public function view($ques_id)
	{

		
		//echo $ques_id ;
		$query = $this->db->query("SELECT * FROM `questions` WHERE `question_id`='".$ques_id."'");
		if($query->num_rows() > 0){
			foreach($query->result() as $questions){
				$data['user_id'] = $questions->user_id."\n";
				$data['date'] = $questions->date."\n";
				$data['content'] = $questions->content."\n";
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
		$this->load->view('templates/footer');
		
		echo $this->input->post('area');
		
		
	}
	
}

?>
