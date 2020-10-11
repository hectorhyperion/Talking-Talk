<?php 
		class Sport_news_model extends CI_Model
		{
			function getall()
			{
				return $this->db->get('sport_news')->result_array();
			}
		}

 ?>