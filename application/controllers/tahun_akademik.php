<?php 

class tahun_akademik extends CI_Controller{

	public function index(){
		$data['tahun_akademik'] = $this->tahunakademik_model->tampil_data('tahun_akademik')->result();

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('tahun_akademik', $data);
	}

	public function tambah_tahun_akademik(){

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('tahun_akademik_form');
	}

	public function tambah_tahun_akademik_aksi(){
		$this->_rules();
		if($this->form_validation->run() == FALSE){
			$this->tambah_tahun_akademik();
		}else{
			$tahun_akademik = $this->input->post('tahun_akademik');
			$semester = $this->input->post('semester');
			$status = $this->input->post('status');
			
			$data = array(
				'tahun_akademik' => $tahun_akademik,
				'semester' => $semester,
				'status' => $status
			);

			$this->tahunakademik_model->insert_data($data,'tahun_akademik');
			redirect('tahun_akademik');
		}
	}

	public function _rules(){
		$this->form_validation->set_rules('tahun_akademik', 'tahun_akademik', 'required', [
			'required' => 'Tahun Akademik Wajib Diisi!'
		]);
		$this->form_validation->set_rules('semester', 'semester', 'required', [
			'required' => 'Semester Wajib Diisi!'
		]);
		$this->form_validation->set_rules('status', 'status', 'required', [
			'required' => 'Status Wajib Diisi!'
		]);
	}

	public function update($id){
		$where = array('id_thn_akad' => $id);
		$data['tahun_akademik'] = $this->tahunakademik_model->edit_data($where,'tahun_akademik')->result();

		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('tahun_akademik_update', $data);
	}

	public function update_aksi(){
		$id = $this->input->post('id_thn_akad');
		$tahun_akademik = $this->input->post('tahun_akademik');
		$semester = $this->input->post('semester');
		$status = $this->input->post('status');

		$data = array(
			'tahun_akademik' => $tahun_akademik,
			'semester' => $semester,
			'status' => $status
		);

		$where = array(
			'id_thn_akad' => $id
		);

		$this->tahunakademik_model->update_data($where,$data,'tahun_akademik');
		redirect('tahun_akademik/');
	}

	public function delete($id){
		$where = array('id' => $id);
		$this->prodi_model->hapus_data($where,'tahun_akademik');
		redirect('tahun_akademik/');
	}
}

 ?>