<?php
defined('BASEPATH') or exit('No direct script access allowed');

class author_profile extends MY_Controller
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
		$this->load->model('admin/author_profile_model', 'author_profile_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}



    public function index()
    {
        $loggedInUserInfo = $this->author_profile_model->getLoggedInUserInfo();
        $data['user_info'] = $loggedInUserInfo;
        $this->load->view('admin/author_profile/add_author_profile', $data);
    }

    
	public function add_author_profile()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/author_profile/add_author_profile';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function author_profile_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				$config['upload_path'] = 'uploads/author_profile';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('author_profile_image'))
				{
					$uploadData = $this->upload->data();
					$author_profile_image = $uploadData['file_name'];
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->author_profile_model->author_profile_data_submit($data,$author_profile_image) == true) {

					redirect("admin/author_profile/author_profile_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function author_profile_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

                    $id= $this->session->userdata('admin_id');
                    
					$data['author_profile_view'] = $this->author_profile_model->author_profile_view($id);
                    
					$data['view'] = 'admin/author_profile/view_author_profile';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function author_profile_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_author_profile'] = $this->author_profile_model->author_profile_edit($id);
					$data['view'] = 'admin/author_profile/edit_author_profile';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function author_profile_update_data()
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
						if($this->upload->do_upload('author_profile_image'))
						{
							$uploadData = $this->upload->data();
							$author_profile_image = $uploadData['file_name'];
						}
						else
						{
							$error = array('error' => $this->upload->display_errors());
							print_r($error);
						}
						if ($this->author_profile_model->author_profile_update_data($data,$author_profile_image) == true) {
		
							redirect("admin/author_profile/author_profile_view");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function author_profile_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->author_profile_model->author_profile_delete($id) == true) {

							redirect("author_profile/view_author_profile");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>