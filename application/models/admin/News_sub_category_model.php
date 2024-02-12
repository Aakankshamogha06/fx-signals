<?php
class news_sub_category_model extends CI_Model
{


	public function news_sub_category_data_submit($data)
	{
		$data = [
			'name' => $data['name'],
			
		];
		if ($this->db->insert('news_sub_category', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function news_sub_category_view()
	{
		$result = $this->db->query("SELECT * from news_sub_category ");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function news_sub_category_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('news_sub_category');
	}


	public function news_sub_category_update_data($data)
	{
		
		$newdata = [
			'name' => $data['name'],
            
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('news_sub_category', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function news_sub_category_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `news_sub_category` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}
}
