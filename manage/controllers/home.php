<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->library("cimongo/cimongo");
		//insert
		//$res = $this->cimongo->insert('test', array('id' => 1, 'str' => 'hello mongo'));
		//print_r($res);
		//get
		$query = $this->cimongo->where( array('id' => 1) )
		->update( 'test', array( 'str' => 'test' ) );
		print_r($query);
		exit;
		$this->load->view('home');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */