<?php
defined('BASEPATH') or exit('No direct script access allowed');

class news extends MY_Controller
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
		$this->load->model('admin/news_model', 'news_model');
		$this->load->model('admin/news_category_model', 'news_category_model');
		$this->load->model('admin/currency_pair_model', 'currency_pair_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}



	public function index()
    {
        $data['category'] = $this->news_model->category_fetch();
        $this->load->view('admin/news/add_news', $data);
    }

    public function fetch_sub_category()
    {
        $postData = $this->input->post();
        $data = $this->news_model->fetch_sub_category($postData['category']);
        echo json_encode($data);
    }


	public function add_news()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/news/add_news';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function news_submit_data()
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
				if($this->upload->do_upload('news_image'))
				{
					$uploadData = $this->upload->data();
					$news_image = $uploadData['file_name'];
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->news_model->news_data_submit($data,$news_image) == true) {

					redirect("admin/news/news_view");
				} ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function news_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['news_view'] = $this->news_model->news_view();
					$data['view'] = 'admin/news/view_news';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function news_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_news'] = $this->news_model->news_edit($id);
					$data['view'] = 'admin/news/edit_news';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function news_update_data()
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
						if($this->upload->do_upload('news_image'))
						{
							$uploadData = $this->upload->data();
							$news_image = $uploadData['file_name'];
						}
						else
						{
							$error = array('error' => $this->upload->display_errors());
							print_r($error);
						}
						if ($this->news_model->news_update_data($data,$news_image) == true) {
		
							redirect("admin/news/news_view");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function news_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->news_model->news_delete($id) == true) {

							redirect("news/view_news");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
}
?>