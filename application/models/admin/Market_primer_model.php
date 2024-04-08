<?php
class market_primer_model extends CI_Model
{


	public function market_primer_data_submit($data,$pdf)
	{
		$data = [
			'date' => $data['date'],
			'pdf' => $pdf,
		];
		if ($this->db->insert('market_primer', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function market_primer_view()
	{
		$result = $this->db->query("SELECT * FROM market_primer");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function market_primer_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('market_primer');
	}


	public function market_primer_update_data($data,$pdf)
	{
		$newdata = [
			'date' => $data['date'],
			'pdf' => $pdf,
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('market_primer', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function market_primer_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `market_primer` where id=$id");
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

    public function market_primer()
    {

        $assign_data = $this->db->query("SELECT * FROM market_primer WHERE DATE(date) = CURDATE();");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }
    public function market_primer_by_date($category_name)
{
    $this->db->select('market_primer.*');
    $this->db->from('market_primer');
    $this->db->where('market_primer.date', $category_name);

    $result = $this->db->get();

    if ($result->num_rows() > 0) {
        return $result->result_array();
    } else {
        return false;
    }
}

}
