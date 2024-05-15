<?php 

class Jurusan extends CI_Controller{

	public function index(){
		$rs_data['jurusan'] = $this->jurusan_model->tampil_data()->result();
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('jurusan', $rs_data);
	}

	public function input(){
		$rs_data = array(
			'id_jurusan' => set_value('id_jurusan'),
			'kode_jurusan' => set_value('kode_jurusan'),
			'nama_jurusan' => set_value('nama_jurusan')
		);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('jurusan_form', $rs_data);
	}

	public function save_jrs(){
		$this->_rules();

		if($this->form_validation->run()== FALSE){
			$this->input();
		}else{
			$rs_data = array(
				'kode_jurusan' => $this->input->post('kode_jurusan', TRUE),
				'nama_jurusan' => $this->input->post('nama_jurusan', TRUE)
			);
		$this->jurusan_model->input_data($rs_data);
		redirect('Jurusan/');
		}
	}

	public function _rules(){
		$this->form_validation->set_rules('kode_jurusan', 'kode_jurusan', 'required', [
			'required' => 'Kode Jurusan Wajib Diisi!'
		]);
		$this->form_validation->set_rules('nama_jurusan', 'nama_jurusan', 'required', [
			'required' => 'Nama Jurusan Wajib Diisi!'
		]);
	}

	public function update($id){
		$where = array('id_jurusan' => $id);
		$rs_data['jurusan'] = $this->jurusan_model->edit_data($where,'jurusan')->result();

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('jurusan_edit', $rs_data);
	}

	public function update_aksi(){
		$id = $this->input->post('id_jurusan');
		$kode_jurusan = $this->input->post('kode_jurusan');
		$nama_jurusan = $this->input->post('nama_jurusan');

		$rs_data = array(
			'kode_jurusan' => $kode_jurusan,
			'nama_jurusan' => $nama_jurusan
		);

		$where = array(
			'id_jurusan' => $id
		);
		$this->jurusan_model->update_data($where,$rs_data,'jurusan');
		redirect('Jurusan/');
	}

	/*public function update($id_jurusan) {
		$data['jurusan'] = $this->jurusan_model->get_jurusan_by_id($id_jurusan);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('jurusan_edit', $data);
	}

	public function update_aksi() {
		$kode_jurusan = $this->input->post('kode_jurusan');
		$nama_jurusan = $this->input->post('nama_jurusan');
		
		$data = array(
			'kode_jurusan' => $kode_jurusan,
			'nama_jurusan' => $nama_jurusan
		);
		
		$this->jurusan_model->update_data($id_jurusan, $data);
		
		redirect('Jurusan/');
	}*/

	public function delete($id){
		$where = array('id_jurusan' => $id);
		$this->jurusan_model->hapus_data($where,'jurusan');
		redirect('Jurusan/');
	}
}
