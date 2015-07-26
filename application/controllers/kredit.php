<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kredit extends CI_Controller {
	public function index()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}	
		$data['kredit']=$this->Kredit_model->get_all_kredit();
		$this->load->view('kredit/index',$data);
	}
	public function add_form()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$data['pemesanan'] = $this->Kredit_model->get_pemesanan();
		$this->load->view('kredit/add',$data);
	}
	public function add_kredit()
	{	
		$tgk=$this->input->post('tgl_kredit');
		$idp=$this->input->post('id_psn');
		$this->Kredit_model->insert($tgk,$idp);
		redirect('kredit/');
	}
	public function update()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$id = $this->uri->segment(3);
		$data['pemesanan'] = $this->Kredit_model->get_pemesanan();
		$data['kredit']=$this->Kredit_model->get_detail_kredit($id);
		$this->load->view('kredit/update', $data);
	}
	public function update_kredit()
	{
		$idk=$this->input->post('id_kredit');
		$tgk=$this->input->post('tgl_kredit');
		$idp=$this->input->post('id_psn');
		$this->Kredit_model->update($idk,$tgk,$idp);
		redirect('kredit/');
	}
	public function delete_kredit()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$id = $this->uri->segment(3);
		$this->Kredit_model->delete($id);
		redirect('kredit/');
	}
}