<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class FormsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $forms = [
//            [
//                'year' => now()->year,
//                'name' => null,
//                'description' => null,
//                'version' => null,
//                'start_date' => null,
//                'end_date' => null
//            ],
            [
                'year' => 2018,
                'name' => 'TestForm',
                'description' => 'Just for test',
                'version' => 1,
                'start_date' => Carbon::yesterday()->toDate(),
                'end_date' => Carbon::yesterday()->toDate()
            ],
            [
                'year' => 2019,
                'name' => 'AnotherTestForm',
                'description' => 'Same, just for test',
                'version' => 1,
                'start_date' => now()->toDate(),
                'end_date' => now()->toDate()
            ]
        ];
    }
}
