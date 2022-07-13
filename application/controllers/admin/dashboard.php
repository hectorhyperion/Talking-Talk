<?php 

	class dashboard extends CI_controller 
	{
		function __construct()
		{
			parent::__construct();
				$this->load->helper('form');
				$this->load->library('Form_validation');
				$this->load->model('admin');
			$this->load->model('news_model');
			if(!$this->session->userdata('admin'))
				redirect('admin');
			
		}
		function index($offset=0)
		{
			$this->load->view('asset/header1'); 
		 
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
		 // $this->pagination->initialize($config);

			$this->load->view('admin/dashboard', $arr);
			$this->load->view('asset/footer1');
		}
		/*
		private function logged_in()
    {
        if( ! $this->session->userdata('validate')){
            redirect('admin/login');
        }
    }

 	public function change_password()
		{
			$data['title'] = 'Change Your Password';
			$this->form_validation->set_rules('oldpass', 'Password', 'callback_password_check');
			$this->form_validation->set_rules('newpass', 'New password', 'required|min_length[6] |max_length[20]');
			$this->form_validation->set_rules('new_password2', 'Confirm New password', 'required|matches[newpass]');
			 
			 
			 
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('asset/header1'); 
	  		 
			  $this->load->view('admin/change_password',$data);
			  $this->load->view('asset/footer1');
		   }
		   else{
			$id = $this->session->userdata('id');
			$newpass= $this->input->post('newpass');					
			$this->admin->update_password($id, array('password'=> md5($newpass)));
			redirect('admin/login');
						
	   }
		}
		public function password_check($oldpass)
		{

			$id = $this->session->userdata('id');
			$user = $this->admin->get_user($id);
			
			if($user->password !== md5($oldpass)) {
				$this->form_validatiion->set_message('password_check', 'The {field} does not match');
				return false;
			}
			else{
				return true;
			}
		}

		*/
		function logout()
		{
			$this->session->sess_destroy();
			redirect('admin');
		}
		
	}

 ?>
