<?php
defined('BASEPATH') or exit('No direct script access allowed');

class author extends MY_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('pagination');
		$this->load->library('session');
		$this->load->library('email');
		$this->load->helper('cookie');
		$this->load->library('form_validation');
		$this->load->library('encryption');
		$this->load->model('admin/author_model', 'author_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}



	// public function update_article_status() {
	// 	$author_id = $this->input->post('author_id');
	// 	$status = $this->input->post('status');
		
	// 	// Debugging: Print POST data
	// 	echo "Article ID: $author_id, Status: $status";
		
	
	// 	// Ensure author_id and status are provided
	// 	if (!$author_id || !$status) {
	// 		// Handle missing data, such as showing an error message
	// 		redirect('admin/author/author_view');
	// 		return;
	// 	}
	
	// 	// Update the status of the article in the database
	// 	$this->db->where('id', $author_id);
	// 	$this->db->update('author', ['status' => $status]); // Changed table name to 'author'
	
	// 	if ($status == 'approved') {
	// 		$author_id = $this->input->post('author_id');
	// 		print_r($author_id);
	// 		echo('<br>');
	// 		// Debugging: Print author ID
	// 		echo "Author ID: $author_id";
	
	// 		// Check if author_id is not empty
	// 		if ($author_id) {
	// 			// Get author details
	// 			$author_details = $this->author_model->author_edit($author_id);
				
	// 			// Debugging: Print author details
	// 			print_r($author_details);
				
	// 			if ($author_details) {
					
	// 					$user_data = array(
	// 						'username' => $author_details[0]->name,
	// 						'email' => $author_details[0]->email,
	// 						'password' => password_hash($author_details[0]->password, PASSWORD_BCRYPT), // Hash the plain text password
	// 						'is_admin' => 4,
						
						
	// 				);
	
	// 				// Debugging: Print user data to be inserted
	// 				print_r($user_data);
	
	// 				// Insert author as a user
	// 				if ($this->db->insert('users', $user_data)) {
	// 					echo "User inserted successfully!";
	// 				} else {
	// 					echo "Failed to insert user!";
	// 				}
	// 			} else {
	// 				echo "Author details not found!";
	// 			}
	// 		} else {
	// 			echo "Author ID is empty!";
	// 			die;
	// 		}
	// 	}
	
	// 	// Redirect back to the view page or do any other necessary action
	// 	redirect('admin/author/author_view');
	// }
	public function update_article_status() {
		$author_id = $this->input->post('author_id');
		$status = $this->input->post('status');
		if (!$author_id || !$status) {
			redirect('admin/author/author_view');
			return;
		}
		$this->db->where('id', $author_id);
		$this->db->update('author', ['status' => $status]);
		if ($status == 'approved') {
			$author_details = $this->author_model->author_edit($author_id);
			if ($author_details) {
				$user_data = array(
					'username' => $author_details[0]->username,
					'firstname' => $author_details[0]->firstname,
					'lastname' => $author_details[0]->lastname,
					'mobile_no' => $author_details[0]->mobile_no,
					'email' => $author_details[0]->email,
					'password' => $author_details[0]->password,
					'is_admin' => 4
				);
				if ($this->db->insert('users', $user_data)) {
					echo "User inserted successfully!";
				} else {
					echo "Failed to insert user!";
				}
			} else {
				echo "Author details not found!";
			}
		}
		redirect('admin/author/author_view');
	}
	
	
	
	
	



	public function add_author()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/author/add_author';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function author_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				$config['upload_path'] = 'uploads/profile';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('profile_image'))
				{
					$uploadData = $this->upload->data();
					$profile_image = $uploadData['file_name'];
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}

				$article_config['upload_path'] = 'uploads/articles';
				$article_config['allowed_types'] = 'pdf|docx';
				$article_config['encrypt_name'] = TRUE;
				$this->load->library('upload',$article_config);
				$this->upload->initialize($article_config);
				if($this->upload->do_upload('sample_article'))
				{
					$uploadData = $this->upload->data();
					$sample_article = $uploadData['file_name'];
				}
				else
				{
					$error = array('articlle_error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->author_model->author_data_submit($data,$profile_image,$sample_article) == true) {

					redirect("admin/author/author_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function author_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['author_view'] = $this->author_model->author_view();
					$data['view'] = 'admin/author/view_author';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function author_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_author'] = $this->author_model->author_edit($id);
					$data['view'] = 'admin/author/edit_author';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function author_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();
						$config['upload_path'] = 'uploads';
						$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
						$config['encrypt_name'] = TRUE;
						$this->load->library('upload',$config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('profile_image'))
						{
							$uploadData = $this->upload->data();
							$profile_image = $uploadData['file_name'];
						}
						else
						{
							$error = array('error' => $this->upload->display_errors());
							print_r($error);
						}
						if ($this->author_model->author_update_data($data,$profile_image) == true) {
		
							redirect("admin/author/author_view");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function author_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->author_model->author_delete($id) == true) {

							redirect("author/view_author");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>