<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	public function index()
	{
		$data=array('isi' => 'admin/data_table');

		$this->load->view('adminlayout/wrapper',$data); 
	}
}
