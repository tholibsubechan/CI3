<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function index() { 
         
         $data['records'] = $this->Blog_models->getAll(); 
         $this->load->view('Blog_list',$data); 
      } 
  
 	 public function byId($id){
  		 $data['records'] = $this->Blog_models->getOne($id); 
         $this->load->view('blog_view',$data); 
  	}
      public function add_view() {
         $this->load->view('blog_add_view'); 
      } 
  
     public function add_action() { 
         $data = array( 
            'id' => $this->input->post('id'),
            'author' => $this->input->post('author'),
            'date' => $this->input->post('date'),
            'title' => $this->input->post('title'),
            'content' => $this->input->post('content'),
            'image_file' => $this->input->post('image_file') 
         ); 
         $this->Blog_models->insert($data); 
         redirect("Blog");
      }
}