<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pembelian_model extends CI_Model {
	 public function get_all_pembelian()
	 {
		 $sql="SELECT
		 pemesanan_barang.id_psn,
		 pemesanan_barang.id_pesan,
		 barang.nama_brg,
		 permintaan_barang.jumlah_psn,
		 pemesanan_barang.total_harga,
		 supplier.nama_supp
		 FROM pemesanan_barang
		 INNER JOIN barang ON barang.id_brg = pemesanan_barang.id_brg
		 INNER JOIN permintaan_barang ON permintaan_barang.id_pesan=pemesanan_barang.id_pesan
		 INNER JOIN supplier ON supplier.id_supp = pemesanan_barang.id_supp
		 ";
		 return $this->db->query($sql);
	 }
	 public function get_barang()
	 {
		$sql = "SELECT id_brg, nama_brg FROM barang";
		return $this->db->query($sql);
	 }
	 public function get_supplier()
	 {
	 $sql = "SELECT * FROM supplier";
		return $this->db->query($sql);
	 }
	 public function get_minta()
		{
		$sql="SELECT * FROM permintaan_barang";
		return $this->db->query($sql);
		}
	 public function insert($ip,$is,$tpb)
	 {
		$x = explode('|', $ip);
		$ip=$x[0];
		$jp=$x[1];
		$idb=$x[2];
		$y=explode('|',$is);
		$is=$y[0];
		$hs=$y[1];
		$ips = intval(date('Hisd'));
		$th=$jp*$hs;
		$sql="INSERT INTO
			 pemesanan_barang(
			 id_psn,
			 id_pesan,
			 id_brg,
			 id_supp,
			 total_harga,
			 tgl_psn_brg)
			 VALUES
			('$ips','$ip','$idb','$is','$th','$tpb')";
		 $this->db->query($sql);
	 }
 }