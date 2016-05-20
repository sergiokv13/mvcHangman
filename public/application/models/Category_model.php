<?php
class Category_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function getCategories()
	{
		$query = $this->db->get('category');
		return $query->result_array();
	}
	
	public function createCategory($categoryName)
	{
		$data = array(
		   'name' => $categoryName
		);
		
		$this->db->insert('category', $data);
		return $this->db->insert_id();
	}

	public function deleteCategory($categoryId)
	{
		$this->db->where('id', $categoryId);
      	$this->db->delete('category'); 
      	$this->db->where('categoryId', $categoryId);
      	$this->db->delete('word');
	}
	public function getShow($categoryId)
	{
       $data = $this->db->where('categoryId', $categoryId)->get('word')->result_array();
       return $data;
	}

	public function getInfoById($categoryId)
	{
		$predata = $this->db->where('id', $categoryId)->get('category')->result_array();
		$data = array_values($predata)[0]; 
       	return $data;
	}
	
}
?>









