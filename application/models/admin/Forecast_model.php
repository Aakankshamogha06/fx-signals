<?php
class forecast_model extends CI_Model
{


	// public function forecast_data_submit($data,$forecast_image)
	// {
	// 	$data = [
	// 		'forecast_name' => $data['forecast_name'],
    //         'forecast_image' => $forecast_image,
    //         'forecast_type' => $data['forecast_type'],
    //         'description' => $data['description'],
    //         'long_description' => $data['long_description'],
	// 	];
	// 	if ($this->db->insert('forecast', $data)) {

	// 		return $data;
	// 	} else {
	// 		return false;
	// 	}
	// }

    public function forecast_data_submit($data, $forecast_images)
{
    $insert_data = array();
    foreach ($forecast_images as $image) {
        $insert_data[] = array(
            'forecast_name' => $data['forecast_name'],
            'forecast_image' => $image,
            'forecast_type' => $data['forecast_type'],
            'description' => $data['description'],
            'long_description' => $data['long_description']
        );
    }
    
    if (!empty($insert_data)) {
        $this->db->insert_batch('forecast', $insert_data);
        return true;
    } else {
        return false;
    }
}


	public function forecast_view()
	{
		$result = $this->db->query("SELECT * FROM forecast");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function forecast_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('forecast');
	}


	public function forecast_update_data($data,$forecast_image)
	{
		$newdata = [
			'forecast_name' => $data['forecast_name'],
            'forecast_image' => $forecast_image,
            'forecast_type' => $data['forecast_type'],
            'description' => $data['description'],
            'long_description' => $data['long_description'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('forecast', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function forecast_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `forecast` where id=$id");
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

    public function forecast($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `forecast` where forecast.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }
    public function forecast_by_type_name($category_name)
{
    $this->db->select('forecast.*');
    $this->db->from('forecast');
    $this->db->where('forecast.forecast_type', $category_name);

    $result = $this->db->get();

    if ($result->num_rows() > 0) {
        return $result->result_array();
    } else {
        return false;
    }
}

}



            