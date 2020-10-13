<?php 
		class Sport_news_model extends CI_Model
		{
			function getall()
			{
				$this->db->order_by('id DESC');
				return $this->db->get('sport_news')->result_array();
			}

			//crate a function to get the id from the database
				function getbyid($id)
				{
					//use get where and pass is into an array
					return $this->db->get_where('sport_news',array('id'=>$id))->row();
				}

				function save()
			{
				//post entires from form 
				$arr['title'] = $this->input->post('title');
				$arr['author'] = $this->input->post('author');
				$arr['description'] = $this->input->post('description');
				// to save entries to db we use this->db-> insert and pass the parameters
				$this->db->insert('sport_news',$arr);

			}
			function update($id)
			{
				//post entires from form 
				$arr['title'] = $this->input->post('title');
				$arr['author'] = $this->input->post('author');
				$arr['description'] = $this->input->post('description');
				$this->db->where(array('id'=>$id));
				// to save entries to db we use this->db-> insert and pass the parameters
				$this->db->update('sport_news',$arr);

			}
			function delete($id)
			{
				$this->db->where(array('id'=>$id));
				$this->db->delete('sport_news');
			}
			
		}

 ?>