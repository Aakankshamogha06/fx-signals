<?php
class economic_calender_model extends CI_Model
{


	public function economic_calender_data_submit($data)
	{
		$data = [
			'date' => $data['date'],
			'day' => $data['day'],
			'heading1' => $data['heading1'],
			'desc1' => $data['desc1'],
            'heading2' => $data['heading2'],
            'desc2' => $data['desc2'],
            'heading3' => $data['heading3'],
            'desc3' => $data['desc3'],
			
           
		];
		if ($this->db->insert('economic_calender', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function economic_calender_view()
	{
		$result = $this->db->query("SELECT * from economic_calender ");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function economic_calender_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('economic_calender');
	}


	public function economic_calender_update_data($data)
	{
		
		$newdata = [
			'date' => $data['date'],
			'day' => $data['day'],
			'heading1' => $data['heading1'],
			'desc1' => $data['desc1'],
            'heading2' => $data['heading2'],
            'desc2' => $data['desc2'],
            'heading3' => $data['heading3'],
            'desc3' => $data['desc3'],
            
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('economic_calender', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function economic_calender_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `economic_calender` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function category_fetch()
	{

		$category_data = $this->db->query("SELECT * FROM `economic_calender_category`");

		$fetch = $category_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $category_data->result_array();
		} else {
			return false;
		}
	}
}
