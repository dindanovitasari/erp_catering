 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barangmasuk_model extends CI_Model {
	 public function get_all_barangmasuk()
	 {
		 $sql="SELECT 
		 barang_masuk.id,
		 barang.nama_brg,
		 barang_masuk.tgl_msk,
		 barang_masuk.jml_msk
		 FROM barang_masuk
		 INNER JOIN barang ON barang.id_brg=barang_masuk.id_brg
		 ";
		 return $this->db->query($sql);
	 }
	 public function insert($idbr,$tbm,$jbm)
	 {
		 $barangmasuk_id = intval(date('Hisd'));
		 $sql="INSERT INTO
			 barang_masuk(id,id_brg,tgl_msk,jml_msk)
			 VALUES
			 ('$barangmasuk_id','$idbr','$tbm','$jbm')";
		 $this->db->query($sql);
	 }
	 public function get_detail_barangmasuk($id)
	 {
		$sql="SELECT * FROM barang_masuk
		WHERE id='$id'";
		return $this->db->query($sql);
	 }
	 
	 function get_barang_masuk(){
	 	$sql = "SELECT * FROM barang";
	 	return $this->db->query($sql);
	 }
 }