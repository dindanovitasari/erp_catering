<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Kredit_model extends CI_Model {
	 public function get_all_kredit()
	 {
		 $sql="SELECT 
		 kredit.id_kredit,
		 pemesanan_barang.total_harga,
		 kredit.tgl_kredit
		 FROM kredit
		 INNER JOIN pemesanan_barang ON pemesanan_barang.id_psn = kredit.id_psn
		 ";
		 return $this->db->query($sql);
	 }
	 public function insert($tgk,$idp)
	 {
		 $idk = intval(date('Hisd'));
		 $sql="INSERT INTO
			 kredit(id_kredit,tgl_kredit,id_psn)
			 VALUES
			 ('$idk','$tgk','$idp')";
		 $this->db->query($sql);
	 }
	 public function get_pemesanan()
	 {
		$sql="SELECT * FROM pemesanan_barang";
		return $this->db->query($sql);
	 }
	 public function update($idk,$tgk,$idp)
	 {
		 $sql="UPDATE kredit
			 SET tgl_kredit='$tgk',
			 id_psn='$idp'
			 WHERE id_kredit='$idk'";
		 $this->db->query($sql);
	 }
	 public function delete($id)
	 {
		$sql="DELETE FROM kredit
		WHERE id_kredit='$id'";
		$this->db->query($sql);
	 }
	 public function get_detail_kredit($id)
	 {
		$sql="SELECT * FROM kredit
		WHERE id_kredit='$id'";
		return $this->db->query($sql);
	 }
 }