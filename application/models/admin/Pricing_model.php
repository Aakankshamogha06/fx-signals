<?php
class pricing_model extends CI_Model
{


	public function pricing_data_submit($data)
	{
		$data = [
			'name' => $data['name'],
			'description' => $data['description'],
			'price' => $data['price'],
            
		];
		if ($this->db->insert('pricing', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function pricing_view()
	{
		$result = $this->db->query("SELECT * FROM `pricing`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function pricing_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('pricing');
	}


	public function pricing_update_data($data)
	{
		echo ("hi");
		$newdata = [
			'name' => $data['name'],
			'description' => $data['description'],
			'price' => $data['price'],
            

		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('pricing', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function pricing_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `pricing` where id=$id");
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
		$this->load->model('pricing_model');
		$this->load->model('pricing_features_model');
	
		$data['pricings'] = $this->pricing_model->pricing_view();
		$data['pricing_featuress'] = $this->pricing_features_model->pricing_features_view();
	
		return $data;
	}
	
	
}
?>