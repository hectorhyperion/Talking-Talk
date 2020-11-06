<?php
	class Comment_model extends CI_Model
	{
		public function __construct()
		{
			//$this->load->database();
		}
			//comments model...
		 function save()
		 {
			 $arr['name'] = $this->input->post('name');
				$arr['email'] = $this->input->post('email');
				$arr['body'] = $this->input->post('body');
		 
			return $this->db->insert('comments',$arr);
		}

		public function get_comments($post_id){
			$query = $this->db->get_where('comments', array('post_id' => $post_id));
			return $query->result_array();
		}
	}
	?>