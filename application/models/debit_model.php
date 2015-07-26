<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Debit_model extends CI_Model {
	 public function get_all_debit()
	 {
		 $sql="SELECT  
		 debit.id_debit,
		 paket.harga_paket,
		 debit.tgl_debit
		 FROM debit
		 INNER JOIN paket ON paket.id_paket = debit.id_paket
		 ";
		 return $this->db->query($sql);
	 }
	 public function insert($tgd,$idc)
	 {	
		$x = explode('|', $idc);
		$idc = $x[0];
		$idp = $x[1];
		$idd = intval(date('Hisd'));	
		 $sql="INSERT INTO
			 debit(id_debit,tgl_debit,id_custom,id_paket)
			 VALUES
			 ('$idd','$tgd','$idc','$idp')";
		 $this->db->query($sql);
	 }
	 public function update($idd,$tgd,$idc,$idp)
	 {
		$x = explode('|', $idc);
		$idc = $x[0];
		$idp = $x[1];
		$sql="UPDATE debit
			 SET tgl_debit='$tgd',
			 id_custom='$idc',
			 id_paket='$idp'
			 WHERE id_debit='$idd'";
		 $this->db->query($sql);
	 }
	 public function get_customer(){
		$sql = "SELECT * FROM customer";
		return $this->db->query($sql);
	 }
	 
	 public function delete($id)
	 {
		$sql="DELETE FROM debit
		WHERE id_debit='$id'";
		$this->db->query($sql);
	 }
	 public function get_detail_debit($id)
	 {
		$sql="SELECT * FROM debit
		WHERE id_debit='$id'";
		return $this->db->query($sql);
	 }
 }