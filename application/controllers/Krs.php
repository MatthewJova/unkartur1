<?php 

	class Krs extends CI_Controller{

		public function index(){
			$data = array(
			'nim' => set_value('nim'),
			'id_thn_akad' => set_value('id_thn_akad'),
			);

			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('masuk_krs', $data);
		}

		 public function belum_lunas()
	      {
	        $this->load->view('header');
	        $this->load->view('menu');
	        $this->load->view('krs_belum_lunas');
	      }

		public function krs_aksi(){
			$this->_rulesKrs();

			if($this->form_validation->run() == FALSE){
				$this->index();
			}else{
				$nim = $this->input->post('nim', TRUE);
				$thn_akad = $this->input->post('id_thn_akad', TRUE);
			}

			if($this->m_crud->get_by_id($nim)==null){
				echo "DATA MAHASISWA TIDAK VALID";
				redirect('Krs/');
			}

			$data = array(
				'nim' => $nim,
				'id_thn_akad' => $thn_akad,
				'nama_lengkap' => $this->m_crud->get_by_id($nim)->nama
			);

			$dataKrs = array(
				'krs_data' => $this->baca_krs($nim,$thn_akad),
				'nim' => $nim,
				'id_thn_akad' => $thn_akad,
				'tahun_akademik' => $this->tahunakademik_model->get_by_id($thn_akad)->tahun_akademik,
				'semester' => $this->tahunakademik_model->get_by_id($thn_akad)->semester=='Ganjil'?'Ganjil':'Genap',
				'nama' => $this->m_crud->get_by_id($nim)->nama,
				#'prodi' => $this->m_crud->get_by_id($nim)->id_prodi,
				'prodi' => $this->m_crud->get_nama_prodi($this->m_crud->get_by_id($nim)->id_prodi),
			);

			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('krs_list', $dataKrs);
		}

		public function baca_krs($nim,$thn_akad){
			$this->db->select('k.id_krs,k.kode_matakuliah,m.nama_matakuliah,m.sks');
			$this->db->from('krs as k');
			$this->db->where('k.nim',$nim);
			$this->db->where('k.id_thn_akad',$thn_akad);
			$this->db->join('matakuliah as m', 'm.kode_matakuliah = k.kode_matakuliah');
			
			$krs = $this->db->get()->result();
			return $krs;
		}

		public function _rulesKrs(){
			$this->form_validation->set_rules('nim', 'nim', 'required', [
				'required' => 'NIM Wajib Diisi!'
			]);
			$this->form_validation->set_rules('id_thn_akad', 'id_thn_akad', 'required', [
				'required' => 'Nama Prodi Wajib Diisi!'
			]);
		}

		public function tambah_krs($nim,$thn_akad){
			$data = array(
				'id_krs' => set_value('id_krs'),
				'id_thn_akad' => $thn_akad,
				'thn_akad_smt' => $this->tahunakademik_model->get_by_id($thn_akad)->tahun_akademik,
				'semester' => $this->tahunakademik_model->get_by_id($thn_akad)->semester=='Ganjil'?'Ganjil':'Genap',
				'nim' => $nim,
				'kode_matakuliah' => set_value('kode_matakuliah')
			);

			$this->load->view('header');
			$this->load->view('menu');
			$this->load->view('krs_form', $data);
		}

		public function tambah_krs_aksi(){
			$this->_rules();
			if($this->form_validation->run()==FALSE){
				$this->tambah_krs($this->input->post('nim', TRUE), $this->input->post('id_thn_akad', TRUE));
			}else{
				$nim = $this->input->post('nim', TRUE);
				$id_thn_akad = $this->input->post('id_thn_akad', TRUE);
				$kode_matakuliah = $this->input->post('kode_matakuliah', TRUE);

				$data = array(
					'id_thn_akad' => $id_thn_akad,
					'nim' => $nim,
					'kode_matakuliah' => $kode_matakuliah
				);
				$this->krs_model->insert($data);
				#redirect('krs/krs_aksi');
				$this->krs_aksi();
			}
		}

		public function _rules(){
			$this->form_validation->set_rules('id_thn_akad', 'id_thn_akad', 'required', [
				'required' => 'NIM Wajib Diisi!'
			]);
			$this->form_validation->set_rules('kode_matakuliah', 'kode_matakuliah', 'required', [
				'required' => 'Nama Prodi Wajib Diisi!'
			]);
		}

		public function update($id){
			$row = $this->krs_model->get_by_id($id);
			$th = $row->id_thn_akad;

			if($row){
				$data = array(
					'id_krs' => set_value('id_krs', $row->id_krs),
					'id_thn_akad' => set_value('id_thn_akad', $row->id_thn_akad),
					'nim' => set_value('nim', $row->nim),
					'kode_matakuliah' => set_value('kode_matakuliah', $row->kode_matakuliah),
					'thn_akad_smt' => $this->tahunakademik_model->get_by_id($th)->tahun_akademik,
					'semester' => $this->tahunakademik_model->get_by_id($th)->semester=='Ganjil'?'Ganjil':'Genap'
				);

				$this->load->view('header');
				$this->load->view('menu');
				$this->load->view('krs_update', $data);

			}else{
				echo "Data Tidak Ada!";
			}
		}

		public function update_aksi(){
			$id_krs = $this->input->post('id_krs', TRUE);
			$nim = $this->input->post('nim', TRUE);
			$id_thn_akad = $this->input->post('id_thn_akad', TRUE);
			$kode_matakuliah = $this->input->post('kode_matakuliah', TRUE);

			$data = array(
				'id_krs' => $id_krs,
				'id_thn_akad' => $id_thn_akad,
				'nim' => $nim,
				'kode_matakuliah' => $this->input->post('kode_matakuliah', TRUE)
			);

			$this->krs_model->update($id_krs, $data);
		}

		public function delete($id){
			$where = array('id_krs' => $id);
			$this->krs_model->hapus_data($where,'krs');
			redirect('Krs/');
		}

	}

 ?>