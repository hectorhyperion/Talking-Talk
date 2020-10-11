<?php 
		class News_model extends CI_Model
		{
			function getall()
			{
				return $this->db->get('news')->result();
			}
		}

 ?>