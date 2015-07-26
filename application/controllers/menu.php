 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu extends CI_Controller {
	public function index()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}	
		$data['menu']=$this->Menu_model->get_menu();
		$this->load->view('menu/index',$data);
	}
	public function add_form()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$data['menu'] = $this->Menu_model->get_menu_barang();
		$this->load->view('menu/add', $data);
	}
	public function add_menu()
	{	
		$this->Daftarbarang_model->save();
		redirect('menu/');
	}
	public function update()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$id = $this->uri->segment(3);
		$data['detail']=$this->Menu_model->get_menu_by_id($id);
		$data['menu'] = $this->Menu_model->get_menu_barang();
		$this->load->view('menu/update', $data);
	}
	public function update_menu()
	{
		$this->Menu_model->update();
		redirect('menu/');
	}
	public function delete_menu($id_menu, $id_brg)
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$this->Menu_model->delete($id_menu, $id_brg);
		redirect('menu/');
	}
}