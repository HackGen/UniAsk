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
		echo $ques_id ;
	}
	
}

?>