<?php   

	class sport_news extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('admin'))
				redirect('admin');
		}
		function index()
		{
			$this->load->model('sport_news_model');
			$data['sport_news']= $this->sport_news_model->getall();

			//passing the array to the view
			
			$this->load->view('admin/sport_news',$data);
		}
	}


?>