<?php
class broker_detail_model extends CI_Model
{


	public function broker_detail_data_submit($data)
	{
		$data = [
			'broker_id' => $data['broker_id'],
            'broker_email' => $data['broker_email'],
			'broker_contact' => $data['broker_contact'],
			'about' => $data['about'],
		];
		if ($this->db->insert('broker_detail', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function broker_detail_view()
	{
		$result = $this->db->query("SELECT * FROM broker_detail");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function broker_detail_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('broker_detail');
	}


	public function broker_detail_update_data($data)
	{
		$newdata = [
			'broker_id' => $data['broker_id'],
            'broker_email' => $data['broker_email'],
			'broker_contact' => $data['broker_contact'],
			'about' => $data['about'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('broker_detail', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function broker_detail_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `broker_detail` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}



	public function broker_fetch()
	{

		$broker_data = $this->db->query("SELECT * FROM `broker`");

		$fetch = $broker_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $broker_data->result_array();
		} else {
			return false;
		}
	}

    public function broker_detail($id)
    {

        $assign_data = $this->db->query("SELECT broker_detail.*, 
		broker.company_name,
		broker.broker_image,
		broker.website_url,
		broker.rating,
		broker.order_id,
		broker.type,
		broker.company_name,
		broker.ranking,
		broker.min_deposit
 FROM broker_detail 
 JOIN broker ON broker.id = broker_detail.broker_id where broker_detail.id=$id; ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }
    public function broker_detail_by_type_name($category_name)
{
    $this->db->select('broker_detail.*');
    $this->db->from('broker_detail');
    $this->db->where('broker_detail.type', $category_name);

    $result = $this->db->get();

    if ($result->num_rows() > 0) {
        return $result->result_array();
    } else {
        return false;
    }
}

}
