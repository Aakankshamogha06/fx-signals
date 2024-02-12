<?php
class blog_category_model extends CI_Model
{


	public function blog_category_data_submit($data)
	{
		$data = [
			'category' => $data['category'],
		];
		if ($this->db->insert('blog_category', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function blog_category_view()
	{
		$result = $this->db->query("SELECT * FROM `blog_category`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function blog_category_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('blog_category');
	}


	public function blog_category_update_data($data)
	{
		echo ("hi");
		$newdata = [
			'category' => $data['category'],

		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('blog_category', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function blog_category_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `blog_category` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function role_fetch()
	{

		$role_data = $this->db->query("SELECT * FROM `blog_category`");

		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();
		} else {
			return false;
		}
	}
}
