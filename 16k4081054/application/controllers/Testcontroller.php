<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Testcontroller extends CI_Controller {

	public function index()
	{
		$this->load->view('testview');
	}
	public function xinchao()
	{
		$this->load->view('hello');
	}
}
