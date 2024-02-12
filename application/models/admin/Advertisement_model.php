<?php
class advertisement_model extends CI_Model
{


	public function advertisement_data_submit($data,$image1,$image2,$image3,$image4)
	{
		$data = [
			'page_name' => $data['page_name'],
			'image1' => $image1,
            'image1url' => $data['image1url'],
            'image2' => $image2,
            'image2url' => $data['image2url'],
            'image3' => $image3,
            'image3url' => $data['image3url'],
            'image4' => $image4,
            'image4url' => $data['image4url'],
		];
		if ($this->db->insert('advertisement', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function advertisement_view()
	{
		$result = $this->db->query("SELECT * FROM advertisement");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function advertisement_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('advertisement');
	}


	public function advertisement_update_data($data,$image1,$image2,$image3,$image4)
	{
		$newdata = [
			'page_name' => $data['page_name'],
			'image1' => $image1,
            'image1url' => $data['image1url'],
            'image2' => $image2,
            'image2url' => $data['image2url'],
            'image3' => $image3,
            'image3url' => $data['image3url'],
            'image4' => $image4,
            'image4url' => $data['image4url'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('advertisement', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function advertisement_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `advertisement` where id=$id");
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

    public function advertisement($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `advertisement` where advertisement.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }
    public function advertisement_by_page_name($category_name)
{
    $this->db->select('advertisement.*');
    $this->db->from('advertisement');
    $this->db->where('advertisement.page_name', $category_name);

    $result = $this->db->get();

    if ($result->num_rows() > 0) {
        return $result->result_array();
    } else {
        return false;
    }
}

}
