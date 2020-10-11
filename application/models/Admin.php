 <?php 

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
				
 			}



  ?>