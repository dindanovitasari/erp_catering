<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftarbarang extends CI_Controller {
	public function index()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}	
		$data['barang']=$this->Daftarbarang_model->get_all_barang();
		$this->load->view('daftarbarang/index',$data);
	}
	public function add_form()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$data['barang'] = $this->Daftarbarang_model->get_barang();
		$this->load->view('daftarbarang/add', $data);
	}
	public function add_barang()
	{	
		$idb=$this->input->post('id_jns_brg');
		$nb=$this->input->post('nama_brg');
		$jb=$this->input->post('jumlah_brg');
		$this->Daftarbarang_model->insert($idb,$nb,$jb);
		redirect('daftarbarang/');
	}
	public function update()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$id = $this->uri->segment(3);
		$data['jenis']=$this->Daftarbarang_model->get_barang();
		$data['barang']=$this->Daftarbarang_model->get_detail_barang($id);
		$this->load->view('daftarbarang/update', $data);
	}
	public function update_barang()
	{
		$idbr=$this->input->post('id_brg');
		$idb=$this->input->post('id_jns_brg');
		$nb=$this->input->post('nama_brg');
		$jb=$this->input->post('jumlah_brg');
		$this->Daftarbarang_model->update($idbr,$idb,$nb,$jb);
		redirect('daftarbarang/');
	}
	public function delete_barang()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$id = $this->uri->segment(3);
		$this->Daftarbarang_model->delete($id);
		redirect('daftarbarang/');
	}
}