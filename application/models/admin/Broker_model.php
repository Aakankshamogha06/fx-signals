<?php
class broker_model extends CI_Model
{


	public function broker_data_submit($data,$broker_image)
	{
		$data = [
			'website_url' => $data['website_url'],
			'broker_image' => $broker_image,
            'rating' => $data['rating'],
            'order_id' => $data['order_id'],
            'type' => $data['type'],
		];
		if ($this->db->insert('broker', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function broker_view()
	{
		$result = $this->db->query("SELECT * FROM broker");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function broker_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('broker');
	}


	public function broker_update_data($data,$broker_image)
	{
		$newdata = [
			'website_url' => $data['website_url'],
			'broker_image' => $broker_image,
            'rating' => $data['rating'],
            'order_id' => $data['order_id'],
            'type' => $data['type'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('broker', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function broker_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `broker` where id=$id");
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

    public function broker($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `broker` where broker.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }
    public function broker_by_type_name($category_name)
{
    $this->db->select('broker.*');
    $this->db->from('broker');
    $this->db->where('broker.type', $category_name);

    $result = $this->db->get();

    if ($result->num_rows() > 0) {
        return $result->result_array();
    } else {
        return false;
    }
}

}
