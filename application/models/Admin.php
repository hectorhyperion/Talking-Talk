 <?php 
defined('BASEPATH') OR exit('No direct script access allowed');

 		class Admin extends CI_model
			{
 				function validate()
				{
					
					$arr['username']=$this->input->post('username');
 					$arr['password']=md5($this->input->post('password'));
 					//die('username');
 					var_dump($arr);
 					return $this->db->get_where('admins',$arr)->row();
				}
				/*
				public function get_user($id)
				{
					$this->db->where('id', $id);
					$query = $this->db->get('admins');
					return $query->row();
				}
				public function update_password($id, $userdata)
				{
					$this->db->where('id', $id);
					$this->db->update('admins', $userdata);
				}
				public function forgot($username)
				{
					$this->db->select('username');
					$this->db->from('admins');
					$this->db->where('username' , $username);
					$query=$this->db->get();
       				 return $query->row_array();
				}
				public function sendpassword($data)
				{
					$username = $data['email'];
					$query1=$this->db->query(("SELECT * FROM admins WHERE username='".$username."' "));
					$row=$query1->result_array();
        if ($query1->num_rows()>0)
		{
			$passwordplain = "";
			$passwordplain  = rand(999999999,9999999999);
			$newpass['password'] = md5($passwordplain);	
			$this->db->where('username', $username);
			$this->db->update('admins', $newpass); 
			$mail_message='Thanks for contacting regarding to forgot password,<br> Your <b>Password</b> is <b>'.$passwordplain.'</b>'."\r\n";
			$mail_message.='<br>Please Update your password.';
			$mail_message.='<br>Thanks & Regards';
			$mail_message.='<br>Your company name';       
			
			date_default_timezone_set('Etc/UTC');
        require FCPATH.'assets/PHPMailer/PHPMailerAutoload.php';
		//$mail = new PHPMailer;
        $mail->isSMTP();
        $mail->SMTPSecure = "tls"; 
        $mail->Debugoutput = 'html';
        $mail->Host = "yooursmtp";
        $mail->Port = 587;
        $mail->SMTPAuth = true;   
        $mail->Username = "agimpius53@email.com";    
        $mail->Password = "Hectorhyperion";
        $mail->setFrom('admin@site', 'admin');
        $mail->IsHTML(true);
        $mail->addAddress($email);
        $mail->Subject = 'OTP from company';
        $mail->Body    = $mail_message;
        $mail->AltBody = $mail_message;

		if (!$mail->send()) {
			$this->session->set_flashdata('msg','Failed to send password, please try again!');
	   } else {
		  $this->session->set_flashdata('msg','Password sent to your email!');
	   }
		 redirect(base_url().'user/Login','refresh');        
	   }
	   else{
		$this->session->set_flashdata('msg','Username not found try again!');
		redirect('admin/Login','refresh');			
	   
		}
				}
				*/
 			}



  ?>
