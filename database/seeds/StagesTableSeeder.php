<?php

use App\Stage;
use Illuminate\Database\Seeder;

class StagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stages = [
            [
                'name' => 'Evaluasi Mandiri'
            ],
            [
                'name' => 'Evaluasi Dokumen'
            ],
            [
                'name' => 'Wawancara'
            ],
            [
                'name' => 'Observasi Lapangan'
            ],
            [
                'name' => 'Adjustment Final'
            ],
        ];

        Stage::query()->insert($stages);
    }
}
