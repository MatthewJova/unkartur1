<?php

class tes_model extends CI_Model
{
    public function get_pertanyaan()
    {
        return [
            [
                'pertanyaan' => 'Saya lebih suka menghabiskan waktu sendirian atau bersama orang lain?',
                'jawaban' => ['Bersama orang lain', 'Sendirian']
            ],
            [
                'pertanyaan' => 'Saya lebih suka berbicara atau mendengarkan?',
                'jawaban' => ['Berbicara', 'Mendengarkan']
            ],
            [
                'pertanyaan' => 'Saya lebih suka menjadi pusat perhatian atau berada di latar belakang?',
                'jawaban' => ['Pusat perhatian', 'Latar belakang']
            ],
            [
                'pertanyaan' => 'Saya lebih suka bekerja sendiri atau dalam tim?',
                'jawaban' => ['Bekerja sendiri', 'Bekerja dalam tim']
            ],
            [
                'pertanyaan' => 'Saya lebih suka berada di tempat yang ramai atau sepi?',
                'jawaban' => ['Ramai', 'Sepi']
            ]
        ];
    }
}