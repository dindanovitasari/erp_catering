 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Menu_model extends CI_Model {
	 public function update()
	 {
	 	 $menu_id = $_POST['id_menu'];
	 	 
		 $sql = "DELETE FROM isi_menu WHERE id_menu = '$menu_id'";			 
		 $this->db->query($sql);
		 
		$nama = $_POST['nama'];	 
	 	$sql = "UPDATE menu SET nama_menu = '$nama' WHERE id_menu = '$menu_id'";
	 	$this->db->query($sql);
	 	
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
	 public function delete($id_menu, $id_brg)
	 {
		$sql="DELETE FROM isi_menu WHERE id_menu = '$id_menu' AND id_brg='$id_brg'";
		echo $sql;
		$this->db->query($sql);
	 }	 
	 function get_menu_barang(){
	 	$sql = "SELECT * FROM barang";
		return $this->db->query($sql);
	 }
	 
	  function get_menu(){
	 	$sql = "SELECT m.nama_menu, b.nama_brg, m.id_menu, b.id_brg
				FROM menu m
				LEFT JOIN isi_menu i ON i.id_menu = m.id_menu
				LEFT JOIN barang b ON b.id_brg = i.id_brg
				WHERE 1 ";
		return $this->db->query($sql);
	 }
	 
	 function get_menu_by_id($id){
	 	$sql = "SELECT * FROM menu WHERE id_menu = '$id'";
	 	$data = $this->db->query($sql);
	 	return $data;
	 }


}
?>