<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
		$this->load->view('auth');
	}
	public function login()
	{
		$u=$this->input->post('username');
		$p=$this->input->post('password');	
		$this->Auth_model->cek($u,$p);	
	}
}