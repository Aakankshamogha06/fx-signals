<?php
class charts_model extends CI_Model
{


	public function charts_data_submit($data,$image1,$image2,$images1,$images2)
	{
		$data = [
			'title' => $data['title'],
			'desc1' => $data['desc1'],
			'heading1' => $data['heading1'],
			'image1' => $image1,
            'imgname1' => $data['imgname1'],
            'image2' => $image2,
            'imgname2' => $data['imgname2'],
            'desc2' => $data['desc2'],
            'heading2' => $data['heading2'],
            'images1' => $images1,
            'images2' => $images2,
            'heading3' => $data['heading3'],
            'desc3' => $data['desc3'],
			
           
		];
		if ($this->db->insert('charts', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function charts_view()
	{
		$result = $this->db->query("SELECT * from charts ");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function charts_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('charts');
	}


	public function charts_update_data($data)
	{
		
		$newdata = [
			'title' => $data['title'],
			'desc1' => $data['desc1'],
			'heading1' => $data['heading1'],
			'image1' => $data['image1'],
            'imgname1' => $data['imgname1'],
            'image2' => $data['image2'],
            'imgname2' => $data['imgname2'],
            'desc2' => $data['desc2'],
            'heading2' => $data['heading2'],
            'images1' => $data['images1'],
            'images2' => $data['images2'],
            'heading3' => $data['heading3'],
            'desc3' => $data['desc3'],
            
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('charts', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function charts_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `charts` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function category_fetch()
	{

		$category_data = $this->db->query("SELECT * FROM `charts_category`");

		$fetch = $category_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $category_data->result_array();
		} else {
			return false;
		}
	}
	public function chart($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `charts` where charts.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }
}
