<?php 

	class feeds extends CI_controller
	{
		
		public function __construct()
		{
			parent::__construct();
			 
		  	$this->load->model('news_model');
		}
		  function index($offset=0)
		  {
		  	$this->load->library('pagination');
			//	url redirct admin folder,news controller,news view
			$config['base_url']= site_url('feeds/index');

				// count the total number of news from the database
		    $config['total_rows'] = $this->news_model->countall();

		    //total number of entries to show per page
		    $config['per_page'] = 5 ;
		    //pagination to fix search control
		    $config['reuse_query_string'] = TRUE;

		  	$arr['news'] = $this->news_model->getall($config['per_page'],$offset);
		  	//initialize pagination config
		  	$this->pagination->initialize($config);

			$this->load->view('feeds',$arr);
		}
		function about()
		{
			$this->load->view('about');
		}
		function detail($id)
		{
			$arr['news'] = $this->news_model->getbyid($id);
			$this->load->view('article',$arr);

		}

		
		
	}



 ?>
