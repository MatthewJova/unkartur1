<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function login($post)
	{
		$pass=$_POST['password'];
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('username', $post['username']);
		$this->db->where('password', md5($post['password']));
		//$this->db->where('password', sha1[$pass]); 
		$query = $this->db->get();
		return $query;
	}
	
	public function get($id = null)
	{
		$this->db->from('users');
		if($id != null){
			$this->db->where('id', $id);
		}
		$query = $this->db->get();
		return $query;
	}
	
	public function get_user_by_id($user_id) {
		// Lakukan query ke database untuk mendapatkan informasi pengguna berdasarkan ID
		$query = $this->db->get_where('users', array('id' => $user_id));

		// Periksa apakah pengguna ditemukan
		if ($query->num_rows() > 0) {
			return $query->row_array(); // Mengembalikan data pengguna dalam bentuk array
		} else {
			return false; // Jika pengguna tidak ditemukan, kembalikan false
		}
	}
}







