<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back extends CI_Controller {
	public function index()
	{
		$this->load->view('back/login');
	}
	public function forgot_password(){

		$this->load->view('back/forgot-password');
	}
	public function register(){

		$this->load->view('back/register');
	}
}
