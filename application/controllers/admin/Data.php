<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __Construct(){
	  parent::__Construct ();
	  $this->load->database();
	  $this->load->model('M_data');
	}

	public function index()
	{
		$data=array('isi' => 'admin/data_table');
		$this->load->view('adminlayout/wrapper',$data);
    	$this->data['cpu_posts'] = $this->M_data->get_datas();
		$this->load->view('admin/admin', $this->data);
	}

	/*    $this->load->model('M_data');
		$file['admin'] = $this->M_data->get_data();
		$this->load->view('adminlayout/wrapper',$file);
	}*/
}