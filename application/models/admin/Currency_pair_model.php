<?php
class currency_pair_model extends CI_Model
{

    
    function fetch_sub_category($postData){
        $response = array();
     
        // Select record
        $this->db->select('*');
        $this->db->where('pair_category', $postData['category']);
        $q = $this->db->get('currency_pair');
        $response = $q->result_array();
    
        return $response;
      }
    

	public function currency_pair_data_submit($data)
	{
		$data = [
			'pair_category' => $data['pair_category'],
			'pair_name' => $data['pair_name'],
		];
		if ($this->db->insert('currency_pair', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function currency_pair_view()
	{
		$result = $this->db->query("SELECT *,(SELECT name FROM news_category WHERE news_category.id=currency_pair.pair_category)as pair_category FROM `currency_pair` ");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function currency_pair_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('currency_pair');
	}


	public function currency_pair_update_data($data)
	{
		
		$newdata = [
			'pair_category' => $data['pair_category'],
			'pair_name' => $data['pair_name'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('currency_pair', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
		
	}


	public function currency_pair_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `currency_pair` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}

	public function role_fetch()
	{

		$role_data = $this->db->query("SELECT * FROM `news_category`");

		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();
		} else {
			return false;
		}
	}

}
