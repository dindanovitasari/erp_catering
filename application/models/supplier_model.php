<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Supplier_model extends CI_Model {
	 public function get_all_supplier()
	 {
		 $sql="SELECT  
		 supplier.id_supp,
		 supplier.nama_supp,
		 supplier.alamat_supp,
		 supplier.tlp_supp,
		 barang.nama_brg,
		 supplier.harga_supp
		 FROM supplier
		 INNER JOIN barang ON barang.id_brg = supplier.id_brg
		 ";
		 return $this->db->query($sql);
	 }
	 public function insert($ns,$as,$ts,$ib,$hs)
	 {
		 $is = intval(date('Hisd'));
		 $sql="INSERT INTO
			 supplier(
			 id_supp,
			 nama_supp,
			 alamat_supp,
			 tlp_supp,
			 id_brg,
			 harga_supp)
			 VALUES
			 ('$is','$ns','$as','$ts','$ib','$hs')";
		 $this->db->query($sql);
	 }
	 public function update($ids,$ns,$as,$ts,$ib,$hs)
	 {
		 $sql="UPDATE supplier
			 SET nama_supp='$ns',
			 alamat_supp='$as',
			 tlp_supp='$ts',
			 id_brg='$ib',
			 harga_supp='$hs'
			 WHERE id_supp='$ids'";
		 $this->db->query($sql);
	 }
	  public function get_barang()
	 {
		$sql = "SELECT id_brg, nama_brg FROM barang";
		return $this->db->query($sql);
	 }
	 public function delete($id)
	 {
		$sql="DELETE FROM supplier
		WHERE id_supp='$id'";
		$this->db->query($sql);
	 }
	 public function get_detail_supplier($id)
	 {
		$sql="SELECT * FROM supplier
		WHERE id_supp='$id'";
		return $this->db->query($sql);
	 }
 }