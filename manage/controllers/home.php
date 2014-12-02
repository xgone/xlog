<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->library("cimongo/cimongo");
		//insert
		$this->cimongo->insert('test', array('id' => 1, 'str' => 'hello mongo'));
		//get
		$query = $this->cimongo->limit(1)->get_where('test', array('id' => 1));
		print_r($query);
		$this->load->view('home');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */