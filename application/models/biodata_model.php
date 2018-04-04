<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class biodata_model extends CI_Model {

	public function getQueryArray()
	{
		$query = $this->db->query("select * from biodata");
		return $query->result_array();
	}
	public function getQueryObject()
	{
		$query = $this->db->query("select * from biodata");
		return $query->result();
	}
	public function getBuildArray()
	{
		$query = $this->db->get("biodata");
		return $query->result_array();
	}
	public function getBuildObject()
	{
		$query = $this->db->get("biodata");
		return $query->result();
	}
}
