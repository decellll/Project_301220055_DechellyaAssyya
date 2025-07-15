<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GenerateQr extends CI_Controller
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
        // Dummy data QR Code
        $data['qrcodes'] = [
            [
                'no' => 1,
                'code' => 'QR001-2024-01-01',
                'title' => 'Presensi Pagi',
                'desc' => 'QR Code untuk presensi pagi',
                'lokasi' => 'Gedung A Lantai 1',
                'valid_from' => '2024-01-01 07:00',
                'valid_until' => '2024-01-01 09:00',
            ],
            [
                'no' => 2,
                'code' => 'QR002-2024-01-01',
                'title' => 'Presensi Siang',
                'desc' => 'QR Code untuk presensi siang',
                'lokasi' => 'Gedung A Lantai 1',
                'valid_from' => '2024-01-01 12:00',
                'valid_until' => '2024-01-01 14:00',
            ],
        ];
        $data['title'] = 'Generate QR Code';
        $data['user'] = $this->session->userdata();
        $this->load->view('generate_qr/index', $data);
    }
}
