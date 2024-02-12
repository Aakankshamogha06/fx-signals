<?php
class news_type_model extends CI_Model
{


	public function news_type_data_submit($data)
	{
		$data = [
			'news_type_name' => $data['news_type_name'],
			
		];
		if ($this->db->insert('news_type', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function news_type_view()
	{
		$result = $this->db->query("SELECT * from news_type ");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function news_type_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('news_type');
	}


	public function news_type_update_data($data)
	{
		
		$newdata = [
			'news_type_name' => $data['news_type_name'],
            
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('news_type', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function news_type_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `news_type` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}
}
