<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ScanQr extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        if (!$this->session->userdata('logged_in')) {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['title'] = 'Scan QR & Riwayat Presensi';
        $data['user'] = $this->session->userdata();
        // Dummy riwayat presensi user
        $data['riwayat'] = [
            [
                'tanggal' => '2024-06-01',
                'waktu_masuk' => '07:10',
                'waktu_pulang' => '15:00',
                'status' => 'Hadir',
            ],
            [
                'tanggal' => '2024-05-31',
                'waktu_masuk' => '07:12',
                'waktu_pulang' => '15:01',
                'status' => 'Hadir',
            ],
            [
                'tanggal' => '2024-05-30',
                'waktu_masuk' => '-',
                'waktu_pulang' => '-',
                'status' => 'Izin',
            ],
        ];
        $this->load->view('scan_qr/index', $data);
    }
}
