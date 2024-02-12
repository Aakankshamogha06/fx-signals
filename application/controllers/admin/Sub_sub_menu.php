<?php
defined('BASEPATH') or exit('No direct script access allowed');

class sub_Sub_menu extends MY_Controller
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
		$this->load->model('admin/sub_sub_menu_model', 'sub_sub_menu_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_sub_sub_menu()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/sub_sub_menu/add_sub_sub_menu';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function sub_sub_menu_submit_data()
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
				
				if ($this->sub_sub_menu_model->sub_sub_menu_data_submit($data) == true) {

					redirect("admin/sub_sub_menu/sub_sub_menu_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function sub_sub_menu_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['sub_sub_menu_view'] = $this->sub_sub_menu_model->sub_sub_menu_view();
					$data['view'] = 'admin/sub_sub_menu/view_sub_sub_menu';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function sub_sub_menu_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_sub_sub_menu'] = $this->sub_sub_menu_model->sub_sub_menu_edit($id);
					$data['view'] = 'admin/sub_sub_menu/edit_sub_sub_menu';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function sub_sub_menu_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();


						if ($this->sub_sub_menu_model->sub_sub_menu_update_data($data) == true) {

							redirect("sub_sub_menu/view_sub_sub_menu");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function sub_sub_menu_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->sub_sub_menu_model->sub_sub_menu_delete($id) == true) {

							redirect("sub_sub_menu/view_sub_sub_menu");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>