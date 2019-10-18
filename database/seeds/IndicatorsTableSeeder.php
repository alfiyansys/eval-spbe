<?php

use App\Aspect;
use App\Indicator;
use Illuminate\Database\Seeder;

class IndicatorsTableSeeder extends Seeder
{
    public function get_aspect_id($name) {
        return Aspect::query()->where('name', $name)->first()->id;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $indicators = [
            // Aspek Kebijakan Internal Tata Kelola SPBE
            [
                'aspect_id' => $this->get_aspect_id('Kebijakan Internal Tata Kelola SPBE'),
                'name' => 'Kebijakan Internal Tim Pengarah SPBE Instansi Pemerintah',
                'question' => 'Apakah Instansi Saudara memiliki kebijakan internal terkait Tim Pengarah SPBE/TIK/?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Kebijakan Internal Tata Kelola SPBE'),
                'name' => 'Kebijakan Internal Inovasi Proses Bisnis Terintegrasi',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait proses bisnis (alur kerja) terintegrasi?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Kebijakan Internal Tata Kelola SPBE'),
                'name' => 'Kebijakan Internal Rencana Induk SPBE Instansi Pemerintah',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait rencana induk SPBE?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Kebijakan Internal Tata Kelola SPBE'),
                'name' => 'Kebijakan Internal Anggaran dan Belanja TIK',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait perencanaan dan penganggaran TIK?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Kebijakan Internal Tata Kelola SPBE'),
                'name' => 'Kebijakan Internal Pengoperasian Pusat Data',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait pengoperasian pusat data (data center)?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Kebijakan Internal Tata Kelola SPBE'),
                'name' => 'Kebijakan Internal Integrasi Sistem Aplikasi',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait integrasi sistem aplikasi?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Kebijakan Internal Tata Kelola SPBE'),
                'name' => 'Kebijakan Internal Penggunaan Aplikasi Umum Berbagi Pakai',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait penggunaan aplikasi umum berbagi pakai?'
            ],

            // Aspek Kebijakan Internal Layanan SPBE
            [
                'aspect_id' => $this->get_aspect_id('Kebijakan Internal Layanan SPBE'),
                'name' => 'Kebijakan Internal Layanan Naskah Dinas',
                'question' => 'Apakah Instansi  Pusat/Pemerintah Daerah Saudara  memiliki  kebijakan internal  terkait  sistem  naskah dinas elektronik?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Kebijakan Internal Layanan SPBE'),
                'name' => 'Kebijakan Internal Layanan Manajemen Kepegawaian',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait sistem manajemen kepegawaian?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Kebijakan Internal Layanan SPBE'),
                'name' => 'Kebijakan Internal Layanan Manajemen Perencanaaan dan Penganggaran',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait sistem manajemen perencanaan dan penganggaran?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Kebijakan Internal Layanan SPBE'),
                'name' => 'Kebijakan Internal Layanan Manajemen Keuangan',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait sistem manajemen keuangan?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Kebijakan Internal Layanan SPBE'),
                'name' => 'Kebijakan Internal Layanan Manajemen Kinerja',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait sistem manajemen kinerja?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Kebijakan Internal Layanan SPBE'),
                'name' => 'Kebijakan Internal Layanan Pengadaan',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait sistem pengadaan secara elektronik?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Kebijakan Internal Layanan SPBE'),
                'name' => 'Kebijakan Internal Layanan Pengaduan Publik',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait sistem pengaduan publik?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Kebijakan Internal Layanan SPBE'),
                'name' => 'Kebijakan Internal Layanan Dokumentasi dan Informasi Hukum',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal terkait sistem jaringan dokumentasi dan informasi hukum (JDIH)?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Kebijakan Internal Layanan SPBE'),
                'name' => 'Kebijakan Internal Layanan Whistle Blowing System (WBS)',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki kebijakan internal untuk WBS?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Kebijakan Internal Layanan SPBE'),
                'name' => 'Kebijakan Internal Layanan publik Instansi Pemerintah',
                'question' => 'Apakah instansi Saudara memiliki  kebijakan internal terkait sistem pelayanan  publik yang mendukung tugas pokok Instansi Pusat/Pemerintah Daerah Saudara?'
            ],

            // Aspect Kelembagaan
            [
                'aspect_id' => $this->get_aspect_id('Kelembagaan'),
                'name' => 'Tim Pengarah SPBE Instansi Pemerintah',
                'question' => 'Apakah instansi Saudara memiliki Tim Pengarah SPBE?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Kelembagaan'),
                'name' => 'Inovasi Proses Bisnis Terintegrasi',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki proses bisnis (alur kerja) yang terintegrasi?'
            ],

            // Aspect Strategi dan Perencanaan
            [
                'aspect_id' => $this->get_aspect_id('Strategi dan Perencanaan'),
                'name' => 'Rencana Induk SPBE Instansi Pemerintah',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki dokumen rencana induk SPBE?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Strategi dan Perencanaan'),
                'name' => 'Anggaran dan Belanja TIK',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki perencanaan dan penganggaran TIK untuk penerapan SPBE?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Strategi dan Perencanaan'),
                'name' => 'Inovasi Proses Bisnis Terintegrasi',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki proses bisnis (alur kerja) yang terintegrasi?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Strategi dan Perencanaan'),
                'name' => 'Inovasi Proses Bisnis Terintegrasi',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki proses bisnis (alur kerja) yang terintegrasi?'
            ],

            // Aspect Teknologi Informasi dan Komunikasi
            [
                'aspect_id' => $this->get_aspect_id('Teknologi Informasi dan Komunikasi'),
                'name' => 'Pengoperasian Pusat Data',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki layanan pusat data (data center)?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Teknologi Informasi dan Komunikasi'),
                'name' => 'Integrasi Sistem Aplikasi',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara telah melakukan integrasi sistem aplikasi?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Teknologi Informasi dan Komunikasi'),
                'name' => 'Penggunaan Aplikasi Umum Berbagi Pakai',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara menggunakan aplikasi umum berbagi pakai?'
            ],

            // Aspect Layanan Administrasi Pemerintahan Berbasis Elektronik
            [
                'aspect_id' => $this->get_aspect_id('Layanan Administrasi Pemerintahan Berbasis Elektronik'),
                'name' => 'Layanan Naskah Dinas',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah  Saudara memiliki sistem naskah dinas elektronik?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Layanan Administrasi Pemerintahan Berbasis Elektronik'),
                'name' => 'Layanan Manajemen Kepegawaian',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki sistem manajemen kepegawaian?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Layanan Administrasi Pemerintahan Berbasis Elektronik'),
                'name' => 'Layanan Manajemen Perencanaan',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki sistem manajemen perencanaan?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Layanan Administrasi Pemerintahan Berbasis Elektronik'),
                'name' => 'Layanan Manajemen Penganggaran',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki sistem penganggaran?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Layanan Administrasi Pemerintahan Berbasis Elektronik'),
                'name' => 'Layanan Manajemen Keuangan',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki sistem manajemen keuangan terintegrasi?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Layanan Administrasi Pemerintahan Berbasis Elektronik'),
                'name' => 'Layanan Manajemen Kinerja',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki sistem manajemen kinerja?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Layanan Administrasi Pemerintahan Berbasis Elektronik'),
                'name' => 'Layanan Pengadaan',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki sistem pengadaan secara elektronik?'
            ],

            // Aspect Layanan Publik Berbasis Elektronik
            [
                'aspect_id' => $this->get_aspect_id('Layanan Administrasi Pemerintahan Berbasis Elektronik'),
                'name' => 'Layanan Pengaduan Publik',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki sistem layanan pengaduan publik?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Layanan Administrasi Pemerintahan Berbasis Elektronik'),
                'name' => 'Layanan Dokumentasi dan Informasi Hukum',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki sistem jaringan dokumentasi dan informasi hukum (JDIH)?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Layanan Administrasi Pemerintahan Berbasis Elektronik'),
                'name' => 'Layanan Whistle-Blowing System',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki Whistle-Blowing System (WBS)?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Layanan Administrasi Pemerintahan Berbasis Elektronik'),
                'name' => 'Layanan Publik Instansi Pemerintah',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki sistem pelayanan publik yang mendukung tugas pokok instansi?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Layanan Administrasi Pemerintahan Berbasis Elektronik'),
                'name' => 'Layanan Publik Instansi Pemerintah',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki sistem pelayanan publik yang mendukung tugas pokok instansi?'
            ],
            [
                'aspect_id' => $this->get_aspect_id('Layanan Administrasi Pemerintahan Berbasis Elektronik'),
                'name' => 'Layanan Publik Instansi Pemerintah',
                'question' => 'Apakah Instansi Pusat/Pemerintah Daerah Saudara memiliki sistem pelayanan publik yang mendukung tugas pokok instansi?'
            ],
        ];

        Indicator::query()->insert($indicators);
    }
}
