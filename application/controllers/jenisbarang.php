<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jenisbarang extends CI_Controller {
	public function index()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}	
		$data['jenis_barang']=$this->Jenisbarang_model->get_all_jenis_barang();
		$this->load->view('jenisbarang/index',$data);
	}
	public function add_form()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$this->load->view('jenisbarang/add');
	}
	public function add_jenis_barang()
	{	
		$kjb=$this->input->post('ket_jns_brg');
		$this->Jenisbarang_model->insert($kjb);
		redirect('jenisbarang/');
	}
	public function update()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$id = $this->uri->segment(3);
		$data['detail']=$this->Jenisbarang_model->get_detail_jenis_barang($id);
		$this->load->view('jenisbarang/update', $data);
	}
	public function update_jenis_barang()
	{
		$ijb=$this->input->post('id_jns_brg');
		$kjb=$this->input->post('ket_jns_brg');
		$this->Jenisbarang_model->update($ijb,$kjb);
		redirect('jenisbarang/');
	}

	}
