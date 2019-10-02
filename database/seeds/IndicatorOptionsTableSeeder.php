<?php

use App\IndicatorOption;
use Illuminate\Database\Seeder;

class IndicatorOptionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $indicator_options = [
            [

            ]
        ];

        IndicatorOption::query()->insert($indicator_options);
    }
}
