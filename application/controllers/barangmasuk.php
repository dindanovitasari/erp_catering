 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barangmasuk extends CI_Controller {
	public function index()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}	
		$data['barang_masuk']=$this->Barangmasuk_model->get_all_barangmasuk();
		$this->load->view('barangmasuk/index',$data);
	}
	public function add_form()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$data['barang_masuk'] = $this->Barangmasuk_model->get_barang_masuk();
		$this->load->view('barangmasuk/add', $data);
	}
	public function add_barangmasuk()
	{	
		$idbr=$this->input->post('id_brg');
		$tbm=$this->input->post('tgl_msk');
		$jbm=$this->input->post('jml_msk');
		$this->Barangmasuk_model->insert($idbr,$tbm,$jbm);
		redirect('Barangmasuk/');
	}
	
}