<?php
Class m_diagram extends CI_Model
{
	function jum_agama()
		{
			$this->db->group_by('id_agama');
			$this->db->select('id_agama');
			$this->db->select("count(*) as total");
			return $this->db->from('mahasiswa')
			  ->get()
			  ->result();
		}

	function tgl_lahir()
		{
			$this->db->group_by('tanggal_lahir');
			$this->db->select('tanggal_lahir');
			$this->db->select("count(*) as total");
			return $this->db->from('mahasiswa')
			  ->get()
			  ->result();
		}
	
	function jenis_kelamin()
	{
		$this->db->group_by('jenis_kelamin');
		$this->db->select('jenis_kelamin');
		$this->db->select("count(*) as total");
		return $this->db->from('mahasiswa')
		  ->get()
		  ->result();
	}

	function prodi()
		{
			$this->db->group_by('id_prodi');
			$this->db->select('id_prodi');
			$this->db->select("count(*) as total");
			return $this->db->from('mahasiswa')
			  ->get()
			  ->result();
		}
	
}
?>