<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}	
		$this->load->view('index');
	}
	public function logout(){
	$this->Auth_model->logout();
	redirect('auth/');
	}
}