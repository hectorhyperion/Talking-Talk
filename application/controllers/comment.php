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
			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('email', 'Email', 'required');
			$this->form_validation->set_rules('body', 'Body', 'required');

			if($this->form_validation->run() === FALSE){
				redirect('index/detail/'.$id);
			}
			else{
					  	$news_id= $this->input->post('news_id');
	  	//get news by id
	 	  	
	  		$arr['news'] = $this->news_model->getbyid($id);
	  		//send comment entries to db 
	  		$this->comment_model->save($news_id);
			}

	 
		 
		
	}
	/*
	function delete($id)
	{
		
		$data['comments']= $this->comment_model->getbyid();
		  //delete comment entries from db 
		  $this->comment_model->delete($id);
		 redirect('index/detail/'.$id);
	}
*/
		}





 ?>
