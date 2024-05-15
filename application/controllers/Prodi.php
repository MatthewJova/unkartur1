<?php  
	
	class Prodi extends CI_Controller{

		public function index(){
			$data['prodi'] = $this->prodi_model->tampil_data('prodi')->result();
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('prodi', $data);
		}

		public function tambah_prodi(){
			$data['jurusan'] = $this->prodi_model->tampil_data('jurusan')->result();
			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('prodi_form', $data);
		}

		public function tambah_prodi_aksi(){
			$this->_rules();
			if($this->form_validation->run() == FALSE){
				$this->tambah_prodi();
			}else{
				$kode_prodi = $this->input->post('kode_prodi');
				$nama_prodi = $this->input->post('nama_prodi');
				$nama_jurusan = $this->input->post('nama_jurusan');
				
				$data = array(
					'kode_prodi' => $kode_prodi,
					'nama_prodi' => $nama_prodi,
					'nama_jurusan' => $nama_jurusan,
				);

				$this->prodi_model->insert_data($data,'prodi');
				redirect('Prodi');
			}
		}
		public function _rules(){
			$this->form_validation->set_rules('kode_prodi', 'kode_prodi', 'required', [
				'required' => 'Kode Prodi Wajib Diisi!'
			]);
			$this->form_validation->set_rules('nama_prodi', 'nama_prodi', 'required', [
				'required' => 'Nama Prodi Wajib Diisi!'
			]);
			$this->form_validation->set_rules('nama_jurusan', 'nama_jurusan', 'required', [
				'required' => 'Nama Jurusan Wajib Diisi!'
			]);
		}

		public function update($id){
			$where = array('id_prodi' => $id);

			$data['prodi'] = $this->db->query("select * from prodi prd, jurusan jrs where prd.nama_jurusan=jrs.nama_jurusan and prd.id_prodi='$id'")->result();

			$data['jurusan'] = $this->prodi_model->tampil_data('jurusan')->result();


			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('prodi_update', $data);
		}

		public function update_aksi(){
			$id = $this->input->post('id_prodi');
			$kode_prodi = $this->input->post('kode_prodi');
			$nama_prodi = $this->input->post('nama_prodi');
			$nama_jurusan = $this->input->post('nama_jurusan');

			$rs_data = array(
				'kode_prodi' => $kode_prodi,
				'nama_prodi' => $nama_prodi,
				'nama_jurusan' => $nama_jurusan
			);

			$where = array(
				'id_prodi' => $id
			);
			$this->prodi_model->update_data($where,$rs_data,'prodi');
			redirect('Prodi/');
		}

		public function delete($id){
			$where = array('id_prodi' => $id);
			$this->prodi_model->hapus_data($where,'prodi');
			redirect('Prodi/');
		}
	}
?>