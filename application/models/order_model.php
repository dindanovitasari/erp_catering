<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_model extends CI_Model {
	 public function get_all_pesan()
	 {
		 $sql="SELECT 
		 customer.id_custom,
		 paket.nama_paket,
		 customer.nama_custom,
		 customer.alamat_custom,
		 customer.tlp_custom,
		 customer.tgl_psn_custom,
		 customer.tgl_acara_custom
		 FROM customer
		 INNER JOIN paket ON paket.id_paket = customer.id_paket
		 ";
		 return $this->db->query($sql);
	 }
	 public function insert($ip,$nc,$ac,$tc,$tpc,$tac)
	 {
		 $ic = intval(date('Hisd'));
		 $sql="INSERT INTO
			 customer(
			 id_custom,
			 id_paket,
			 nama_custom,
			 alamat_custom,
			 tlp_custom,
			 tgl_psn_custom,
			 tgl_acara_custom)
			 VALUES
			 ('$ic','$ip','$nc','$ac','$tc','$tpc','$tac')";
		 $this->db->query($sql);
	 }
	 public function get_paket()
	 {
		$sql="SELECT * FROM paket";
		return $this->db->query($sql);
	 }
	 public function update($io,$ip,$nc,$ac,$tc,$tpc,$tac)
	 {
		 $sql="UPDATE customer
			 SET 
			 id_custom='$io',
			 id_paket='$ip',
			 nama_custom='$nc',
			 alamat_custom='$ac',
			 tlp_custom='$tc',
			 tgl_psn_custom='$tpc',
			 tgl_acara_custom='$tac'
			 WHERE id_custom='$io'";
		 $this->db->query($sql);
	 }
	 public function delete($id)
	 {
		$sql="DELETE FROM customer
		WHERE id_custom='$id'";
		$this->db->query($sql);
	 }
	 public function get_detail_order($id)
	 {
		$sql="SELECT * FROM customer
		WHERE id_custom='$id'";
		return $this->db->query($sql);
	 }
 }