<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogIn extends CI_Controller {

	public function index()
	{
		$data=array('isi' => 'LogIn/Login');

		$this->load->view('adminlayout/wrapper',$data); 

	}
?>


