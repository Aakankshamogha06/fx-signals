<?php
class live_rate_model extends CI_Model
{


	public function live_rate_data_submit($data)
	{
		$data = [
			'page_name' => $data['page_name'],
            'description' => $data['description'],
		];
		if ($this->db->insert('live_rate', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function live_rate_view()
	{
		$result = $this->db->query("SELECT * FROM `live_rate`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function live_rate_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('live_rate');
	}


	public function live_rate_update_data($data)
	{
		$newdata = [
            'page_name' => $data['page_name'],
            'description' => $data['description'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('live_rate', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function live_rate_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `live_rate` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}

    
	public function live_rate($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `live_rate` where live_rate.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }
	

public function live_rate_by_page_name($category_name)
{
    $this->db->select('live_rate.*');
    $this->db->from('live_rate');
    $this->db->where('live_rate.page_name', $category_name);

    $result = $this->db->get();

    if ($result->num_rows() > 0) {
        return $result->result_array();
    } else {
        return false;
    }
}

}
