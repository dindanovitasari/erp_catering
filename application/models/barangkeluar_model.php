 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barangkeluar_model extends CI_Model {
	 public function get_all_barangkeluar()
	 {
		 $sql="SELECT  
		 barang_keluar.id,
		 barang.nama_brg,
		 barang_keluar.tgl_klr,
		 barang_keluar.jml_klr
		 FROM barang_keluar
		 INNER JOIN barang ON barang.id_brg=barang_keluar.id_brg
		 ";
		 return $this->db->query($sql);
	 }
	 public function insert($idbr,$tbk,$jbk)
	 {
		 $barangkeluar_id = intval(date('Hisd'));
		 $sql="INSERT INTO
			 barang_keluar(id,id_brg,tgl_klr,jml_klr)
			 VALUES
			 ('$barangkeluar_id','$idbr','$tbk','$jbk')";
		 $this->db->query($sql);
	 }
	 public function get_detail_barangkeluar($id)
	 {
		$sql="SELECT * FROM barang_keluar
		WHERE id='$id'";
		return $this->db->query($sql);
	 }
	 
	 function get_barang_keluar(){
	 	$sql = "SELECT * FROM barang";
	 	return $this->db->query($sql);
	 }
 }