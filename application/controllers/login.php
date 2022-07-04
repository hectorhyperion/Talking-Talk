<?php 

	class login extends CI_controller
	{
		
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index(){
			$this->load->view('login');
		}
		public function login()
		{
			$this->load->view('login');
		}
	}



 ?>