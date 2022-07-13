<?php
	class Comment_model extends CI_Model
	{
		 
			//comments model...
		 function save($news_id)
		 {
		 	//$arr['news_id'] = $news_id;
		 	$arr['news_id'] = $this->input->post('news_id');
			 $arr['name'] = $this->input->post('name');
				$arr['email'] = $this->input->post('email');
				$arr['body'] = $this->input->post('body');
		 
			return $this->db->insert('comments',$arr);

		}
		 

		 
			function get_comment($news_id)
			{
				
				
				//get all comment entries from db
				
					return  $this->db->get_where('comments',array('news_id'=>$news_id))->result();
					//return query
					  
			}
			function getbyid($news_id)
				{
					//use get where and pass is into an array
					return $this->db->get_where('comments',array('news_id'=>$news_id))->row();
				}
				 
			function delete($id)
			{
				$this->db->where(array('id'=>$id));
				$this->db->delete('comments');
			}
		 
	}
	
	?>
