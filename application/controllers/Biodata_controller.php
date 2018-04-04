<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Biodata_controller extends CI_Controller {

	public function index()
	{
		$data['biodata_query_array'] = $this->biodata_model->getQueryArray();
		$data['biodata_query_object'] = $this->biodata_model->getQueryObject();
		$data['biodata_builder_array'] = $this->biodata_model->getBuildArray();
		$data['biodata_builder_object'] = $this->biodata_model->getBuildObject();

		$this->load->view('biodata', $data);
	}
}
