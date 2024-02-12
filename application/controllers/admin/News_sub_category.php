<?php
defined('BASEPATH') or exit('No direct script access allowed');

class news_sub_category extends MY_Controller
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
		$this->load->model('admin/news_sub_category_model', 'news_sub_category_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_news_sub_category()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/news_sub_category/add_news_sub_category';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function news_sub_category_submit_data()
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
				if($this->upload->do_upload('news_sub_category_image'))
				{
					$uploadData = $this->upload->data();
					$news_sub_category_image = $uploadData['file_name'];
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->news_sub_category_model->news_sub_category_data_submit($data,$news_sub_category_image) == true) {

					redirect("admin/news_sub_category/news_sub_category_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function news_sub_category_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['news_sub_category_view'] = $this->news_sub_category_model->news_sub_category_view();
					$data['view'] = 'admin/news_sub_category/view_news_sub_category';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function news_sub_category_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_news_sub_category'] = $this->news_sub_category_model->news_sub_category_edit($id);
					$data['view'] = 'admin/news_sub_category/edit_news_sub_category';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function news_sub_category_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();


						if ($this->news_sub_category_model->news_sub_category_update_data($data) == true) {

							redirect("news_sub_category/view_news_sub_category");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function news_sub_category_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->news_sub_category_model->news_sub_category_delete($id) == true) {

							redirect("news_sub_category/view_news_sub_category");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>