<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	

	public function pagination() { 
		$limit_per_page=10;
		$start_index = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$total_records= $this->Blog_models->get_total();

		if($total_records > 0 ){
			$data['records'] = $this->Blog_models->get_all_artikel($limit_per_page,$start_index);
			$config['base_url'] = base_url().'index.php/blog/pagination';
			$config['total_rows'] = $total_records;
			$config['per_page'] = $limit_per_page;
			$config['uri_segment'] = 3;

			$this->pagination->initialize($config);

			$data['links'] = $this->pagination->create_links();
		}
		$this->load->view('Blog_list',$data);

	} 
	public function index()
	{
		$data['records'] = $this->Blog_models->getAll(); 
		$this->load->view('Blog_list',$data);  	
	}
	public function dataTable()
	{
		$data['records'] = $this->Blog_models->getAll(); 
		$this->load->view('blog_table',$data);  
	}
	public function byId($id){
		$data['records'] = $this->Blog_models->getOne($id); 
		$this->load->view('blog_view',$data); 
	}
	public function add_view() {
		$data['error'] = ""; 
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id', 'Id', 'required');
		$this->form_validation->set_rules('author', 'Author', 'required');
		$this->form_validation->set_rules('title', 'Title', 'required');
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('blog_add_view',$data); 
		}
		else
		{
			$config['upload_path']   = './uploads/';  
			$config['allowed_types'] = 'gif|jpg|png';  
			$config['max_size']      = 80000;  
			$config['max_width']     = 1024;  
			$config['max_height']    = 768;   
			$this->load->library('upload', $config); 
			$this->upload->initialize($config); 

			if ( ! $this->upload->do_upload('image_file')) { 
				$error = array('error' => $this->upload->display_errors());  
				$this->load->view('blog_add_view', $error);  
			} 

			else {  
				$dataUpload = $this->upload->data();  
				$data = array(  
					'id' => $this->input->post('id'), 
					'author' => $this->input->post('author'), 
					'date' => $this->input->post('date'), 
					'title' => $this->input->post('title'), 
					'content' => $this->input->post('content'), 
					'image_file' => $dataUpload['file_name']  
				);  
				$this->Blog_models->insert($data); 
				redirect('Blog');  
			} 
		}
	}

	public function add_action() {
		$config['upload_path']   = './uploads/'; 
		$config['allowed_types'] = 'gif|jpg|png'; 
		$config['max_size']      = 80000; 
		$config['max_width']     = 1024; 
		$config['max_height']    = 768;  
		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		if ( ! $this->upload->do_upload('image_file')) {
			$error = array('error' => $this->upload->display_errors()); 
			$this->load->view('blog_add_view', $error); 
		}

		else { 
			$dataUpload = $this->upload->data(); 
			$data = array( 
				'id' => $this->input->post('id'),
				'author' => $this->input->post('author'),
				'date' => $this->input->post('date'),
				'title' => $this->input->post('title'),
				'content' => $this->input->post('content'),
				'image_file' => $dataUpload['file_name'] 
			); 
			$this->Blog_models->insert($data);
			redirect('Blog'); 
		}
	}
	public function update_view($id) {
		$data['error'] = ""; 
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('id', 'Id', 'required');
		$this->form_validation->set_rules('author', 'Author', 'required');
		$this->form_validation->set_rules('title', 'Title', 'required');
		$data['records'] = $this->Blog_models->getOne($id);
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('blog_update_view',$data); 
		}
		else
		{
			$config['upload_path']   = './uploads/';  
			$config['allowed_types'] = 'gif|jpg|png';  
			$config['max_size']      = 80000;  
			$config['max_width']     = 1024;  
			$config['max_height']    = 768;   
			$this->load->library('upload', $config); 
			$this->upload->initialize($config); 

			if ( ! $this->upload->do_upload('image_file')) { 
				$data['error'] = $this->upload->display_errors();  
				$this->load->view('blog_update_view', $data);  
			}

			else {  
				$dataUpload = $this->upload->data();  
				$data = array(  
					'id' => $this->input->post('id'), 
					'author' => $this->input->post('author'), 
					'date' => $this->input->post('date'), 
					'title' => $this->input->post('title'), 
					'content' => $this->input->post('content'), 
					'image_file' => $dataUpload['file_name']  
				);  
				$old_id = $this->input->post('old_id');
				$this->Blog_models->update($data,$old_id); 
				redirect('Blog');  
			} 
		} 	
	}
	public function delete_action($id){
		$this->Blog_models ->delete($id);
		redirect('Blog');
	}
}