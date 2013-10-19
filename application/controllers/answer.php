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
				echo $questions->user_id;
				echo $questions->date;
				echo $questions->content;
				$user_id = $questions->user_id;			
			}
		}
		$query = $this->db->query("SELECT * FROM `users` WHERE `user_id`='".$user_id."'");
		if($query->num_rows() > 0){
			foreach($query->result() as $user){
				echo $user->fb_id;
				echo $user->email;
				$fb_id = $user->fb_id;
			}
		}
		echo '<div class="view_pic"> <img src="https://graph.facebook.com/ '. $fb_id .'.picture?height=100&width=100" /></div>';
			
		
		
		
	}
	
}

?>
