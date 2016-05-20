<?php
class Categories extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('category_model');
	}
	
	public function index()
	{
		$this->load->view('view_header');
		$data['categories'] = $this->category_model->getCategories();
		
		$this->load->view("categories/index", $data);
 	}
	
	public function create()
	{
		$newCategoryName = $this->input->post('newCategoryTextBox');
		
		$lastId = $this->category_model->createCategory($newCategoryName);

		$this->load->helper('url');
		redirect('/categories');
	}

	public function delete()
	{
		$categoryId = $this->uri->segment(3);
		$this->category_model->deleteCategory($categoryId);

		$this->load->helper('url');
		redirect('/categories');
	}

	public function show()
	{
		$this->load->view('view_header');
		$categoryId = $this->uri->segment(3);
		$data['words'] = $this->category_model->getShow($categoryId);
		$data['info']= $this->category_model->getInfoById($categoryId);
		$this->load->view("categories/show", $data);
	}
}
?>









