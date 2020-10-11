<?php   

	class news extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('admin'))
				redirect('admin');
		}
		function index()
		{
			$this->load->model('news_model');
			$arr['news']= $this->news_model->getall();

			//passing the array to the view
			$this->load->view('admin/news',$arr);
		}
	}


?>