<?php
class broker_detail_model extends CI_Model
{


	public function broker_detail_data_submit($data,$broker_detail_image)
	{
		$data = [
			'website_url' => $data['website_url'],
			'broker_detail_image' => $broker_detail_image,
            'rating' => $data['rating'],
			'ranking' => $data['ranking'],
			'company_name' => $data['company_name'],
            'order_id' => $data['order_id'],
            'type' => $data['type'],
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


	public function broker_detail_update_data($data,$broker_detail_image)
	{
		$newdata = [
			'website_url' => $data['website_url'],
			'broker_detail_image' => $broker_detail_image,
            'rating' => $data['rating'],
			'ranking' => $data['ranking'],
			'company_name' => $data['company_name'],
            'order_id' => $data['order_id'],
            'type' => $data['type'],
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


	public function role_fetch()
	{

		$role_data = $this->db->query("SELECT * FROM `blog`");

		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();
		} else {
			return false;
		}
	}

    public function blog_fetch()
	{

		$blog_data = $this->db->query("SELECT * FROM `blog_category`");

		$fetch = $blog_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $blog_data->result_array();
		} else {
			return false;
		}
	}

    public function broker_detail($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `broker_detail` where broker_detail.id=$id ");

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
