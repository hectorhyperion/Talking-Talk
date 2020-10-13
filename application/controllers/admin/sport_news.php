<?php   

	class sport_news extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			if(!$this->session->userdata('admin'))
				redirect('admin');
			$this->load->model('sport_news_model');
		}
		function index()
		{
			
			$data['sport_news']= $this->sport_news_model->getall();

			//passing the array to the view
			
			$this->load->view('admin/news/sport_news',$data);
		}
		function sport_add()
		{
			$this->load->view('admin/news/sport_add');
		}
		function save()
		{
			//load form data from function model
			$this->sport_news_model->save();
			//set flashdata
			$this->session->set_flashdata('success','News saved sucessfully');
			redirect('admin/sport_news');

		}
		function edit($id)
		{
			//use the id to get the entry from the database
			$arr['sport_news'] = $this->sport_news_model->getbyid($id);
			$this->load->view('admin/news/sport_edit',$arr);
		}
		function update($id)
		{
			// load form data from  function model 
			$this->sport_news_model->update($id);
			//set flash data 
			$this->session->set_flashdata('success','News updated sucessfully');
			redirect('admin/sport_news');
	}
	function delete($id)
		{
			$this->sport_news_model->delete($id);
			$this->session->set_flashdata('success','News Deleted sucessfully');
			redirect('admin/sport_news');
		}
}

?>