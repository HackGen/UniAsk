<?php

class Receive_rating extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();	
		$this->load->library('session');
	}

	public function plus($ans_id){
		$query = $this->db->query("SELECT * FROM `answer` WHERE answer_id='".$ans_id."'");
		if($query->num_rows()>0){
			foreach($query->result() as $plus){
				$rating_plus = $plus->rating_plus;
				//print_r($plus);
			}
	
			$rating_plus = $rating_plus+1;
			echo $rating_plus;
			$data = array('rating_plus' =>  $rating_plus);
			$where = "answer_id =".$ans_id;
			$str = $this->db->update('answer',$data,$where);
			}
	}
	public function minus($ans_id){
		$query = "UPDATE answer SET rating_minus=rating_minus+1 WHERE answer_id=".$ans_id;
			$this->db->query($query);
		$query = $this->db->query("SELECT * FROM `answer` WHERE answer_id='".$ans_id."'");
		if($query->num_rows()>0){
			foreach($query->result() as $minus){
				$rating_minus = $minus->rating_minus;
				//print_r($plus);
			}
			echo $rating_minus;
		}
	}



}
