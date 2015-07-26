  <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barangkeluar extends CI_Controller {
	public function index()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}	
		$data['barang_keluar']=$this->Barangkeluar_model->get_all_barangkeluar();
		$this->load->view('barangkeluar/index',$data);
	}
	public function add_form()
	{
		if($this->Auth_model->check_session()== FALSE){redirect('auth/');}
		$data['barang_keluar'] = $this->Barangkeluar_model->get_barang_keluar();
		$this->load->view('barangkeluar/add', $data);
	}
	public function add_barangkeluar()
	{	
		$idbr=$this->input->post('id_brg');
		$tbm=$this->input->post('tgl_klr');
		$jbm=$this->input->post('jml_klr');
		$this->Barangkeluar_model->insert($idbr,$tbm,$jbm);
		redirect('Barangkeluar/');
	}
	
}