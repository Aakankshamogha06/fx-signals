<?php
defined('BASEPATH') or exit('No direct script access allowed');

class blog_category extends MY_Controller
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
		$this->load->model('admin/blog_category_model', 'blog_category_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_blog_category()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/blog_category/add_blog_category';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function blog_category_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();

				if ($this->blog_category_model->blog_category_data_submit($data) == true) {

					redirect("blog_category/view_blog_category");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}
			public function blog_category_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['blog_category_view'] = $this->blog_category_model->blog_category_view();
					$data['view'] = 'admin/blog_category/view_blog_category';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function blog_category_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_blog_category'] = $this->blog_category_model->blog_category_edit($id);
					$data['view'] = 'admin/blog_category/edit_blog_category';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function blog_category_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();


						if ($this->blog_category_model->blog_category_update_data($data) == true) {

							redirect("blog_category/view_blog_category");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function blog_category_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->blog_category_model->blog_category_delete($id) == true) {

							redirect("blog_category/view_blog_category");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>