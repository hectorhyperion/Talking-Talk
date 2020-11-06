<?php 

	class index extends CI_controller
	{
		
		public function __construct()
		{
			parent::__construct();
			//$this->load->helper('url');
			$this->load->model('news_model');
			$this->load->model('comment_model');
		}
		  function index($offset=0)
		  {
		  	$this->load->library('pagination');
			//	url redirect admin folder,news controller,news view
			$config['base_url']= site_url('index/index');

				// count the total number of news from the database
		    $config['total_rows'] = $this->news_model->countall();

		    //total number of entries to show per page
		    $config['per_page'] = 5 ;
		    //pagination to fix search control
		    $config['reuse_query_string'] = TRUE;

		  	$arr['news'] = $this->news_model->getall($config['per_page'],$offset);
		  	//initialize pagination config
		  	$this->pagination->initialize($config);

			$this->load->view('index',$arr);
		}
		function save($id)
		{
			$this->comment_model->save();
			$arr['news'] = $this->news_model->getbyid($id);
			 redirect('index/detail/',$arr);
			// redirect('feeds');
		}
		 
		function about()
		{
			$this->load->view('about');
		}
		function detail($id)
		{
			//getting new from db
			$arr['news'] = $this->news_model->getbyid($id);
			$this->load->view('article',$arr);

		}
		
	}



 ?>