<?php
class words extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('word_model');
	}
	
	public function index()
	{
		$this->load->view('view_header');
		$data['words'] = $this->word_model->getWords();
		
		$this->load->view("words/index", $data);
	}

	public function create()
	{
		$newWordText = $this->input->post('newWordTextBox');
		$categoryId = $this->input->post('categoryId');
		$lastId = $this->word_model->createWord($newWordText,$categoryId);
		$this->load->helper('url');
		redirect('/categories/show/'.$categoryId.'');
	}

	public function delete()
	{
		$wordId = $this->uri->segment(3);
		$this->word_model->deleteword($wordId);
		$categoryId = $this->uri->segment(4);
		$this->load->helper('url');
		redirect('/categories/show/'.$categoryId);
	}

}
?>





