<?php
class author_pricing_features_model extends CI_Model
{


	public function author_pricing_features_data_submit($data)
	{
		$data = [
			'pricing_id' => $data['pricing_id'],
			'features' => $data['features'],
			'features_available' => $data['features_available'],

		];
		if ($this->db->insert('author_pricing_features', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function author_pricing_features_view()
	{
		$result = $this->db->query("SELECT *,(SELECT name FROM author_pricing WHERE author_pricing.id= author_pricing_features.pricing_id)as pricing_id FROM `author_pricing_features`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function author_pricing_features_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('author_pricing_features');
	}


	public function author_pricing_features_update_data($data)
	{
		echo ("hi");
		$newdata = [
			'pricing_id' => $data['pricing_id'],
			'features' => $data['features'],


		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('author_pricing_features', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function author_pricing_features_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `author_pricing_features` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function role_fetch()
	{

		$role_data = $this->db->query("SELECT * FROM `author_pricing`");

		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();
		} else {
			return false;
		}
	}

	public function pricing($id)
    {

        $assign_data = $this->db->query("SELECT *,(SELECT name FROM author_pricing WHERE author_pricing.id= author_pricing_features.pricing_id)as pricing_id FROM `author_pricing_features` where author_pricing_features.pricing_id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }
	
}
?>