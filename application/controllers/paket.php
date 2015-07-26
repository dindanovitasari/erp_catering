  <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paket extends CI_Controller {
	public function index()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}	
		$data['paket']=$this->Paket_model->get_paket();
		$this->load->view('paket/index',$data);
	}
	public function add_form()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$data['paket'] = $this->Paket_model->get_paket_menu();
		$this->load->view('paket/add', $data);
	}
	public function add_paket()
	{	
		$this->Paket_model->save();
		redirect('paket/');
	}
	public function update()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$id = $this->uri->segment(3);
		$data['detail']=$this->Paket_model->get_paket_by_id($id);
		$data['paket']=$this->Paket_model->get_paket_menu($id);
		$this->load->view('paket/update', $data);
	}
	public function update_paket()
	{
		$this->Paket_model->update();
		redirect('paket/');
	}
	public function delete_paket($id_paket, $id_menu)
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$this->Paket_model->delete($id_paket, $id_menu);
		redirect('paket/');
	}
}