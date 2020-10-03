<?php 

	class index extends CI_controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
		}
		public function index(){
			$this->load->view('index');
		}
		
	}



 ?>