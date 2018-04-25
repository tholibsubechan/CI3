<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class category extends CI_Controller {

	 public function create() 
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
	
			$this->load->view('cat_create', $data);
		
		} 
		else {
			$this->category_model->create_category();
			redirect('category');
		}
	}
}