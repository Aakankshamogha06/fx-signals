<?php
defined('BASEPATH') or exit('No direct script access allowed');

class market_primer extends MY_Controller
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
		$this->load->model('admin/market_primer_model', 'market_primer_model');
		$this->load->helper('security');

		date_default_timezone_set('Asia/Kolkata');
	}






	public function add_market_primer()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data['view'] = 'admin/market_primer/add_market_primer';

			$this->load->view('admin/layout', $data);
		} else {
			redirect('admin/auth/login');
		}
	}

	public function market_primer_submit_data()
	{
		if ($this->session->has_userdata('is_admin_login')) {


			$data = [];
			if ($this->input->post()) {
				$data = $this->input->post();
				$config['upload_path'] = 'uploads/market_primer/';
				$config['allowed_types'] = 'pdf|docx|png|jpg';
				$config['encrypt_name'] = TRUE;
				$this->load->library('upload',$config);
				$this->upload->initialize($config);
				if($this->upload->do_upload('pdf'))
				{
					$uploadData = $this->upload->data();
					$pdf = $uploadData['file_name'];
				}
               else
				{
					$error = array('error' => $this->upload->display_errors());
					print_r($error);
				}
				if ($this->market_primer_model->market_primer_data_submit($data,$pdf) == true) {

					redirect("admin/market_primer/market_primer_view");
				}
               
                ?> <?php
					} else {
						$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
					}
				} else {
					redirect('admin/auth/login');
				}
			}


			
			public function market_primer_view()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data['market_primer_view'] = $this->market_primer_model->market_primer_view();
					$data['view'] = 'admin/market_primer/view_market_primer';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}


			public function market_primer_edit($id)
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$id = $this->uri->segment(4);

					$data['view_market_primer'] = $this->market_primer_model->market_primer_edit($id);
					$data['view'] = 'admin/market_primer/edit_market_primer';
					$this->load->view('admin/layout', $data);
				} else {
					redirect('admin/auth/login');
				}
			}

			public function market_primer_update_data()
			{
				if ($this->session->has_userdata('is_admin_login')) {

					$data = [];
					if ($this->input->post()) {
						$data = $this->input->post();

						$data = $this->input->post();
						$config['upload_path'] = 'uploads/market_primer/';
						$config['allowed_types'] = 'jpg|jpeg|png|gif|webp';
						$config['encrypt_name'] = TRUE;
						$this->load->library('upload',$config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('pdf'))
						{
							$uploadData = $this->upload->data();
							$pdf = $uploadData['file_name'];
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
						if ($this->market_primer_model->market_primer_update_data($data,$pdf,$image2,$image3,$image4) == true) {

							redirect("market_primer/view_market_primer");
						} ?><?php
						} else {
							$data['message'] = '<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a><strong>Error!</strong> Sorry Please Try Again.</div>';
						}
					} else {
						redirect('admin/auth/login');
					}
				}
				public function market_primer_delete($id)
				{
					if ($this->session->has_userdata('is_admin_login')) {

						$id = $this->uri->segment(4);

						if ($this->market_primer_model->market_primer_delete($id) == true) {

							redirect("market_primer/view_market_primer");
			}
			} else {
				redirect('admin/auth/login');
		}
	}
	public function index() {
        $this->load->model('market_primer_model');
        $category = 'blog_category';
        $data['blogs'] = $this->market_primer_model->get_recent_blogs($category);
        $this->load->view('blog_view', $data);
    }
}
?>