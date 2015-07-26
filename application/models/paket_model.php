  <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paket_model extends CI_Model {
		 
	 public function update()
	 {
		 $paket_id = $_POST['id_paket'];
		 
		 $sql = "DELETE FROM isi_paket WHERE id_paket = '$paket_id'";
		 $this->db->query($sql);
		 
		 $nama = $_POST['nama'];	 
	 	 $sql = "UPDATE paket SET nama_paket = '$nama' WHERE id_paket = '$paket_id'";
	 	 $this->db->query($sql);
		 
		 $harga = $_POST['harga'];
		 
		 $sql = "UPDATE paket SET harga_paket = '$harga' WHERE id_paket =  '$paket_id'";
		 $this->db->query($sql);
		 
		 foreach($_POST['id_menu'] as $key){
	 		if($key != '--'){
	 			$data = array(
	 				'id_paket' => $paket_id,
	 				'id_menu' => $key
	 			);
	 			$this->db->insert('isi_paket', $data);
	 		}
	 	}
	 }
	 public function delete($id_paket, $id_menu)
	 {
		$sql="DELETE FROM isi_paket WHERE id_paket = '$id_paket' AND id_menu='$id_menu'";
		echo $sql;
		$this->db->query($sql);
	 }
	 public function get_detail_menu($id)
	 {
		$sql="SELECT * FROM menu
		WHERE id_menu='$id'";
		return $this->db->query($sql);
	 }
	 
	 function get_paket_menu(){
	 	$sql = "SELECT * FROM menu";
		return $this->db->query($sql);
	 }
	 
	  function get_paket(){
	 	$sql = "SELECT p.nama_paket, m.nama_menu, p.id_paket, m.id_menu, p.harga_paket
				FROM paket p
				LEFT JOIN isi_paket ip ON ip.id_paket = p.id_paket
				LEFT JOIN menu m ON m.id_menu = ip.id_menu
				WHERE 1 ";
		return $this->db->query($sql);
	 }
	 
	 function get_paket_by_id($id){
	 	$sql = "SELECT * FROM paket WHERE id_paket = '$id'";
	 	$data = $this->db->query($sql);
	 	return $data;
	 }
	 
	 function save(){
	 	$nama = $_POST['nama'];	 
		$harga = $_POST['harga'];	
	 	$paket_id = intval(date('Hisd'));
	 	echo $paket_id;
	 	$data = array(
	 		'id_paket' => $paket_id,
	 		'nama_paket' => $nama,
			'harga_paket' => $harga
	 	);
	 	$this->db->insert('paket', $data);
	 	foreach($_POST['id_menu'] as $key){
	 		if($key != '--'){
	 			$data = array(
	 				'id_paket' => $paket_id,
	 				'id_menu' => $key
	 			);
	 			$this->db->insert('isi_paket', $data);
	 		}
	 	}
	 }
	 
	 


}
?>