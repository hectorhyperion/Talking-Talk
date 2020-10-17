<?php   

	class news extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('admin'))
				redirect('admin');
				$this->load->model('news_model');

		}
		function index($offset=0)
		{
			//load pagination library
			$this->load->library('pagination');
			//	url redirct admin folder,news controller,news view
			$config['base_url']= site_url('admin/news/index');

				// count the total number of news from the database
		    $config['total_rows'] = $this->news_model->countall();

		    //total number of entries to show per page
		    $config['per_page'] = 3 ;
		    //pagination to fix search control
		    $config['reuse_query_string'] = TRUE;

		    // initia+lize pagination library
		    $this->pagination->initialize($config);

		    //collect all entries from database
			$arr['news']= $this->news_model->getall($config['per_page'],$offset);

			//passing the array to the view
			$this->load->view('admin/news/news',$arr);
		}
		function add()
		{
			// load function in add view
			$this->load->view('admin/news/add');
		}
		function save()
		{
			// load form data from  function model 
			$this->news_model->save();
			//set flash data 
			$this->session->set_flashdata('success','News saved sucessfully');
			redirect('admin/news');
		}
		function edit($id)
		{
			//use the id to get the entry from the database
			$arr['news'] = $this->news_model->getbyid($id);
			// load function in add view

			$this->load->view('admin/news/edit',$arr);
		}
		function update($id)
		{
			// load form data from  function model 
			$this->news_model->update($id);
			//set flash data 
			$this->session->set_flashdata('success','News updated sucessfully');
			redirect('admin/news');
		}
		function delete($id)
		{
			$this->news_model->delete($id);
			$this->session->set_flashdata('success','News Deleted sucessfully');
			redirect('admin/news');
		}
	}


?>