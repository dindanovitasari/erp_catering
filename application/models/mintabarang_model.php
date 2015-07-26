<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mintabarang_model extends CI_Model {
	 public function get_all_barang()
	 {
		 $sql="SELECT 
		 permintaan_barang.id_pesan,
		 barang.nama_brg,
		 permintaan_barang.jumlah_psn,
		 permintaan_barang.tgl_psn_brg
		 FROM permintaan_barang
		 INNER JOIN barang ON barang.id_brg=permintaan_barang.id_brg
		 ";
		 return $this->db->query($sql);
	 }
	 
		 public function insert($idbr,$jps,$tps)
	 {
		 $idp = intval(date('Hisd'));
		 $sql="INSERT INTO
			 permintaan_barang(id_pesan,id_brg,jumlah_psn,tgl_psn_brg)
			 VALUES
			 ('$idp','$idbr','$jps','$tps')";
		 $this->db->query($sql);
	 }
	 public function update($idp,$idbr,$jps,$tps)
	 {
		 $sql="UPDATE permintaan_barang
			 SET id_brg='$idbr',
			 jumlah_psn='$jps',
			 tgl_psn_brg='$tps'
			 WHERE id_pesan='$idp'";
			 
			 
		 $this->db->query($sql);
	 }
	 public function delete($id)
	 {
		$sql="DELETE FROM permintaan_barang
		WHERE id_pesan='$id'";
		$this->db->query($sql);
	 }
	 public function get_detail_barang($id)
	 {
		$sql="SELECT * FROM permintaan_barang
		WHERE id_pesan='$id'";
		return $this->db->query($sql);
	 }
	 
	 function get_barang(){
	 	$sql = "SELECT * FROM barang";
		return $this->db->query($sql);
	 }


}
?>