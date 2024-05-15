<?php

class jurusan_model extends CI_Model{

	public function tampil_data(){
		return $this->db->get('jurusan');
	}

	public function input_data($rs_data){
		$this->db->insert('jurusan', $rs_data);
	}

	public function edit_data($where, $table){
		return $this->db->get_where($table, $where);
	}
	public function update_data($where,$rs_data,$table){
		$this->db->where($where);
		$this->db->update($table,$rs_data);
	}

	/*public function get_jurusan_by_id($id_jurusan) {
		$this->db->where('id_jurusan', $id_jurusan);
		return $this->db->get('jurusan')->row_array();
	}

	public function update_data($id_jurusan, $data) {
		$this->db->where('id_jurusan', $id_jurusan);
		$this->db->update('jurusan', $data);
	}*/

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}