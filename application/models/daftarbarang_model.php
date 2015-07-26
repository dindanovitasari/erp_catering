<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Daftarbarang_model extends CI_Model {
	 public function get_all_barang()
	 {
		 $sql="SELECT  
		 barang.id_brg,
		 jenis_barang.ket_jns_brg,
		 barang.nama_brg,
		 barang.jumlah_brg
		 FROM barang
		 INNER JOIN jenis_barang ON jenis_barang.id_jns_brg=barang.id_jns_brg
		 ";
		 return $this->db->query($sql);
	 }
	 
	public function insert($idb,$nb,$jb)
	 {
	 	 $barang_id = intval(date('Hisd'));
		 $sql="INSERT INTO
			 barang(id_brg,id_jns_brg,nama_brg,jumlah_brg)
			 VALUES
			 ('$barang_id','$idb','$nb','$jb')";
		 $this->db->query($sql);
	 }
	 public function update($idbr,$idb,$nb,$jb)
	 {
		 $sql="UPDATE barang
			 SET id_jns_brg='$idb',
			 nama_brg='$nb',
			 jumlah_brg='$jb'
			 WHERE id_brg='$idbr'";
			 
		 $this->db->query($sql);
	 }
	 public function delete($id)
	 {
		$sql="DELETE FROM barang
		WHERE id_brg='$id'";
		$this->db->query($sql);
	 }
	 public function get_detail_barang($id)
	 {
		$sql="SELECT * FROM barang
		WHERE id_brg='$id'";
		return $this->db->query($sql);
	 }
	 
	 function get_barang(){
	 	$sql = "SELECT * FROM jenis_barang";
		return $this->db->query($sql);
	 }
	 
	 function save(){
	 	$nama = $_POST['nama'];	 
	 	$menu_id = intval(date('isd'));
	 	echo $menu_id;
	 	$data = array(
	 		'id_menu' => $menu_id,
	 		'nama_menu' => $nama
	 	);
	 	$this->db->insert('menu', $data);
	 	foreach($_POST['id_brg'] as $key){
	 		if($key != '--'){
	 			$data = array(
	 				'id_menu' => $menu_id,
	 				'id_brg' => $key
	 			);
	 			$this->db->insert('isi_menu', $data);
	 		}
	 	}
	 }
	 
	


}
?>