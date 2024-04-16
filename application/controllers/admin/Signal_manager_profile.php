<?php
defined('BASEPATH') or exit('No direct script access allowed');

class signal_manager_profile extends MY_Controller
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
		$this->load->model('admin/signal_manager_profile_model', 'signal_manager_profile_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}



    public function index()
    {
        $loggedInUserInfo = $this->signal_manager_profile_model->getLoggedInUserInfo();
        $data['user_info'] = $loggedInUserInfo;
        $this->load->view('admin/signal_manager_profile/add_signal_manager_profile', $data);
    }

    
	public function add_signal_manager_profile()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/signal_manager_profile/add_signal_manager_profile';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function signal_manager_profile_submit_data()
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
				if($this->upload->do_upload('signal_manager_profile_image'))
				{
					$uploadData = $this->upload->data();
					$signal_manager_profile_image = $uploadData['file_name'];
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->signal_manager_profile_model->signal_manager_profile_data_submit($data,$signal_manager_profile_image) == true) {

					redirect("admin/signal_manager_profile/signal_manager_profile_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function signal_manager_profile_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

                    $id= $this->session->userdata('admin_id');
                    
					$data['signal_manager_profile_view'] = $this->signal_manager_profile_model->signal_manager_profile_view($id);
                    
					$data['view'] = 'admin/signal_manager_profile/view_signal_manager_profile';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function signal_manager_profile_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_signal_manager_profile'] = $this->signal_manager_profile_model->signal_manager_profile_edit($id);
					$data['view'] = 'admin/signal_manager_profile/edit_signal_manager_profile';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function signal_manager_profile_update_data()
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
						if($this->upload->do_upload('signal_manager_profile_image'))
						{
							$uploadData = $this->upload->data();
							$signal_manager_profile_image = $uploadData['file_name'];
						}
						else
						{
							$error = array('error' => $this->upload->display_errors());
							print_r($error);
						}
						if ($this->signal_manager_profile_model->signal_manager_profile_update_data($data,$signal_manager_profile_image) == true) {
		
							redirect("admin/signal_manager_profile/signal_manager_profile_view");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function signal_manager_profile_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->signal_manager_profile_model->signal_manager_profile_delete($id) == true) {

							redirect("signal_manager_profile/view_signal_manager_profile");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>