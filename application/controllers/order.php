<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Order extends CI_Controller {
	public function index()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}	
		$data['order']=$this->Order_model->get_all_pesan();
		$this->load->view('order/index',$data);
	}
	public function add_form()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$data['paket'] = $this->Order_model->get_paket();
		$this->load->view('order/add', $data);
	}
	public function add_order()
	{	
		$ip=$this->input->post('id_paket');
		$nc=$this->input->post('nama_custom');
		$ac=$this->input->post('alamat_custom');
		$tc=$this->input->post('tlp_custom');
		$tpc=$this->input->post('tgl_psn_custom');
		$tac=$this->input->post('tgl_acara_custom');
		$this->Order_model->insert($ip,$nc,$ac,$tc,$tpc,$tac);
		redirect('order/');
	}
	public function update()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$id = $this->uri->segment(3);
		$data['paket'] = $this->Order_model->get_paket();
		$data['order']=$this->Order_model->get_detail_order($id);
		$this->load->view('order/update', $data);
	}
	public function update_order()
	{
		$io=$this->input->post('id_custom');
		$ip=$this->input->post('id_paket');
		$nc=$this->input->post('nama_custom');
		$ac=$this->input->post('alamat_custom');
		$tc=$this->input->post('tlp_custom');
		$tpc=$this->input->post('tgl_psn_custom');
		$tac=$this->input->post('tgl_acara_custom');
		$this->Order_model->update($io,$ip,$nc,$ac,$tc,$tpc,$tac);
		redirect('order/');
	}
	public function delete_order()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$id = $this->uri->segment(3);
		$this->Order_model->delete($id);
		redirect('order/');
	}
}