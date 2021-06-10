<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TableSeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<=20; $i++){
            DB::table('tables')->insert([            
                'table_number' => $i+1,
                'table_id' => $i.Str::random(4),
                'section' => '1',
                'position' => '1',
                'status' => 'active',               
            ]);
        }
        
    }
}
