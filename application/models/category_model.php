<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category_model extends CI_Model{



    public function tambah()
    {
        $data = $this->input->post();
        if ($this->db->insert("category", $data)) { 
            return true; 
         } 
    }

    public function getData()
    {
    //$get eksekusi fungsi select
       //hasil eksesusi = "select * from users
       $query = $this->db->get('category');
       //untuk merubah table menjadi array
        return $query->result_array();
    }

    public function update($data,$id)
    {
    	 $this->db->set($data); 
         $this->db->where("cat_id", $id); 
         $this->db->update("category", $data); 
    }
    public function delete($id)
    {
    	$this->db->where('cat_id',$id);
    	$this->db->delete('category');
    }
}
    