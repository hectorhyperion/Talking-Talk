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
		function getall()
			{
			//	$this->db->order_by('id DESC');
			//	return $this->db->get_where('comments')->result_array();
			}

		 
			function get_comment($news_id)
			{
				

				//get all comment entries from db
				
					return  $this->db->get_where('comments',array('news_id'=>$news_id))->result();
					//return query
					  
			}

		 
	}
	
	?>