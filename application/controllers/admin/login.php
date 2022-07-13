 <?php 

 	class login extends CI_Controller
 	{
 		function __construct()
 		{
 			parent::__construct();
 			if($this->session->userdata('admin'))
 			redirect('admin/dashboard');
			//$this->load->library('form_validation');
 		}
		
 		 
		 public function verify()
		 {
			 //login
		   $this->load->model('admin');
			 //checking validation rules
		   $this->form_validation->set_rules('username','username', 'required');
		   $this->form_validation->set_rules('password','Password','required');
 
		   if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('asset/main_1');
			  $this->load->view('admin/login');
			
		   }
		   else{
 
				$check= $this->admin->validate();
				if($check )
				{
					//setting session data
					$this->session->set_userdata('admin','1');
					 redirect('admin/dashboard');
				}
				else {
					//flashdata for incorrect passowrd and user name 
				   $this->session->set_flashdata('login_failed', 'incorect username/password');
					redirect('admin');
				}
		   }
		}
		public function forgot_view()
		{
			$this->load->view('asset/main_1');
				$this->load->view('admin/forgot_password');
		}
		/*
			public function forgot()
			{
				$username = $this->input->post('username');
				$finduser= $this->admin->forgot($username);
				if($finduser){
					$this->admin->sendpassword($finduser);
				}
				else{
					$this->session->set_flashdata('msg','Email not found');
					redirect('admin/login');
				}
				
			}
 	*/	
 	}



   ?>
