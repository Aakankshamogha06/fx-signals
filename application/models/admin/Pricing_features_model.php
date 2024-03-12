<?php
class pricing_features_model extends CI_Model
{


	public function pricing_features_data_submit($data)
	{
		$data = [
			'pricing_id' => $data['pricing_id'],
			'features' => $data['features'],
			'features_available' => $data['features_available'],

		];
		if ($this->db->insert('pricing_features', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function pricing_features_view()
	{
		$result = $this->db->query("SELECT *,(SELECT name FROM pricing WHERE pricing.id= pricing_features.pricing_id)as pricing_id FROM `pricing_features`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function pricing_features_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('pricing_features');
	}


	public function pricing_features_update_data($data)
	{
		echo ("hi");
		$newdata = [
			'pricing_id' => $data['pricing_id'],
			'features' => $data['features'],


		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('pricing_features', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function pricing_features_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `pricing_features` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function role_fetch()
	{

		$role_data = $this->db->query("SELECT * FROM `pricing`");

		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();
		} else {
			return false;
		}
	}

	public function pricing($id)
    {

        $assign_data = $this->db->query("SELECT a.*,b.* FROM `pricing` a ,pricing_features b WHERE a.id=b.pricing_id and a.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }
	
}
?>