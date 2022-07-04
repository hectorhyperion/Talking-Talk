<?php 
		class News_model extends CI_Model
		{
			function getall($limit,$offset)
			{
				$search = $this->input->get('search');
				//search db for multiple data 
				if($search){
				$this->db->like(array('title'=>$search));
				$this->db->or_like(array('description'=>$search));
				$this->db->or_like(array('author'=>$search));
					}
					//Lets you limit the number of rows you would like returned by the query eg. $this->db->limit 3, for three query per row
				$this->db->limit($limit);
				//get a defualt value for page number one
				$this->db->offset($offset);
				//to arrange entries from database ...... asec or desc order
				$this->db->order_by('id DESC');
				//get all entries from database
				 
					$query = $this->db->get('news');
				 
				return $query->result();
			}

			function countall()
			{
				//count, searched entries from the database 
				$search = $this->input->get('search');

				$this->db->like(array('title'=>$search));
				$this->db->or_like(array('description'=>$search));
				$this->db->or_like(array('author'=>$search));
				//count entries from DATABASE
				return $this->db->get('news')->num_rows();
			}
			//crate a function to get the id from the database
				function getbyid($id)
				{
					//use get where and pass is into an array
					return $this->db->get_where('news',array('id'=>$id))->row();
				}
				 
				function get_one($ne_id)
			{
				$this->db->get_where('news',array('ne_id'=>$ne_id));
				$query = $this->db->get('news');
				return $query->row();
			}

			function save()
			{
				//post entires from form 
			//	$arr['slug'] = $this->input->post('slug');
				$arr['title'] = $this->input->post('title');
				$arr['author'] = $this->input->post('author');
				$arr['description'] = $this->input->post('description');
					//upload image to db
				if(isset($_FILES['image']['name']))
				{
					$this->load->library('upload');
					$config['upload_path'] = APPPATH.'../uploads/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['file_name'] = date('YmdHms').'_'.rand(1,999999);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('image')) 
					{
						$uploaded = $this->upload->data();
						$arr['image']=$uploaded['file_name'];
					}
				}
				
				
				// to save entries to db we use this->db-> insert and pass the parameters
					$this->db->insert('news',$arr);

			}

			function update($id)
			{
				//post entires from form
				
				$arr['slug'] = $this->input->post('slug');
				$arr['title'] = $this->input->post('title');
				$arr['author'] = $this->input->post('author');
				$arr['description'] = $this->input->post('description');
				if(isset($_FILES['image']['name']))
				{
					//load upload lib,
					$this->load->library('upload');
					//laod some config
					$config['upload_path'] = APPPATH.'../uploads/';
					$config['allowed_types'] = 'gif|jpg|png';
					$config['file_name'] = date('YmdHms').'_'.rand(1,999999);
					$this->upload->initialize($config);
					if ($this->upload->do_upload('image')) 
					{
						$uploaded = $this->upload->data();
						$arr['image']=$uploaded['file_name'];
					}
				}
				$this->db->where(array('id'=>$id));
				// to save entries to db we use this->db-> insert and pass the parameters
				$this->db->update('news',$arr);

			}
			function delete($id)
			{
				$this->db->where(array('id'=>$id));
				$this->db->delete('news');
			}
			
		}

 ?>