<?php
defined('BASEPATH') or exit('No direct script access allowed');

class broker extends MY_Controller
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
		$this->load->model('admin/broker_model', 'broker_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_broker()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/broker/add_broker';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function broker_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				$config['upload_path'] = 'uploads/broker/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('broker_image'))
				{
					$uploadData = $this->upload->data();
					$broker_image = $uploadData['file_name'];
				}
                
				else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->broker_model->broker_data_submit($data,$broker_image) == true) {

					redirect("admin/broker/broker_view");
				}
               
                ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function broker_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['broker_view'] = $this->broker_model->broker_view();
					$data['view'] = 'admin/broker/view_broker';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function broker_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_broker'] = $this->broker_model->broker_edit($id);
					$data['view'] = 'admin/broker/edit_broker';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function broker_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();

						$data = $this->input->post();
						$config['upload_path'] = 'uploads/broker/';
						$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
						$config['encrypt_name'] = TRUE;
						$this->load->library('upload',$config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('broker_image'))
						{
							$uploadData = $this->upload->data();
							$broker_image = $uploadData['file_name'];
						}
						
						else
						{
							$error = array('error' => $this->upload->display_errors());
							print_r($error);
						}
						if ($this->broker_model->broker_update_data($data,$broker_image) == true) {

							redirect("broker/view_broker");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function broker_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->broker_model->broker_delete($id) == true) {

							redirect("broker/view_broker");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
	public function index() {
        $this->load->model('broker_model');
        $category = 'blog_category';
        $data['blogs'] = $this->broker_model->get_recent_blogs($category);
        $this->load->view('blog_view', $data);
    }
}
?>