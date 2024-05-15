<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');
	
class m_latihan extends CI_Model{

function __construct(){
	parent::__construct();
	
	}
	
	function index() {
	
	}
	
	function get_data(){
		$sql = "SELECT nim, nama, prodi, alamat, jenis_kelamin FROM mahasiswa";
		$query = $this->db->query($sql);
		if ($query->num_rows()>0){
			$result = $query->result_array();
			$query->free_result();
			return $result;
		}else{
			return array();
		}
	}
	
	function insert($params = ''){
		$sql = "INSERT INTO mahasiswa (nim, nama, prodi, alamat, jenis_kelamin) VALUES (?, ?, ?, ?, ?)";
		return $this->db->query($sql, $params);
	}
	
	function edit($params){
		$sql = "SELECT * FROM mahasiswa WHERE nim = ? ";
		$query = $this->db->query($sql, $params);
		if ($query->num_rows() > 0){
			$result = $query->row_array();
			$query->free_result();
			return $result;
		}else{
			return array();
		}
	}
	
	function update($params){
		$sql = "UPDATE mahasiswa SET nama = ?, prodi = ?, alamat = ?, jenis_kelamin = ? WHERE nim = ?";
		return $this->db->query($sql, $params);
	}
	
	function hapus($params){
		$sql = "DELETE FROM mahasiswa WHERE nim = ? ";
		return $this->db->query($sql, $params);
	}
	
}