<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pembelian extends CI_Controller {
	public function index()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}	
		$data['pembelian']=$this->Pembelian_model->get_all_pembelian();
		$this->load->view('pembelian/index',$data);
	}
	public function add_form()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$data['supplier'] = $this->Pembelian_model->get_supplier();
		$data['minta']=$this->Pembelian_model->get_minta();
		$this->load->view('pembelian/add',$data);
	}
	public function add_pembelian()
	{	
		$ip=$this->input->post('id_pesan');
		$is=$this->input->post('id_supp');
		$tpb=$this->input->post('tgl_psn_brg');
		$this->Pembelian_model->insert($ip,$is,$tpb);
		redirect('pembelian/');
	}
	
}