<?php
class sub_menu_model extends CI_Model
{


	public function sub_menu_data_submit($data)
	{
		$data = [
			'menu_id' => $data['menu_id'],
			'sub_menu' => $data['sub_menu'],
			
		];
		if ($this->db->insert('sub_menu', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function sub_menu_view()
	{
		$result = $this->db->query("SELECT *,(SELECT menu_name from menu where menu.id = sub_menu.menu_id)AS menu_id FROM `sub_menu`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function sub_menu_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('sub_menu');
	}


	public function sub_menu_update_data($data)
	{
		echo ("hi");
		$newdata = [
			'menu_id' => $data['menu_id'],
			'sub_menu' => $data['sub_menu'],
			
		];
		print_r($newdata);
		$this->db->where('id', $data['id']);
		if ($this->db->update('sub_menu', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function sub_menu_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `sub_menu` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function role_fetch()
	{

		$role_data = $this->db->query("SELECT * FROM `menu`");

		$fetch = $role_data->num_rows();
		if ($fetch > 0) {
			return $fetch = $role_data->result_array();
		} else {
			return false;
		}
	}
	
	public function get_submenu($menu_id) {
        $this->db->where('menu_id', $menu_id);
        $query = $this->db->get('sub_menu');
        return $query->result_array();
    }
}
?>