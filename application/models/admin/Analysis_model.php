<?php
class analysis_model extends CI_Model
{


	public function analysis_data_submit($data,$analysis_image)
	{
		$data = [
			
			'analysis_image' => $analysis_image,
            'date' => $data['date'],
            'author' => $data['author'],
            'heading' => $data['heading'],
            'description' => $data['description'],
		];
		if ($this->db->insert('analysis', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function analysis_view()
	{
		$result = $this->db->query("SELECT * FROM `analysis` ORDER BY `date` DESC;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function analysis_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('analysis');
	}


	public function analysis_update_data($data,$analysis_image)
	{
		echo ("hi");
		$newdata = [
            
			'analysis_image' => $analysis_image,
            'date' => $data['date'],
            'author' => $data['author'],
            'heading' => $data['heading'],
            'description' => $data['description'],
		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('analysis', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function analysis_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `analysis` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}

	public function category_fetch()
	{

		$category_data = $this->db->query("SELECT * FROM `analysis_category`");

		$fetch = $category_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $category_data->result_array();
		} else {
			return false;
		}
	}

	public function analysis($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `analysis` where analysis.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }

	public function analysis_by_type_name($type_name)
{
    $this->db->select('analysis.*, 
        (SELECT name FROM news_category WHERE news_category.id = analysis.type) AS type'
    );
    $this->db->from('analysis');
	$this->db->join('news_category', 'news_category.id = analysis.type');
    $this->db->where('news_category.name', $type_name);
    $result = $this->db->get();

    if ($result->num_rows() > 0) {
        return $result->result_array();
    } else {
        return false;
    }
}
}
?>