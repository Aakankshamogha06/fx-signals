<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Imagebank_model extends CI_Model
{
    public function imagebank_data_submit($data, $images)
    {
        $data = [
            'images' => $images,
			// 'source' =>$data['source'],
        ];
        if ($this->db->insert('imagebank', $data)) {
            return $data;
        } else {
            return false;
        }
    }

	public function imagebank_view()
	{
		$result = $this->db->query("SELECT * FROM `imagebank`;");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}
    public function get_server_images()
    {
        $directory = './uploads/';

        $images = [];

        if (is_dir($directory)) {
            if ($dh = opendir($directory)) {
                while (($file = readdir($dh)) !== false) {
                    if ($file != "." && $file != "..") {
                        $images[] = $file;
                    }
                }
                closedir($dh);
            }
        }

        return $images;
    }
	public function imagebank_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('imagebank');
	}
}

