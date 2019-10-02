<?php

use App\Aspect;
use App\Domain;
use Illuminate\Database\Seeder;

class AspectsTableSeeder extends Seeder
{
    public function get_domain_id($name) {
        return Domain::query()->where('name', '=', $name)->first()->id;
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $aspects = [
            [
                'domain_id' => $this->get_domain_id('Kebijakan Internal SPBE'),
                'name' => 'Kebijakan Internal Tata Kelola SPBE'
            ],
            [
                'domain_id' => $this->get_domain_id('Kebijakan Internal SPBE'),
                'name' => 'Kebijakan Internal Layanan SPBE'
            ],
            [
                'domain_id' => $this->get_domain_id('Tata Kelola SPBE'),
                'name' => 'Kelembagaan'
            ],
            [
                'domain_id' => $this->get_domain_id('Tata Kelola SPBE'),
                'name' => 'Strategi dan Perencanaan'
            ],
            [
                'domain_id' => $this->get_domain_id('Tata Kelola SPBE'),
                'name' => 'Teknologi Informasi dan Komunikasi'
            ],
            [
                'domain_id' => $this->get_domain_id('Layanan SPBE'),
                'name' => 'Layanan Administrasi Pemerintahan Berbasis Elektronik'
            ],
            [
                'domain_id' => $this->get_domain_id('Layanan SPBE'),
                'name' => 'Layanan Publik Berbasis Elektronik'
            ],
        ];

        Aspect::query()->insert($aspects);
    }
}
