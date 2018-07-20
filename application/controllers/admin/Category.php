<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
	function __construct() {
     parent::__construct();
      //load model Customer_m
      $this->load->model('category_model');
      //load helper form 
      $this->load->helper('form','url');  
   }

	 public function tambah() 
	{
		// Judul Halaman
		$data['page_title'] = 'Buat Kategori Baru';

		// Kita butuh helper dan library berikut
		$this->load->helper('form');
		$this->load->library('form_validation');

		// Form validasi untuk Nama Kategori
		$this->form_validation->set_rules(
			'cat_name',
			'Nama Kategori',
			'required|is_unique[categories.cat_name]',
			array(
				'required' => 'Isi %s donk, males amat.',
				'is_unique' => 'Judul <strong>' . $this->input->post('cat_name') . '</strong> sudah ada bosque.'
			)
		);

		if($this->form_validation->run() === FALSE){
			$this->load->view('admin/category/tambah', $data);
		} 
		else {
			$this->category_model->tambah();
			redirect('admin/Category');
		}
	}
	public function index()
	{
		$data['getData'] = $this->category_model->getData();
		$this->load->view('admin/category/category.php',$data);
	}
	public function update($id)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		// Form validasi untuk Nama Kategori
		$this->form_validation->set_rules(
			'cat_name',
			'Nama Kategori',
			'required|is_unique[category.cat_name]',
			array(
				'required' => 'Isi %s donk, males amat.',
				'is_unique' => 'Judul <strong>' . $this->input->post('cat_name') . '</strong> sudah ada bosque.'
			)
		);
		$data['update'] = $this->category_model->getData($id)[0];
		if($this->form_validation->run() === FALSE){
	
			$this->load->view('admin/category/update', $data);
		
		} 
		else {
			$set = $this->input->post();
			$this->category_model->update($set,$id);
			redirect('admin/Category');
		}
	}
	public function delete($id)
	{
		$this->category_model->delete($id);
		redirect('admin/Category');
	}
}