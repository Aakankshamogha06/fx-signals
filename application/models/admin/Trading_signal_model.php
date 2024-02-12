<?php
class news_model extends CI_Model
{


	public function news_data_submit($data,$news_image)
	{
		$data = [
			'entry_price' => $data['entry_price'],
			'package' => $data['package'],
			'news_desc' => $data['news_desc'],
			'category' => $data['category'],
			'sub_category' => $data['sub_category'],
			'news_image' => $news_image,
            'author' => $data['author'],
			'news_type' => $data['news_type'],
			'news_package' => $data['news_package'],
		];
		if ($this->db->insert('news', $data)) {

			return $data;
		} else {
			return false;
		}
	}

	public function news_view()
	{
		$result = $this->db->query("SELECT * ,(SELECT name from news_category WHERE news_category.id = news.category) as category,
		(SELECT pair_name from currency_pair WHERE currency_pair.id = news.sub_category)as sub_category ,
		(SELECT news_type_name from news_type WHERE news_type.id = news.news_type) as news_type,
		(SELECT package_name from package WHERE package.id = news.news_package) as news_package
		 FROM `news` ORDER BY `publish_date` DESC; ");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	public function news_delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('news');
	}


	public function news_update_data($data,$news_image)
	{
		
		$newdata = [
			'title' => $data['title'],
			'publish_date' => $data['publish_date'],
			'news_desc' => $data['news_desc'],
			'category' => $data['category'],
			'sub_category' => $data['sub_category'],
			'news_image' => $news_image,
            'author' => $data['author'],
            'news_type' => $data['news_type'],
			'news_package' => $data['news_package'],
		];
		$this->db->where('id', $data['id']);
		if ($this->db->update('news', $newdata)) {

			return $newdata;
		} else {
			return false;
		}
		
	}


	public function news_edit($id)
	{

		$result = $this->db->query("SELECT * FROM `news` where id=$id");
		if ($result->num_rows() > 0) {
			return $result->result();
		} else {
			return 0;
		}
	}


	
}
