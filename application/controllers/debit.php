<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Debit extends CI_Controller {
	public function index()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}	
		$data['debit']=$this->Debit_model->get_all_debit();
		$this->load->view('debit/index',$data);
	}
	public function add_form()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$data['customer'] = $this->Debit_model->get_customer();
		$this->load->view('debit/add', $data);
	}
	public function add_debit()
	{	
		$tgd=$this->input->post('tgl_debit');
		$idc=$this->input->post('id_customer');
		$this->Debit_model->insert($tgd,$idc);
		redirect('debit/');
	}
	public function update()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$id = $this->uri->segment(3);
		$data['customer'] = $this->Debit_model->get_customer();
		$data['debit']=$this->Debit_model->get_detail_debit($id);
		$this->load->view('debit/update', $data);
	}
	public function update_debit()
	{
		$idd=$this->input->post('id_debit');
		$tgd=$this->input->post('tgl_debit');
		$idc=$this->input->post('id_customer');
		$idp=$this->input->post('id_paket');
		$this->Debit_model->update($idd,$tgd,$idc,$idp);
		redirect('debit/');
	}
	public function delete_debit()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$id = $this->uri->segment(3);
		$this->Debit_model->delete($id);
		redirect('debit/');
	}
}