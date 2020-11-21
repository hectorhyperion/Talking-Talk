<?php 

		class comment extends CI_Controller
		{
			public function __construct(){
				parent:: __construct();

				$this->load->helper('form');
				$this->load->model('news_model');
				$this->load->model('comment_model');
			}

			 
			 function create($id)
	 	  {
	 	  	$news_id= $this->input->post('news_id');
	  	//get news by id
	  		$arr['news'] = $this->news_model->getbyid($id);
	  		//send comment entries to db 
	  		$this->comment_model->save($news_id);
		 
			redirect('index/detail/'.$id);
	}

		}





 ?>