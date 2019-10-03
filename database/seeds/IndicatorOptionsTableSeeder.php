<?php

use App\Indicator;
use App\IndicatorOption;
use Illuminate\Database\Seeder;

class IndicatorOptionsTableSeeder extends Seeder
{
    public function get_indicator_id($name) {
        try {
            $indicator = Indicator::query()->where('name', '=', $name)->first()->id;
            return $indicator;
        } catch (Exception $e) {
            return $name;
        }
    }
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $indicator_options = [
            ////////    INDICATOR 1     \\\\\\\\\
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Tim Pengarah SPBE Instansi Pemerintah'),
                'title' => 'Tidak terdapat kebijakan internal terkait Tim Pengarah SPBE',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Tim Pengarah SPBE Instansi Pemerintah'),
                'title' => 'Terdapat konsep kebijakan internal terkait Tim Pengarah SPBE',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Tim Pengarah SPBE Instansi Pemerintah'),
                'title' => 'Kebijakan internal telah ditetapkan dan mencakup pengaturan tugas-tugas Tim Pengarah SPBE yang mendukung penerapan SPBE  pada sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Tim Pengarah SPBE Instansi Pemerintah'),
                'title' => 'Kebijakan internal mencakup pengaturan tugas-tugas Tim Pengarah SPBE yang mendukung penerapan SPBE pada semua unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Tim Pengarah SPBE Instansi Pemerintah'),
                'title' => 'Kebijakan internal mencakup pengaturan tugas-tugas Tim Pengarah SPBE yang mendukung penerapan SPBE antar Instansi Pusat, antar Pemerintah Daerah, atau antar Instansi Pusat dan Pemerintah Daerah',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Tim Pengarah SPBE Instansi Pemerintah'),
                'title' => 'Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 2         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Inovasi Proses Bisnis Terintegrasi'),
                'title' => 'Tidak terdapat kebijakan internal terkait standardisasi proses bisnis',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Inovasi Proses Bisnis Terintegrasi'),
                'title' => 'Terdapat konsep kebijakan internal terkait standardisasi penyusunan proses bisnis',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Inovasi Proses Bisnis Terintegrasi'),
                'title' => 'Kebijakan internal telah ditetapkan dan mendukung standardisasi penyusunan proses bisnis',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Inovasi Proses Bisnis Terintegrasi'),
                'title' => 'Kebijakan internal telah mendukung integrasi proses bisnis di dalam Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Inovasi Proses Bisnis Terintegrasi'),
                'title' => 'Kebijakan telah mendukung integrasi proses bisnis antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Inovasi Proses Bisnis Terintegrasi'),
                'title' => 'Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 3         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Rencana Induk SPBE Instansi Pemerintah'),
                'title' => 'Tidak terdapat kebijakan internal terkait rencana induk SPBE',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Rencana Induk SPBE Instansi Pemerintah'),
                'title' => 'Terdapat konsep kebijakan internal terkait rencana induk SPBE',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Rencana Induk SPBE Instansi Pemerintah'),
                'title' => 'Kebijakan internal telah ditetapkan dan mendukung pengaturan rencana induk SPBE  yang mencakup hanya sebagian dari muatan rencana induk SPBE yaitu visi dan misi SPBE, arsitektur SPBE, atau peta jalan SPBE',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Rencana Induk SPBE Instansi Pemerintah'),
                'title' => 'Kebijakan internal telah mendukung pengaturan rencana induk SPBE yang mencakup seluruh  muatan rencana induk SPBE yaitu visi dan misi SPBE, arsitektur SPBE, dan peta jalan SPBE',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Rencana Induk SPBE Instansi Pemerintah'),
                'title' => 'Kebijakan internal telah mendukung pengaturan rencana induk SPBE yang mencakup integrasi SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Rencana Induk SPBE Instansi Pemerintah'),
                'title' => 'Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan Instansi Pusat/Pemerintah Daerah',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 4         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Anggaran dan Belanja TIK'),
                'title' => 'Tidak terdapat kebijakan internal terkait perencanaan dan penganggaran TIK di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Anggaran dan Belanja TIK'),
                'title' => 'Terdapat konsep kebijakan internal terkait perencanaan dan penganggaran TIK di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Anggaran dan Belanja TIK'),
                'title' => 'Kebijakan internal telah ditetapkan dan mendukung pengaturan perencanaan dan penganggaran TIK  yang menyelaraSurat Keputusanan dengan sebagian muatan dari rencana induk SPBE',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Anggaran dan Belanja TIK'),
                'title' => 'Kebijakan internal telah mendukung pengaturan perencanaan dan penganggaran TIK yang menyelaraSurat Keputusanan dengan seluruh muatan dari rencana induk SPBE',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Anggaran dan Belanja TIK'),
                'title' => 'Kebijakan internal telah mendukung pengaturan perencanaan dan penganggaran TIK yang mencakup integrasi SPBE antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Anggaran dan Belanja TIK'),
                'title' => 'Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan Instansi Pusat/Pemerintah Daerah',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 5         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Pengoperasian Pusat Data'),
                'title' => 'Tidak terdapat kebijakan internal terkait pengoperasian pusat data di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Pengoperasian Pusat Data'),
                'title' => 'Terdapat konsep kebijakan internal terkait pengoperasian pusat data di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Pengoperasian Pusat Data'),
                'title' => 'Kebijakan internal telah ditetapkan dan mendukung pengaturan pengoperasian pusat data bagi sebagian unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Pengoperasian Pusat Data'),
                'title' => 'Kebijakan internal mendukung pengaturan pengoperasian pusat data bagi semua unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Pengoperasian Pusat Data'),
                'title' => 'Kebijakan  internal mendukung pengaturan pengoperasian pusat data untuk melaksanakan  integrasi  pusat  data dengan pusat data milik Instansi Pusat/Pemerintah Daerah lain atau  untuk rencana  transisi penggunaan pusat data nasional',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Pengoperasian Pusat Data'),
                'title' => 'Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 6         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Integrasi Sistem Aplikasi'),
                'title' => 'Tidak terdapat kebijakan internal terkait integrasi sistem aplikasi',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Integrasi Sistem Aplikasi'),
                'title' => 'Terdapat konsep kebijakan internal terkait integrasi sistem aplikasi',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Integrasi Sistem Aplikasi'),
                'title' => 'Kebijakan internal telah ditetapkan dan mendukung pengaturan integrasi sistem aplikasi pada sebagian sistem aplikasi di Instansi Pusat/ Pemerintah Daerah Saudara',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Integrasi Sistem Aplikasi'),
                'title' => 'Kebijakan internal mendukung pengaturan integrasi sistem aplikasi pada semua sistem aplikasi di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Integrasi Sistem Aplikasi'),
                'title' => 'Kebijakan internal mendukung pengaturan integrasi sistem aplikasi antar Instansi Pusat, antar Pemerintah Daerah, dan/atau antar Instansi Pusat dan Pemerintah Daerah',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Integrasi Sistem Aplikasi'),
                'title' => 'Kebijakan dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 7         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Penggunaan Aplikasi Umum Berbagi Pakai'),
                'title' => 'Tidak terdapat kebijakan internal terkait penggunaan aplikasi umum berbagi pakai',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Penggunaan Aplikasi Umum Berbagi Pakai'),
                'title' => 'Terdapat konsep kebijakan internal terkait penggunaan aplikasi umum berbagi pakai',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Penggunaan Aplikasi Umum Berbagi Pakai'),
                'title' => 'Kebijakan internal telah ditetapkan; hanya sebagian aplikasi umum berbagi pakai telah diatur dalam kebijakan internal tersebut',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Penggunaan Aplikasi Umum Berbagi Pakai'),
                'title' => 'Kebijakan internal mendukung pengaturan penggunaan semua aplikasi umum berbagi pakai di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Penggunaan Aplikasi Umum Berbagi Pakai'),
                'title' => 'Kebijakan internal mendukung pengaturan penggunaan aplikasi umum berbagi pakai yang dapat diintegrasikan dengan sistem aplikasi lain di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Penggunaan Aplikasi Umum Berbagi Pakai'),
                'title' => 'Kebijakan dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 8         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Naskah Dinas'),
                'title' => 'Tidak terdapat kebijakan internal terkait sistem naskah dinas elektronik',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Naskah Dinas'),
                'title' => 'Terdapat konsep kebijakan internal terkait sistem naskah dinas elektronik',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Naskah Dinas'),
                'title' => 'Kebijakan internal telah ditetapkan dan mendukung pengaturan sistem naskah dinas elektronik pada sebagian kebutuhan Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Naskah Dinas'),
                'title' => 'Kebijakan internal mendukung pengaturan seluruh kebutuhan dari sistem naskah dinas elektronik di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Naskah Dinas'),
                'title' => 'Kebijakan internal mendukung kebutuhan integrasi sistem naskah dinas elektronik dengan sistem naskah dinas elektronik sejenis atau sistem aplikasi lain di dalam Instansi Pusat/Pemerintah Daerah Saudara ataupun antar Instansi Pusat/Pemerintah Daerah',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Naskah Dinas'),
                'title' => 'Kebijakan dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 9         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Kepegawaian'),
                'title' => 'Tidak terdapat kebijakan internal terkait sistem kepegawaian',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Kepegawaian'),
                'title' => 'Terdapat konsep kebijakan internal terkait sistem kepegawaian',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Kepegawaian'),
                'title' => 'Kebijakan internal telah ditetapkan dan mendukung pengaturan sistem manajemen kepegawaian pada sebagian kebutuhan Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Kepegawaian'),
                'title' => 'Kebijakan internal mendukung pengaturan seluruh kebutuhan dari sistem manajemen kepegawaian di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Kepegawaian'),
                'title' => 'Kebijakan internal mendukung kebutuhan integrasi sistem manajemen kepegawaian dengan sistem manajemen kepegawaian Badan Kepegawaian Negara atau sistem aplikasi lain di dalam Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Kepegawaian'),
                'title' => 'Kebijakan dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 10         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Perencanaaan dan Penganggaran'),
                'title' => 'Tidak terdapat kebijakan internal terkait sistem manajemen perencanaan dan penganggaran',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Perencanaaan dan Penganggaran'),
                'title' => 'Terdapat konsep kebijakan internal terkait sistem manajemen perencanaan dan penganggaran',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Perencanaaan dan Penganggaran'),
                'title' => 'Kebijakan internal telah ditetapkan dan mendukung pengaturan sistem manajemen perencanaan dan penganggaran pada sebagian kebutuhan Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Perencanaaan dan Penganggaran'),
                'title' => 'Kebijakan internal mendukung pengaturan seluruh kebutuhan dari sistem manajemen perencanaan dan penganggaran di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Perencanaaan dan Penganggaran'),
                'title' => 'Kebijakan internal mendukung kebutuhan integrasi sistem manajemen perencanaan dan penganggaran dengan sistem aplikasi lain di dalam Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Perencanaaan dan Penganggaran'),
                'title' => 'Kebijakan dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 11         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Keuangan'),
                'title' => 'Tidak terdapat kebijakan internal terkait sistem manajemen keuangan',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Keuangan'),
                'title' => 'Terdapat konsep kebijakan internal terkait sistem manajemen keuangan',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Keuangan'),
                'title' => 'Kebijakan internal  telah ditetapkan dan  mendukung pengaturan sistem  manajemen  keuangan pada sebagian  kebutuhan Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Keuangan'),
                'title' => 'Kebijakan internal mendukung pengaturan seluruh kebutuhan dari sistem manajemen keuangan di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Keuangan'),
                'title' => 'Kebijakan internal mendukung kebutuhan integrasi sistem manajemen keuangan dengan sistem aplikasi lain di dalam Instansi Pusat/ Pemerintah Daerah Saudara',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Keuangan'),
                'title' => 'Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 12         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Kinerja'),
                'title' => 'Tidak terdapat kebijakan internal terkait sistem manajemen kinerja',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Kinerja'),
                'title' => 'Terdapat konsep kebijakan internal terkait sistem manajemen kinerja',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Kinerja'),
                'title' => 'Kebijakan internal   telah ditetapkan dan   mendukung  pengaturan sistem   manajemen   kinerja pada sebagian   kebutuhan Instansi Pusat/Pemerintah Saudara',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Kinerja'),
                'title' => 'Kebijakan internal telah mendukung pengaturan seluruh kebutuhan dari sistem manajemen kinerja di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Kinerja'),
                'title' => 'Kebijakan internal mendukung kebutuhan integrasi sistem manajemen kinerja dengan sistem aplikasi lain dalam Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Manajemen Kinerja'),
                'title' => 'Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 13         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Pengadaan'),
                'title' => 'Tidak terdapat kebijakan internal terkait sistem pengadaan secara elektronik',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Pengadaan'),
                'title' => 'Terdapat konsep kebijakan internal terkait sistem pengadaan secara elektronik',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Pengadaan'),
                'title' => 'Kebijakan internal telah ditetapkan dan mendukung pengaturan sistem pengadaan secara elektronik pada sebagian kebutuhan Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Pengadaan'),
                'title' => 'Kebijakan internal telah mendukung pengaturan seluruh kebutuhan dari sistem pengadaan secara elektronik di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Pengadaan'),
                'title' => 'Kebijakan internal mendukung kebutuhan integrasi sistem pengadaan secara elektronik dengan sistem aplikasi lain dalam Instansi Pusat/Pemerintah Daerah',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Pengadaan'),
                'title' => 'Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 14         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Pengaduan Publik'),
                'title' => 'Tidak terdapat kebijakan internal terkait sistem pengaduan publik',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Pengaduan Publik'),
                'title' => 'Terdapat konsep kebijakan internal terkait sistem pengaduan publik',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Pengaduan Publik'),
                'title' => 'Kebijakan internal telah ditetapkan dan mendukung pengaturan sistem pengaduan publik pada sebagian kebutuhan Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Pengaduan Publik'),
                'title' => 'Kebijakan internal telah mendukung seluruh kebutuhan dari sistem pengaduan publik di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Pengaduan Publik'),
                'title' => 'Kebijakan mendukung kebutuhan integrasi sistem pengaduan publik dengan sistem aplikasi lain di dalam Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Pengaduan Publik'),
                'title' => 'Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 15         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Dokumentasi dan Informasi Hukum'),
                'title' => 'Tidak terdapat kebijakan internal terkait sistem jaringan dokumentasi dan informasi hukum (JDIH',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Dokumentasi dan Informasi Hukum'),
                'title' => 'Terdapat konsep kebijakan internal terkait sistem jaringan dokumentasi dan informasi hukum (JDIH',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Dokumentasi dan Informasi Hukum'),
                'title' => 'Kebijakan internal telah ditetapkan dan mendukung pengaturan sistem jaringan dokumentasi dan informasi hukum (JDIH) pada sebagian kebutuhan di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Dokumentasi dan Informasi Hukum'),
                'title' => 'Kebijakan internal telah ditetapkan dan mendukung seluruh kebutuhan dari sistem jaringan dokumentasi dan informasi hukum (JDIH) di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Dokumentasi dan Informasi Hukum'),
                'title' => 'Kebijakan internal mendukung kebutuhan integrasi sistem jaringan dokumentasi dan informasi hukum (JDIH) antar Instansi Pusat/Pemerintah Daerah',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Dokumentasi dan Informasi Hukum'),
                'title' => 'Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 16         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Whistle Blowing System (WBS)'),
                'title' => 'Tidak terdapat kebijakan internal terkait WBS',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Whistle Blowing System (WBS)'),
                'title' => 'Terdapat konsep kebijakan internal terkait WBS',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Whistle Blowing System (WBS)'),
                'title' => 'Kebijakan internal telah ditetapkan dan mendukung pengaturan WBS pada sebagian kebutuhan di  Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Whistle Blowing System (WBS)'),
                'title' => 'Kebijakan internal telah ditetapkan dan mendukung seluruh kebutuhan WBS di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Whistle Blowing System (WBS)'),
                'title' => 'Kebijakan internal mendukung kebutuhan integrasi WBS dengan sistem aplikasi lain di dalam Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan Whistle Blowing System (WBS)'),
                'title' => 'Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 17         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan publik Instansi Pemerintah'),
                'title' => 'Tidak terdapat kebijakan internal terkait sistem pelayanan publik pada Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan publik Instansi Pemerintah'),
                'title' => 'Terdapat konsep kebijakan internal terkait sistem pelayanan publik pada Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan publik Instansi Pemerintah'),
                'title' => 'Kebijakan internal  telah ditetapkan dan  mendukung  sebagian  kebutuhan  dari  sistem pelayanan publik di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan publik Instansi Pemerintah'),
                'title' => 'Kebijakan internal telah mendukung seluruh kebutuhan dari sistem pelayanan publik di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan publik Instansi Pemerintah'),
                'title' => 'Kebijakan mendukung kebutuhan dari sistem pelayanan publik antar Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Kebijakan Internal Layanan publik Instansi Pemerintah'),
                'title' => 'Kebijakan internal dipantau, dinilai, dan dievaluasi secara berkala terhadap perubahan lingkungan, teknologi, dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 18         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Tim Pengarah SPBE Instansi Pemerintah'),
                'title' => 'Tidak terdapat Tim pengarah SPBE',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Tim Pengarah SPBE Instansi Pemerintah'),
                'title' => 'Terdapat Tim pengarah SPBE, tetapi belum dilegalisasi; Tugas dan fungsi Tim pengarah SPBE dilaksanakan secara sementara (ad-hoc)',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Tim Pengarah SPBE Instansi Pemerintah'),
                'title' => 'Terdapat Tim pengarah SPBE, dan sudah dilegalisasi;  Tugas dan fungsi Tim pengarah SPBE telah melaksanakan sebagian tugas dan fungsinya',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Tim Pengarah SPBE Instansi Pemerintah'),
                'title' => 'Tim pengarah SPBE telah melaksanakan tugas dan fungsinya secara keseluruhan',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Tim Pengarah SPBE Instansi Pemerintah'),
                'title' => 'Tugas dan fungsi Tim pengarah SPBE dapat dipantau dan dievaluasi secara berkala',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Tim Pengarah SPBE Instansi Pemerintah'),
                'title' => 'Kinerja Tim pengarah SPBE ditingkatkan secara berkesinambungan sebagai tindak lanjut hasil pemantauan dan evaluasi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 19         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Inovasi Proses Bisnis Terintegrasi'),
                'title' => 'Tidak terdapat dokumen proses bisnis pada Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Inovasi Proses Bisnis Terintegrasi'),
                'title' => 'Terdapat dokumen proses bisnis yang disusun secara sementara (ad-hoc); Belum terdapat standardisasi proses bisnis',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Inovasi Proses Bisnis Terintegrasi'),
                'title' => 'Proses bisnis yang tertuang dalam dokumen yang terstandarkan, diterapkan pada sebagian unit kerja di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Inovasi Proses Bisnis Terintegrasi'),
                'title' => 'Proses bisnis yang tertuang dalam dokumen yang terstandarkan, diterapkan pada seluruh unit kerja di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Inovasi Proses Bisnis Terintegrasi'),
                'title' => 'Penerapan proses bisnis yang terintegrasi dengan sistem elektronik dan dapat dipantau serta dievaluasi secara berkala',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Inovasi Proses Bisnis Terintegrasi'),
                'title' => 'Penerapan proses bisnis yang terintegrasi diperbaiki secara berkesinambungan sebagai tindak lanjut hasil pemantauan dan evaluasi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 20         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Rencana Induk SPBE Instansi Pemerintah'),
                'title' => 'Tidak terdapat dokumen rencana induk SPBE',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Rencana Induk SPBE Instansi Pemerintah'),
                'title' => 'Terdapat konsep dokumen rencana induk SPBE',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Rencana Induk SPBE Instansi Pemerintah'),
                'title' => 'Terdapat dokumen rencana induk SPBE yang mencakup sebagian dari muatan visi dan misi SPBE, arsitektur SPBE (arsitektur bisnis, arsitektur data, arsitektur aplikasi, arsitektur teknologi dan arsitektur keamanan), dan peta jalan SPBE',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Rencana Induk SPBE Instansi Pemerintah'),
                'title' => 'Terdapat dokumen rencana induk SPBE yang mencakup semua muatan visi dan misi SPBE, arsitektur SPBE (arsitektur bisnis, arsitektur data, arsitektur aplikasi, arsitektur teknologi, dan arsitektur keamanan), dan peta jalan SPBE',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Rencana Induk SPBE Instansi Pemerintah'),
                'title' => 'Pelaksanaan peta jalan rencana induk SPBE diterapkan secara konsisten melalui rencana kerja 3 (tiga) tahun terakhir  dan dipantau serta dievaluasi secara berkala',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Rencana Induk SPBE Instansi Pemerintah'),
                'title' => 'Peta jalan rencana induk SPBE dilakukan pemutakhiran secara berkesinambungan sebagai tindak lanjut hasil pemantauan dan evaluasi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 21         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Anggaran dan Belanja TIK'),
                'title' => 'Tidak terdapat perencanaan dan penganggaran TIK untuk penerapan SPBE',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Anggaran dan Belanja TIK'),
                'title' => 'Terdapat perencanaan dan penganggaran TIK  yang tertuang dalam rencana kerja tahunan untuk penerapan SPBE',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Anggaran dan Belanja TIK'),
                'title' => 'Terdapat perencanaan dan penganggaran TIK  yang tertuang dalam rencana kerja tahunan; sebagian perencanaan dan penganggaran TIK dikonsultasikan kepada unit pengelola TIK di Instansi Pusat/Pemerintah Daerah masing-masing',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Anggaran dan Belanja TIK'),
                'title' => 'Terdapat perencanaan dan penganggaran TIK  yang tertuang dalam rencana kerja tahunan; seluruh perencanaan dan penganggaran TIK dikonsultasikan kepada unit pengelola TIK',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Anggaran dan Belanja TIK'),
                'title' => 'Seluruh perencanaan dan penganggaran TIK yang tertuang dalam rencana kerja tahunan di Instansi Pusat/Pemerintah Daerah Saudara telah terintegrasi dan dapat dikendalikan di unit pengelola TIK, serta dapat dipantau dan dievaluasi secara berkala',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Anggaran dan Belanja TIK'),
                'title' => 'Hasil evaluasi seluruh perencanaan dan penganggaran TIK  yang terintegrasi di unit pengelola TIK ditindaklanjuti sebagai masukan perbaikan penyusunan anggaran tahun berikutnya',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 22         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Pengoperasian Pusat Data'),
                'title' => 'Tidak terdapat layanan pusat data (data center)',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Pengoperasian Pusat Data'),
                'title' => 'Tersedia layanan pusat data (data center) yang disediakan oleh jasa layanan pusat data non pemerintah',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Pengoperasian Pusat Data'),
                'title' => 'Tersedia satu atau lebih layanan pusat data (data center) yang dimiliki oleh instansi pemerintah; Terdapat prosedur pengoperasian baku layanan pusat data; Sudah dimanfaatkan oleh sebagian unit kerja/perangkat daerah; pengendalian layanan berada di beberapa unit kerja/perangkat daerah',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Pengoperasian Pusat Data'),
                'title' => 'Prosedur pengoperasian baku pusat data (data center) telah diterapkan secara konsisten oleh seluruh unit kerja/perangkat daerah di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Pengoperasian Pusat Data'),
                'title' => 'Pengendalian satu atau lebih layanan pusat data (data center) dilakukan secara terpusat; Monitoring dan perencanaan kapasitas dilakukan secara berkala berdasarkan hasil analisis rekaman aktivitas pusat data (data center)',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Pengoperasian Pusat Data'),
                'title' => 'Kinerja pengoperasian layanan pusat data (data center) ditingkatkan secara berkesinambungan sebagai tindak lanjut hasil pemantauan dan evaluasi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 23         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Integrasi Sistem Aplikasi'),
                'title' => 'Tidak terdapat rencana integrasi sistem aplikasi',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Integrasi Sistem Aplikasi'),
                'title' => 'Terdapat integrasi sistem aplikasi secara sementara (ad-hoc)',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Integrasi Sistem Aplikasi'),
                'title' => 'Terdapat rencana integrasi sistem aplikasi tetapi diterapkan hanya sebagian dari rencana tersebut di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Integrasi Sistem Aplikasi'),
                'title' => 'Integrasi sistem aplikasi telah dilakukan secara keseluruhan sesuai rencana di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Integrasi Sistem Aplikasi'),
                'title' => 'Integrasi sistem aplikasi Instansi Pusat/Pemerintah Daerah dapat dikendalikan, dinilai secara kuantitatif dan dievaluasi secara berkala',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Integrasi Sistem Aplikasi'),
                'title' => 'Integrasi sistem aplikasi dikembangkan secara optimal untuk meningkatkan efektivitas dan efisiensi terhadap perubahan lingkungan, teknologi, dan kebutuhan Instansi Pusat/Pemerintah Daerah',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 24         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Penggunaan Aplikasi Umum Berbagi Pakai'),
                'title' => 'Tidak terdapat rencana penggunaan aplikasi umum berbagi pakai',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Penggunaan Aplikasi Umum Berbagi Pakai'),
                'title' => 'Terdapat penggunaan aplikasi umum berbagi pakai secara sementara (ad-hoc); Belum terdapat rencana penggunaan aplikasi umum berbagi pakai',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Penggunaan Aplikasi Umum Berbagi Pakai'),
                'title' => 'Terdapat  rencana  penggunaan  aplikasi  umum  berbagi  pakai  tetapi  diterapkan  hanya sebagian  dari  rencana tersebut di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Penggunaan Aplikasi Umum Berbagi Pakai'),
                'title' => 'Penggunaan aplikasi umum berbagi pakai telah dilakukan secara keseluruhan sesuai rencana di Instansi Pusat/Pemerintah Daerah Saudara',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Penggunaan Aplikasi Umum Berbagi Pakai'),
                'title' => 'Penggunaan aplikasi umum berbagi pakai Instansi Pemerintah dapat dikendalikan, dinilai secara kuantitatif dan dievaluasi secara berkala',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Penggunaan Aplikasi Umum Berbagi Pakai'),
                'title' => 'Kinerja aplikasi umum berbagi pakai ditingkatkan secara berkesinambungan sebagai tindak lanjut hasil pemantauan dan evaluasi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 25         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Layanan Naskah Dinas'),
                'title' => 'Tidak terdapat sistem naskah dinas',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Naskah Dinas'),
                'title' => 'Sistem naskah dinas elektronik hanya menyediakan diseminasi (penyebaran satu arah) informasi seperti surat undangan, surat disposisi, dan surat resmi',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Naskah Dinas'),
                'title' => 'Sistem naskah dinas elektronik menyediakan layanan interaksi seperti pencarian informasi, pengiriman (unggah) e-dokumen, dan penerimaan (unduh) e-dokumen seperti surat undangan, surat disposisi, dan surat resmi',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Naskah Dinas'),
                'title' => 'Sistem naskah dinas elektronik menyediakan layanan transaksi dimana pengguna dapat mengunggah e-dokumen dan memasukkan informasi ke dalam sistem, dan sistem dapat merespon kepada pengguna seperti mekanisme persetujuan, penyematan tanda tangan digital dan pengiriman e-dokumen ke tujuan penerima di internal Instansi Pusat/Pemerintah Daerah',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Naskah Dinas'),
                'title' => 'Sistem naskah dinas elektronik menyediakan layanan kolaborasi dimana layanan persuratan diintegrasikan dengan suatu layanan SPBE misalnya layanan manajemen kepegawaian atau diintegrasikan dengan layanan SPBE instansi pemerintah lain',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Naskah Dinas'),
                'title' => 'Sistem naskah dinas elektronik dapat terus ditingkatkan dengan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 26         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Kepegawaian'),
                'title' => 'Tidak terdapat sistem manajemen kepegawaian',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Kepegawaian'),
                'title' => 'Sistem manajemen kepegawaian menyediakan diseminasi (penyebaran satu arah) seperti informasi nomor ID pegawai, riwayat jabatan, riwayat pendidikan, dan lain sebagainya',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Kepegawaian'),
                'title' => 'Sistem manajemen kepegawaian menyediakan layanan interaksi seperti mencari informasi kepegawaian dan mengunduh dokumen data diri pegawai',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Kepegawaian'),
                'title' => 'Sistem manajemen kepegawaian menyediakan layanan transaksi dimana pengguna dapat mengunduh atau  mengunggah  informasi,  dan  sistem  dapat  merespon  kepada  pengguna  seperti  mekanismePerformancesetujuan kenaikan pangkat, pengajuan cuti, dokumen pegawai, dan lain sebagainya',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Kepegawaian'),
                'title' => 'Sistem manajemen kepegawaian menyediakan layanan kolaborasi dimana layanan kepegawaian diintegrasikan dengan suatu layanan SPBE lain seperti layanan  disposisi  dan korespondensi  atau diintegrasikan dengan layanan SPBE instansi pemerintah lain seperti Badan Kepegawaian Negara (BKN)',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Kepegawaian'),
                'title' => 'Sistem manajemen kepegawaian dapat terus ditingkatkan dengan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 27         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Perencanaan'),
                'title' => 'Tidak terdapat sistem manajemen perencanaan',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Perencanaan'),
                'title' => 'Sistem manajemen perencanaan menyediakan diseminasi (penyebaran satu arah) seperti informasi jumlah anggaran yang tersedia',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Perencanaan'),
                'title' => 'Sistem manajemen perencanaan menyediakan layanan interaksi seperti mencari informasi dan mengunduh dokumen terkait perencanaan kegiatan',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Perencanaan'),
                'title' => 'Sistem manajemen perencanaan menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi perencanaan kegiatan, dan sistem dapat merespon kepada pengguna seperti mekanismePerformancesetujuan dan validasi perencanaan kegiatan di internal Instansi Pusat/Pemerintah Daerah',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Perencanaan'),
                'title' => 'Sistem manajemen perencanaan menyediakan layanan kolaborasi dimana layanan perencanaan diintegrasikan dengan suatu layanan seperti layanan manajemen pegawai, layanan manajemen keuangan dan  lain  sebagainya  atau  diintegrasikan  dengan  layanan  SPBE  instansi  pemerintah  lain',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Perencanaan'),
                'title' => 'Sistem manajemen perencanaan dapat terus ditingkatkan dengan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 28         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Penganggaran'),
                'title' => 'Tidak terdapat sistem manajemen penganggaran',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Penganggaran'),
                'title' => 'Sistem manajemen penganggaran menyediakan diseminasi (penyebaran satu arah) seperti informasi jumlah anggaran yang tersedia',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Penganggaran'),
                'title' => 'Sistem manajemen penganggaran menyediakan layanan interaksi seperti mencari informasi dan mengunduh dokumen terkait penganggaran',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Penganggaran'),
                'title' => 'Sistem manajemen penganggaran menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi penganggaran, dan sistem dapat merespon kepada pengguna seperti mekanismePerformancesetujuan dan validasi penganggaran di internal Instansi Pemerintah',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Penganggaran'),
                'title' => 'Sistem manajemen penganggaran menyediakan layanan kolaborasi dimana layanan penganggaran diintegrasikan dengan suatu layanan seperti layanan manajemen pegawai, layanan manajemen keuangan dan  lain  sebagainya  atau  diintegrasikan  dengan  layanan  SPBE  instansi  pemerintah lain  seperti Kementerian Keuangan',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Penganggaran'),
                'title' => 'Sistem manajemen penganggaran dapat terus ditingkatkan dengan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 29         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Keuangan'),
                'title' => 'Tidak terdapat sistem manajemen keuangan',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Keuangan'),
                'title' => 'Sistem  manajemen  keuangan  menyediakan  diseminasi (penyebaran satu arah)  seperti  informasi  administrasi keuangan',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Keuangan'),
                'title' => 'Sistem manajemen keuangan menyediakan layanan interaksi seperti mencari informasi, mengunduh dokumen terkait keuangan, dan memasukkan data keuangan',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Keuangan'),
                'title' => 'Sistem manajemen keuangan menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah  informasi  terkait  keuangan,  dan  sistem  dapat  merespon  kepada  pengguna  seperti mekanismePerformancesetujuan dari atasan dan validasi keuangan di internal Instansi Pusat/Pemerintah Daerah',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Keuangan'),
                'title' => 'Sistem manajemen keuangan menyediakan layanan kolaborasi dimana layanan keuangan diintegrasikan dengan suatu layanan seperti layanan manajemen kepegawaian, layanan manajemen penganggaran dan layanan kinerja elektronik atau diintegrasikan dengan layanan SPBE instansi pemerintah lain seperti Kementerian Keuangan',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Keuangan'),
                'title' => 'Sistem  manajemen  keuangan  dapat  terus  ditingkatkan  dengan  menyesuaikan  terhadap  perubahan lingkungan, teknologi dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 30         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Kinerja'),
                'title' => 'Tidak terdapat sistem manajemen kinerja',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Kinerja'),
                'title' => 'Sistem manajemen kinerja menyediakan diseminasi (penyebaran satu arah) seperti indikator dan target kinerja',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Kinerja'),
                'title' => 'Sistem  manajemen  kinerja  menyediakan  layanan  interaksi  seperti  mencari  informasi  dan  mengunggah kemajuan kinerja dan menampilkan rasio (persentase) kemajuan kinerja',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Kinerja'),
                'title' => 'Sistem manajemen kinerja menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi terkait kinerja, dan sistem dapat merespon kepada pengguna seperti mekanismePerformancesetujuan kinerja unit organisasi dari atasan dan validasi kinerja di internal Instansi Pusat/Pemerintah Daerah',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Kinerja'),
                'title' => 'Sistem manajemen kinerja menyediakan layanan kolaborasi yang diintegrasikan dengan layanan SPBE lainnya seperti layanan manajemen penganggaran, layanan Monev, RKPD, e-Musrembang, dan sebagainya',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Manajemen Kinerja'),
                'title' => 'Sistem   manajemen   kinerja   dapat   terus   ditingkatkan   dengan   menyesuaikan   terhadap   perubahan lingkungan, teknologi dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 31         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Layanan Pengadaan'),
                'title' => 'Tidak terdapat sistem pengadaan secara elektronik',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Pengadaan'),
                'title' => 'Sistem pengadaan secara elektronik menyediakan diseminasi (penyebaran satu arah) seperti informasi daftar lelang barang dan jasa yang dibutuhkan oleh instansi',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Pengadaan'),
                'title' => 'Sistem pengadaan secara elektronik menyediakan layanan interaksi seperti mencari informasi, mengunduh dan mengunggah dokumen, dan memasukkan data terkait pengadaan',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Pengadaan'),
                'title' => 'Sistem pengadaan secara elektronik menyediakan layanan transaksi dimana pengguna dapat mengunduh atau mengunggah informasi terkait pengadaan, dan sistem dapat merespon kepada pengguna seperti mekanismePerformancesetujuan dan validasi pada alur proses pengadaan, verifikasi penyedia',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Pengadaan'),
                'title' => 'Sistem pengadaan secara elektronik menyediakan layanan kolaborasi dimana layanan pengadaan secara elektronik diintegrasikan dengan suatu layanan seperti layanan manajemen penganggaran dan layanan keuangan atau diintegrasikan dengan layanan SPBE instansi pemerintah lainnya',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Pengadaan'),
                'title' => 'Sistem pengadaan secara elektronik dapat terus ditingkatkan dengan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 32         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Layanan Pengaduan Publik'),
                'title' => 'Tidak terdapat sistem pengaduan publik	',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Pengaduan Publik'),
                'title' => 'Sistem  pengaduan  publik  menyediakan  diseminasi (penyebaran satu arah)  seperti  waktu  respon  dan  tata  cara pengaduan',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Pengaduan Publik'),
                'title' => 'Sistem  pengaduan  publik  menyediakan  layanan  interaksi  seperti  mencari  informasi  dan  menyampaikan pengaduan',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Pengaduan Publik'),
                'title' => 'Sistem pengaduan publik menyediakan layanan transaksi dimana pengguna dapat menyampaikan pengaduan, dan sistem dapat merespon kepada pengguna seperti kemajuan penyelesaian pengaduan dan resolusi pengaduan	',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Pengaduan Publik'),
                'title' => 'Sistem   pengaduan   publik   menyediakan   layanan   kolaborasi dimana layanan   pengaduan   publik diintegrasikan dengan suatu  layanan  seperti  layanan  manajemen  kinerja,  atau  diintegrasikan  dengan layanan SPBE instansi pemerintah lain seperti layanan identifikasi penduduk (administrasi kependudukan)	',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Pengaduan Publik'),
                'title' => 'Sistem pengaduan publik dapat terus ditingkatkan dengan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 33         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Layanan Dokumentasi dan Informasi Hukum'),
                'title' => 'Tidak terdapat sistem jaringan dokumentasi dan informasi hukum (JDIH)',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Dokumentasi dan Informasi Hukum'),
                'title' => 'Sistem jaringan dokumentasi dan informasi hukum (JDIH) menyediakan diseminasi (penyebaran satu arah) seperti informasi hukum, regulasi, dan lain sebagainya',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Dokumentasi dan Informasi Hukum'),
                'title' => 'Sistem jaringan dokumentasi dan informasi hukum (JDIH) menyediakan layanan interaksi seperti mencari informasi dan mengunduh dokumen terkait hukum',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Dokumentasi dan Informasi Hukum'),
                'title' => 'Sistem  jaringan  dokumentasi  dan  informasi  hukum  (JDIH)   menyediakan  layanan  transaksi  dimana pengguna dapat mengunggah informasi terkait hukum, dan sistem dapat merespon kepada pengguna seperti validasi informasi produk hukum dan validasi dokumen digital produk hukum',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Dokumentasi dan Informasi Hukum'),
                'title' => 'Sistem  jaringan  dokumentasi  dan  informasi  hukum  (JDIH)  menyediakan  layanan  kolaborasi  dimana layanan jaringan dokumentasi dan informasi hukum (JDIH) diintegrasikan dengan layanan SPBE instansi pemerintah lain seperti Kementerian Hukum dan HAM',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Dokumentasi dan Informasi Hukum'),
                'title' => 'Sistem jaringan dokumentasi dan informasi hukum (JDIH) dapat terus ditingkatkan dengan menyesuaikan terhadap perubahan lingkungan, teknologi dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 34         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Layanan Whistle-Blowing System'),
                'title' => 'Tidak terdapat WBS',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Whistle-Blowing System'),
                'title' => 'WBS menerima informasi pengaduan dari pelapor',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Whistle-Blowing System'),
                'title' => 'WBS menyediakan layanan interaksi seperti mencari informasi dan menyampaikan laporan',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Whistle-Blowing System'),
                'title' => 'WBS menyediakan layanan transaksi dimana pengguna dapat menyampaikan laporan dan sistem dapat merespon kepada pengguna seperti kemajuan penyelesaian laporan dan resolusi laporan',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Whistle-Blowing System'),
                'title' => 'WBS menyediakan layanan kolaborasi dimana layanan WBS diintegrasikan dengan suatu layanan seperti layanan manajemen kinerja atau diintegrasikan dengan layanan SPBE instansi pemerintah lain',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Whistle-Blowing System'),
                'title' => 'WBS  dapat  terus  ditingkatkan  dengan  menyesuaikan  terhadap  perubahan  lingkungan,  teknologi  dan kebutuhan instansi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 35         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Layanan Publik Instansi Pemerintah'),
                'title' => 'Tidak terdapat sistem pelayanan publik',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Publik Instansi Pemerintah'),
                'title' => 'Sistem pelayanan publik menyediakan diseminasi (penyebaran satu arah)',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Publik Instansi Pemerintah'),
                'title' => 'Sistem pelayanan publik menyediakan layanan interaksi',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Publik Instansi Pemerintah'),
                'title' => 'Sistem pelayanan publik menyediakan layanan transaksi',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Publik Instansi Pemerintah'),
                'title' => 'Sistem pelayanan publik menyediakan layanan kolaborasi',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Publik Instansi Pemerintah'),
                'title' => 'Sistem pelayanan publik menyediakan layanan optimalisasi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 36         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Layanan Publik Instansi Pemerintah'),
                'title' => 'Tidak terdapat sistem pelayanan publik',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Publik Instansi Pemerintah'),
                'title' => 'Sistem pelayanan publik menyediakan diseminasi (penyebaran satu arah)',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Publik Instansi Pemerintah'),
                'title' => 'Sistem pelayanan publik menyediakan layanan interaksi',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Publik Instansi Pemerintah'),
                'title' => 'Sistem pelayanan publik menyediakan layanan transaksi',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Publik Instansi Pemerintah'),
                'title' => 'Sistem pelayanan publik menyediakan layanan kolaborasi',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Publik Instansi Pemerintah'),
                'title' => 'Sistem pelayanan publik menyediakan layanan optimalisasi',
                'level' => '5'
            ],

            //---------------------------------         INDICATOR 37         ---------------------------------------\\

            [
                'indicator_id' => $this->get_indicator_id('Layanan Publik Instansi Pemerintah'),
                'title' => 'Tidak terdapat sistem pelayanan publik',
                'level' => '0'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Publik Instansi Pemerintah'),
                'title' => 'Sistem pelayanan publik menyediakan diseminasi (penyebaran satu arah)',
                'level' => '1'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Publik Instansi Pemerintah'),
                'title' => 'Sistem pelayanan publik menyediakan layanan interaksi',
                'level' => '2'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Publik Instansi Pemerintah'),
                'title' => 'Sistem pelayanan publik menyediakan layanan transaksi',
                'level' => '3'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Publik Instansi Pemerintah'),
                'title' => 'Sistem pelayanan publik menyediakan layanan kolaborasi',
                'level' => '4'
            ],
            [
                'indicator_id' => $this->get_indicator_id('Layanan Publik Instansi Pemerintah'),
                'title' => 'Sistem pelayanan publik menyediakan layanan optimalisasi',
                'level' => '5'
            ],
        ];

        IndicatorOption::query()->insert($indicator_options);
    }
}
