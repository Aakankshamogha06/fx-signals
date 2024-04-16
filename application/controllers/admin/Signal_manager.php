<?php
defined('BASEPATH') or exit('No direct script access allowed');

class signal_manager extends MY_Controller
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
		$this->load->model('admin/signal_manager_model', 'signal_manager_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}



	// public function update_chart_status() {
	// 	$signal_manager_id = $this->input->post('signal_manager_id');
	// 	$status = $this->input->post('status');
		
	// 	// Debugging: Print POST data
	// 	echo "chart ID: $signal_manager_id, Status: $status";
		
	
	// 	// Ensure signal_manager_id and status are provided
	// 	if (!$signal_manager_id || !$status) {
	// 		// Handle missing data, such as showing an error message
	// 		redirect('admin/signal_manager/signal_manager_view');
	// 		return;
	// 	}
	
	// 	// Update the status of the chart in the database
	// 	$this->db->where('id', $signal_manager_id);
	// 	$this->db->update('signal_manager', ['status' => $status]); // Changed table name to 'signal_manager'
	
	// 	if ($status == 'approved') {
	// 		$signal_manager_id = $this->input->post('signal_manager_id');
	// 		print_r($signal_manager_id);
	// 		echo('<br>');
	// 		// Debugging: Print signal_manager ID
	// 		echo "signal_manager ID: $signal_manager_id";
	
	// 		// Check if signal_manager_id is not empty
	// 		if ($signal_manager_id) {
	// 			// Get signal_manager details
	// 			$signal_manager_details = $this->signal_manager_model->signal_manager_edit($signal_manager_id);
				
	// 			// Debugging: Print signal_manager details
	// 			print_r($signal_manager_details);
				
	// 			if ($signal_manager_details) {
					
	// 					$user_data = array(
	// 						'username' => $signal_manager_details[0]->name,
	// 						'email' => $signal_manager_details[0]->email,
	// 						'password' => password_hash($signal_manager_details[0]->password, PASSWORD_BCRYPT), // Hash the plain text password
	// 						'is_admin' => 4,
						
						
	// 				);
	
	// 				// Debugging: Print user data to be inserted
	// 				print_r($user_data);
	
	// 				// Insert signal_manager as a user
	// 				if ($this->db->insert('users', $user_data)) {
	// 					echo "User inserted successfully!";
	// 				} else {
	// 					echo "Failed to insert user!";
	// 				}
	// 			} else {
	// 				echo "signal_manager details not found!";
	// 			}
	// 		} else {
	// 			echo "signal_manager ID is empty!";
	// 			die;
	// 		}
	// 	}
	
	// 	// Redirect back to the view page or do any other necessary action
	// 	redirect('admin/signal_manager/signal_manager_view');
	// }
	public function update_chart_status() {
		$signal_manager_id = $this->input->post('signal_manager_id');
		$status = $this->input->post('status');
		if (!$signal_manager_id || !$status) {
			redirect('admin/signal_manager/signal_manager_view');
			return;
		}
		$this->db->where('id', $signal_manager_id);
		$this->db->update('signal_manager', ['status' => $status]);
		if ($status == 'approved') {
			$signal_manager_details = $this->signal_manager_model->signal_manager_edit($signal_manager_id);
			if ($signal_manager_details) {
				$user_data = array(
					'username' => $signal_manager_details[0]->username,
					'firstname' => $signal_manager_details[0]->firstname,
					'lastname' => $signal_manager_details[0]->lastname,
					'mobile_no' => $signal_manager_details[0]->mobile_no,
					'email' => $signal_manager_details[0]->email,
					'password' => $signal_manager_details[0]->password,
					'is_admin' => 4
				);
				if ($this->db->insert('users', $user_data)) {
					echo "User inserted successfully!";
				} else {
					echo "Failed to insert user!";
				}
			} else {
				echo "signal_manager details not found!";
			}
		}
		redirect('admin/signal_manager/signal_manager_view');
	}
	
	public function add_signal_manager()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/signal_manager/add_signal_manager';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function signal_manager_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				$config['upload_path'] = 'uploads/signal_manager_profile';
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

				$chart_config['upload_path'] = 'uploads/signal_manager_chart';
				$chart_config['allowed_types'] = 'pdf|docx|jpg|jpeg|png';
				$chart_config['encrypt_name'] = TRUE;
				$this->load->library('upload',$chart_config);
				$this->upload->initialize($chart_config);
				if($this->upload->do_upload('sample_chart'))
				{
					$uploadData = $this->upload->data();
					$sample_chart = $uploadData['file_name'];
				}
				else
				{
					$error = array('articlle_error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->signal_manager_model->signal_manager_data_submit($data,$profile_image,$sample_chart) == true) {

					redirect("admin/signal_manager/signal_manager_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function signal_manager_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['signal_manager_view'] = $this->signal_manager_model->signal_manager_view();
					$data['view'] = 'admin/signal_manager/view_signal_manager';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function signal_manager_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_signal_manager'] = $this->signal_manager_model->signal_manager_edit($id);
					$data['view'] = 'admin/signal_manager/edit_signal_manager';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function signal_manager_update_data()
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
						if ($this->signal_manager_model->signal_manager_update_data($data,$profile_image) == true) {
		
							redirect("admin/signal_manager/signal_manager_view");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function signal_manager_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->signal_manager_model->signal_manager_delete($id) == true) {

							redirect("signal_manager/view_signal_manager");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>