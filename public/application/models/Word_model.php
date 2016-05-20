<?php
class Word_model extends CI_Model
{
	public function __construct()
	{
		$this->load->database();
	}
	
	public function getWords()
	{
		$query = $this->db->get('word');
		return $query->result_array();
	}
	
	public function createWord($wordText,$categoryId)
	{
		$data = array(
		   'text' => $wordText,
		   'categoryId' => $categoryId
		);
		
		$this->db->insert('word', $data);
		return $this->db->insert_id();
	}

	public function deleteWord($wordId)
	{
		$this->db->where('id', $wordId);
      	$this->db->delete('word'); 
	}
}
?>



