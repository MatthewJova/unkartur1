<?php

class tes extends CI_Controller{

    public function index(){
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('hasil');
    }

    /*public function proses()
    {
        $data = $this->input->post();

        $jumlahSering = 0;
        for ($i = 1; $i <= 10; $i++) {
            if ($data['jawaban' . $i] == 'sering') {
                $jumlahSering++;
            }
        }

        $jumlahKadangKadang = 0;
        for ($i = 1; $i <= 10; $i++) {
            if ($data['jawaban' . $i] == 'kadang') {
                $jumlahKadangKadang++;
            }
        }

        $jumlahTidakPernah = 0;
        for ($i = 1; $i <= 10; $i++) {
            if ($data['jawaban' . $i] == 'tidak pernah') {
                $jumlahTidakPernah++;
            }
        }

        if ($jumlahSering > $jumlahKadangKadang) {
            $tingkatStres = 'Tinggi';
        } elseif ($jumlahKadangKadang > $jumlahSering) {
            $tingkatStres = 'Sedang';
        } else {
            $tingkatStres = 'Tidak Stress';
        }

        $this->session->set_flashdata('tingkat_stres', $tingkatStres);
        redirect('tes');
        //redirect('tes', ['tingkat_stres' => $tingkatStres]);
    }*/

    public function proses() {
        $data = $this->input->post();

        $skorTotal = 0;
        $bobot = ['sering' => 3, 'kadang' => 2, 'tidak pernah' => 1];
        $jumlahJawaban = count($data) - 1; // Mengurangi 1 untuk mengesampingkan data non-jawaban

        foreach ($data as $key => $value) {
            if (strpos($key, 'jawaban') !== false) {
                $skorTotal += $bobot[$value];
            }
        }

        $rataRataSkor = $skorTotal / $jumlahJawaban;
        $this->session->set_flashdata('rata', $rataRataSkor);
        
        if ($rataRataSkor >= 2.5) {
            $tingkatStres = 'Tinggi';
        } elseif ($rataRataSkor >= 1.5) {
            $tingkatStres = 'Sedang';
        } else {
            $tingkatStres = 'Tidak Stress';
        }

        $this->session->set_flashdata('tingkat_stres', $tingkatStres);
        
        redirect('tes');
    }
}