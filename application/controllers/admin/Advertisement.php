<?php
defined('BASEPATH') or exit('No direct script access allowed');

class advertisement extends MY_Controller
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
		$this->load->model('admin/advertisement_model', 'advertisement_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_advertisement()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/advertisement/add_advertisement';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function advertisement_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				$config['upload_path'] = 'uploads/advertisement/';
				$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('image1'))
				{
					$uploadData = $this->upload->data();
					$image1 = $uploadData['file_name'];
				}
                if($this->upload->do_upload('image2'))
				{
					$uploadData = $this->upload->data();
					$image2 = $uploadData['file_name'];
				}
                if($this->upload->do_upload('image3'))
				{
					$uploadData = $this->upload->data();
					$image3 = $uploadData['file_name'];
				}
                if($this->upload->do_upload('image4'))
				{
					$uploadData = $this->upload->data();
					$image4 = $uploadData['file_name'];
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->advertisement_model->advertisement_data_submit($data,$image1,$image2,$image3,$image4) == true) {

					redirect("admin/advertisement/advertisement_view");
				}
               
                ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function advertisement_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['advertisement_view'] = $this->advertisement_model->advertisement_view();
					$data['view'] = 'admin/advertisement/view_advertisement';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function advertisement_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_advertisement'] = $this->advertisement_model->advertisement_edit($id);
					$data['view'] = 'admin/advertisement/edit_advertisement';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function advertisement_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();

						$data = $this->input->post();
						$config['upload_path'] = 'uploads/advertisement/';
						$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
						$config['encrypt_name'] = TRUE;
						$this->load->library('upload',$config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('image1'))
						{
							$uploadData = $this->upload->data();
							$image1 = $uploadData['file_name'];
						}
						if($this->upload->do_upload('image2'))
						{
							$uploadData = $this->upload->data();
							$image2 = $uploadData['file_name'];
						}
						if($this->upload->do_upload('image3'))
						{
							$uploadData = $this->upload->data();
							$image3 = $uploadData['file_name'];
						}
						if($this->upload->do_upload('image4'))
						{
							$uploadData = $this->upload->data();
							$image4 = $uploadData['file_name'];
						}
						else
						{
							$error = array('error' => $this->upload->display_errors());
							print_r($error);
						}
						if ($this->advertisement_model->advertisement_update_data($data,$image1,$image2,$image3,$image4) == true) {

							redirect("advertisement/view_advertisement");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function advertisement_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->advertisement_model->advertisement_delete($id) == true) {

							redirect("advertisement/view_advertisement");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
	public function index() {
        $this->load->model('advertisement_model');
        $category = 'blog_category';
        $data['blogs'] = $this->advertisement_model->get_recent_blogs($category);
        $this->load->view('blog_view', $data);
    }
}
?>