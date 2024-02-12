<?php
class author_pricing_model extends CI_Model
{


	public function author_pricing_data_submit($data)
	{
		$data = [
			'name' => $data['name'],
			'description' => $data['description'],
			'price' => $data['price'],
            
		];
		if ($this->db->insert('author_pricing', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function author_pricing_view()
	{
		$result = $this->db->query("SELECT * FROM `author_pricing`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function author_pricing_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('author_pricing');
	}


	public function author_pricing_update_data($data)
	{
		echo ("hi");
		$newdata = [
			'name' => $data['name'],
			'description' => $data['description'],
			'price' => $data['price'],
            

		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('author_pricing', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function author_pricing_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `author_pricing` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function role_fetch()
	{

		$role_data = $this->db->query("SELECT * FROM `roles`");

		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();
		} else {
			return false;
		}
	}
	public function header_data()
	{
		$this->load->model('author_pricing_model');
		$this->load->model('author_pricing_features_model');
	
		$data['author_pricings'] = $this->author_pricing_model->author_pricing_view();
		$data['author_pricing_featuress'] = $this->author_pricing_features_model->author_pricing_features_view();
	
		return $data;
	}
	
	
}
?>