<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mintabarang extends CI_Controller {
	public function index()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}	
		$data['permintaan_barang']=$this->Mintabarang_model->get_all_barang();
		$this->load->view('mintabarang/index',$data);
	}
	public function add_form()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$data['permintaan_barang'] = $this->Mintabarang_model->get_barang();
		$this->load->view('mintabarang/add', $data);
	}
	public function add_barang()
	{	
		$idbr=$this->input->post('id_brg');
		$jps=$this->input->post('jumlah_psn');
		$tps=$this->input->post('tgl_psn_brg');		
		
		$this->Mintabarang_model->insert($idbr,$jps,$tps);
		redirect('mintabarang/');
	}
	public function update()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$id = $this->uri->segment(3);
		$data['permintaan_barang']=$this->Mintabarang_model->get_detail_barang($id);
		$data['permintaan_barang_all'] = $this->Mintabarang_model->get_barang();
		$this->load->view('mintabarang/update', $data);
	}
	public function update_barang()
	{
		$idbr=$this->input->post('id_brg');
		$jps=$this->input->post('jumlah_psn');
		$tps=$this->input->post('tgl_psn_brg');
		$this->Daftarbarang_model->update($idbr,$jps,$tps);
		redirect('mintabarang/');
	}
	public function delete_barang()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$id = $this->uri->segment(3);
		$this->Mintabarang_model->delete($id);
		redirect('mintabarang/');
	}
}