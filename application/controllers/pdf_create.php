<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . 'libraries/TCPDF/tcpdf.php'; // Mengimpor TCPDF

class pdf_create extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('pdf_model'); // Memuat model
    }

    public function exportToPdf()
    {
        // Mendapatkan data dari database (misalnya menggunakan model)
        
		$sql = "SELECT a.*, b.nama_agama, c.nama_status FROM mahasiswa a JOIN agama b ON a.id_agama = b.id_agama JOIN status_kawin c ON a.id_status = c.id_status";
		$query = $this->db->query($sql);
		$data['result'] = $query->result_array();
		
		//$data['result'] = $this->pdf_model->getData();

        // Memuat pustaka TCPDF
        $pdf = new TCPDF();

        // Mengatur properti dokumen PDF
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('Jova');
        $pdf->SetTitle('Data Mahasiswa');
        $pdf->SetSubject('Data Mahasiswa');

        // Menambahkan halaman
        $pdf->AddPage();

        // Membuat konten PDF
        $html = '<h1>Tabel Data Mahasiswa</h1><hr>';
        $html .= '<table border="1">
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Tanggal Lahir</th>
                        <th>Status</th>
                        <th>Agama</th>
                        <th>Hobi</th>
                        <th>Foto</th>
                    </tr>';
        foreach ($data['result'] as $value) {
			$status = isset($value['nama_status']) ? $value['nama_status'] : '';
			$agama = isset($value['nama_agama']) ? $value['nama_agama'] : '';
			
            $html .= '<tr>
                        <td>'.$value['nim'].'</td>
                        <td>'.$value['nama'].'</td>
                        <td>'.$value['jenis_kelamin'].'</td>
                        <td>'.tanggalIndonesia($value['tanggal_lahir']).'</td>
                        <td>'.$status.'</td>
						<td>'.$agama.'</td>
                        <td>'.$value['hobi'].'</td>
                        <td><img src="'.base_url('./uploads/' . $value['foto']).'" alt="Foto Mahasiswa" width="50" height="50"></td>
                    </tr>';
        }
        $html .= '</table>';
		

        // Menulis konten ke dokumen PDF
        $pdf->writeHTML($html, true, false, true, false, '');

        // Output file PDF ke browser
        $pdf->Output('data_mahasiswa.pdf', 'I');
    }
}
