<?php

if (!defined('BASEPATH'))
	exit('No direct script access allowed');
	
class latihan extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_latihan');
	}
	
	function index(){
		$rs_data ['result'] = $this->m_latihan->get_data();
		$this->load->view('list', $rs_data);
	}
	
	function add(){
		$this->load->view('form');
	}
	
	function insert(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$prodi = $this->input->post('prodi');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jenis_kelamin');
		$params = array($nim, $nama, $prodi, $alamat, $jk);
		$this->m_latihan->insert($params);
		return redirect('latihan');
	}
	
	function edit($params = ''){
		$rs_data['result'] = $this->m_latihan->edit($params);
		$this->load->view('edit', $rs_data);
	}
	
	function update(){
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$prodi = $this->input->post('prodi');
		$alamat = $this->input->post('alamat');
		$jk = $this->input->post('jenis_kelamin');
		$params = array($nama, $prodi, $alamat, $jk, $nim);
		$this->m_latihan->update($params);
		return redirect('latihan');
	}
	
	function delete($params = ''){
		$this->m_latihan->hapus($params);
		return redirect('latihan');
	}

}