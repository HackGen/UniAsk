<?php

class Hello extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

	}

	public function index()
	{
		$data['string'] = "Hello World!";
		$this->load->view('Hello', $data);
	}



	
}
