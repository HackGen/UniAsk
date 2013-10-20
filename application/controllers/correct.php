<?php
class Correct extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');

	}
	public function updata ($ans_id)
	{
		$query = $this->db->query("UPDATA answer SET correct = 1 WHERE answer_id ='".$ans_id."'");
		echo "correct";
	}
}

?>
