<?php

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('session');
		$this->load->helper('url');
	}

	public function index()
	{
		if($this->session->userdata('user_id')==TRUE) {
        	redirect(base_url());
        }
        else {
			$this->fb_login();
		}
		
		//$this->load->view('templates/header');
		//$this->load->view('login/index');
		//$this->load->view('templates/footer');
	}

	private function fb_login()
	{
		$this->load->file('./application/models/facebook/facebook.php', true);
		define('YOUR_APP_ID', '208385919331302');
		define('YOUR_APP_SECRET', '3eee06d7ff72f6356ed629d69efc17c5');

		$facebook = new Facebook(array(
		 'appId' => YOUR_APP_ID,
		 'secret' => YOUR_APP_SECRET,
		 'cookie' => true
		));

		$uid = $facebook->getUser();

		if($uid) {
			try {
				$user = $facebook->api('/me');
			} catch (Exception $e){ }
			
			if(!empty($user)){
				//SQL query
				$query = $this->db->query("SELECT * FROM `users` WHERE `fb_id` = '".$user['id']."' ");
				
				// If not, create new!
				if ($query->num_rows() == 0) {
					$user_data = array(
		               'name' => $user['name'],
		               'email' => $user['email'],
		               'fb_id' => $user['id']
		            );
		            $this->db->insert('users', $user_data); 
				}
				
				// Set SESSION
				$row = $query->row();
				$session_data = array(
                   'user_id'  => $row->user_id,
                   'name'     => $row->name,
                   'email' => $row->email,
                   'fb_id'=> $row->fb_id,
                   'img' => "https://graph.facebook.com/".$row->fb_id."/picture?height=100&width=100"
               	);
				$this->session->set_userdata($session_data);		
				
				// Redirect homepage
				redirect(base_url());
			} 
		} else {
			$login_url = $facebook->getLoginUrl(array('scope'=>'email'));
			redirect($login_url);
		}
	}

	
}
