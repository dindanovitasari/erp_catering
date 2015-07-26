<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jenisbarang_model extends CI_Model {
	 public function get_all_jenis_barang()
	 {
		 $sql="SELECT  * FROM jenis_barang";
		 return $this->db->query($sql);
	 }
	 
	public function insert($kjb)
	 {
	 	 $jenis_barang_id = intval(date('Hisd'));
		 $sql="INSERT INTO
			 jenis_barang(id_jns_brg,ket_jns_brg)
			 VALUES
			 ('$jenis_barang_id','$kjb')";
		 $this->db->query($sql);
	 }
	 public function update($ijb,$kjb)
	 {
		 $sql="UPDATE jenis_barang
			 SET ket_jns_brg='$kjb'
			 WHERE id_jns_brg='$ijb'";
			 
		 $this->db->query($sql);
	 }

	 public function get_detail_jenis_barang($id)
	 {
		$sql="SELECT * FROM jenis_barang
		WHERE id_jns_brg='$id'";
		return $this->db->query($sql);
	 }
	 
	 	 

	 
	


}
?>