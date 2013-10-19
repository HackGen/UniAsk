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
				echo "<img src=".$this->session->userdata('img')." height='35px' title=".$this->session->userdata('name')." />";
				echo $questions['date'];
				echo $questions['content'];			
			}
		}
		
		
	}
	
}

?>
