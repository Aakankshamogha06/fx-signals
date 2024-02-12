<?php
defined('BASEPATH') or exit('No direct script access allowed');

class news_type extends MY_Controller
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
		$this->load->model('admin/news_type_model', 'news_type_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_news_type()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/news_type/add_news_type';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function news_type_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				
				if ($this->news_type_model->news_type_data_submit($data) == true) {

					redirect("admin/news_type/news_type_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function news_type_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['news_type_view'] = $this->news_type_model->news_type_view();
					$data['view'] = 'admin/news_type/view_news_type';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function news_type_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_news_type'] = $this->news_type_model->news_type_edit($id);
					$data['view'] = 'admin/news_type/edit_news_type';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function news_type_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();
						if ($this->news_type_model->news_type_update_data($data) == true) {
		
							redirect("admin/news_type/news_type_view");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function news_type_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->news_type_model->news_type_delete($id) == true) {

							redirect("news_type/view_news_type");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>