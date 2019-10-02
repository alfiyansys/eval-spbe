<?php

use App\Domain;
use Illuminate\Database\Seeder;

class DomainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $domains = [
            [
                'name' => 'Kebijakan Internal SPBE'
            ],
            [
                'name' => 'Tata Kelola SPBE'
            ],
            [
                'name' => 'Layanan SPBE'
            ]
        ];

        Domain::query()->insert($domains);
    }
}
