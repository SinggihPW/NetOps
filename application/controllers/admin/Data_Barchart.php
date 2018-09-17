<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Barchart extends CI_Controller {

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
	 parent::__Construct();
	  $this->load->database();
	  $this->load->model('M_data');
	}

	/**public function index() {
	  $this->data['barchart'] = $this->M_data->getM_data();
	  $this->load->view('barchart', $this->data);
	}*/

	public function index()
	{
		$data=array('isi' => 'admin/barchart');

		$this->load->view('adminlayout/wrapper',$data);
	}

	/**function barchart() {
	    $this->load->model('M_data');
		$file['barcharts'] = $this->M_data->get_data();
		$this->load->view('adminlayout/wrapper',$file);*/
}
