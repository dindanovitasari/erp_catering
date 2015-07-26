<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier extends CI_Controller {
	public function index()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}	
		$data['supplier']=$this->Supplier_model->get_all_supplier();
		$this->load->view('supplier/index',$data);
	}
	public function add_form()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$data['barang']=$this->Supplier_model->get_barang();
		$this->load->view('supplier/add',$data);
	}
	public function add_supplier()
	{	
		$ns=$this->input->post('nama_supp');
		$as=$this->input->post('alamat_supp');
		$ts=$this->input->post('tlp_supp');
		$ib=$this->input->post('id_brg');
		$hs=$this->input->post('harga_supp');
		$this->Supplier_model->insert($ns,$as,$ts,$ib,$hs);
		redirect('supplier/');
	}
	public function update()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$id = $this->uri->segment(3);
		$data['barang']=$this->Supplier_model->get_barang();
		$data['supplier']=$this->Supplier_model->get_detail_supplier($id);
		$this->load->view('supplier/update', $data);
	}
	public function update_supplier()
	{
		$ids=$this->input->post('id_supp');
		$ns=$this->input->post('nama_supp');
		$as=$this->input->post('alamat_supp');
		$ts=$this->input->post('tlp_supp');
		$ib=$this->input->post('id_brg');
		$hs=$this->input->post('harga_supp');
		$this->Supplier_model->update($ids,$ns,$as,$ts,$ib,$hs);
		redirect('supplier/');
	}
	public function delete_supplier()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$id = $this->uri->segment(3);
		$this->Supplier_model->delete($id);
		redirect('supplier/');
	}
}