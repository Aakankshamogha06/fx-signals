<?php
class upload_image_model extends CI_Model
{


	public function upload_image_data_submit($insert_data, $images,$folder_name)
{
    $insert_data = [];
    foreach ($images as $image) {
        $insert_data[] = [
            'images' => $image,
			'folder_name' => $folder_name,
        ];
    }
    
    return $this->db->insert_batch('upload_image', $insert_data);
}
	public function upload_image_view()
	{
		$result = $this->db->query("SELECT * FROM upload_image");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}
// In your upload_image_model.php


    // Other methods...

	public function get_folder_name()
	{
		$query = $this->db->select('folder_name')->from('upload_image')->get();
		if ($query->num_rows() > 0) {
			// Debugging: Print the retrieved folder name
			$folder_name = $query->row()->folder_name;
			echo "Folder Name: " . $folder_name; // Debugging code
			return $folder_name;
		} else {
			echo "No folder name found"; // Debugging code
			return ''; // Default folder name if none found
		}
	}
	



	public function upload_image_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('upload_image');
	}


	public function upload_image_update_data($data,$images)
	{
		$newdata = [
			'folder_name' => $data['folder_name'],
			'images' => $images,
            
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('upload_image', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
	}


	public function upload_image_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `upload_image` where id=$id");
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

    public function upload_image($id)
    {

        $assign_data = $this->db->query("SELECT * FROM `upload_image` where upload_image.id=$id ");

        $fetch = $assign_data->num_rows();
        if ($fetch > 0) {
            return $fetch = $assign_data->result_array();
        } else {
            return false;
        }
    }
    public function upload_image_by_folder_name($category_name)
{
    $this->db->select('upload_image.*');
    $this->db->from('upload_image');
    $this->db->where('upload_image.folder_name', $category_name);

    $result = $this->db->get();

    if ($result->num_rows() > 0) {
        return $result->result_array();
    } else {
        return false;
    }
}

}
