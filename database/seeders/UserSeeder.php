<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'first_name' => 'Admin',
            'last_name'  => 'Admin',           
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        //Staff Seeder

        DB::table('users')->insert([
            'first_name' => 'Sharon',
            'last_name' => 'Adhiambo Oduor',
            'staff_number' => '42',
            'position' => 'cashier',
            'role' => 'staff',
            'email' => 'sharon'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Anita',
            'last_name' => 'Oneya Omuruli',
            'staff_number' => '40',
            'position' => 'wait',
            'role' => 'staff',
            'email' => 'anita'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'George',
            'last_name' => 'Morigo Mwangi',
            'staff_number' => '39',
            'position' => 'wait',
            'role' => 'staff',
            'email' => 'george'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Marylin',
            'last_name' => 'Aluoch Odhiambo',
            'staff_number' => '38',
            'position' => 'cashier',
            'role' => 'staff',
            'email' => 'marylin'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Macdonald',
            'last_name' => 'Ondigo Obondi',
            'staff_number' => '36',
            'position' => 'head chef',
            'role' => 'admin',
            'email' => 'macdonald'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Moses',
            'last_name' => 'Mbae Njoroge',
            'staff_number' => '35',
            'position' => 'bartender',
            'role' => 'staff',
            'email' => 'mbae'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Esther Muya',
            'last_name' => 'Esther Muya',
            'staff_number' => '34',
            'position' => 'asst. accountant',
            'role' => 'staff',
            'email' => 'esther'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'James',
            'last_name' => 'Mutiso',
            'staff_number' => '33',
            'position' => 'steward',
            'role' => 'staff',
            'email' => 'james'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Simon',
            'last_name' => 'Khachina Sakwa',
            'staff_number' => '32',
            'position' => 'cook',
            'role' => 'staff',
            'email' => 'simon'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Shamim',
            'last_name' => 'Aseda Anyango',
            'staff_number' => '29',
            'position' => 'wait',
            'role' => 'staff',
            'email' => 'shamim'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Lawrence',
            'last_name' => 'Muderema Jumba',
            'staff_number' => '27',
            'position' => 'sous-chef',
            'role' => 'staff',
            'email' => 'lawrence'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Benson',
            'last_name' => 'Maingi Ndeti',
            'staff_number' => '24',
            'position' => 'steward',
            'role' => 'staff',
            'email' => 'benson'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Noel',
            'last_name' => 'Imali Amolla',
            'staff_number' => '19',
            'position' => 'head waitress',
            'role' => 'admin',
            'email' => 'noel'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Joshua',
            'last_name' => 'Muli Muange',
            'staff_number' => '18',
            'position' => 'steward',
            'role' => 'staff',
            'email' => 'joshua'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Moses',
            'last_name' => 'Kyalo Musembi',
            'staff_number' => '17',
            'position' => 'cook',
            'role' => 'staff',
            'email' => 'moses'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Kevin',
            'last_name' => 'Otieno Olele',
            'staff_number' => '16',
            'position' => 'restaurant manager',
            'role' => 'admin',
            'email' => 'kevin'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Eliud',
            'last_name' => 'Maina Muthuri',
            'staff_number' => '10',
            'position' => 'cook',
            'role' => 'staff',
            'email' => 'eluid'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Shadrack',
            'last_name' => 'Kilei Mweu',
            'staff_number' => '3',
            'position' => 'store keeper',
            'role' => 'admin',
            'email' => 'shadrack'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Mary',
            'last_name' => 'Wambui Maingi',
            'staff_number' => '1',
            'position' => 'service supervisor',
            'role' => 'admin',
            'email' => 'mary'.'@captains.com',
            'password' => Hash::make('password'),
        ]);

        //Tech Team

        DB::table('users')->insert([
            'first_name' => 'Calvin',          
            'last_name' => 'Magezi',          
            'role' => 'admin',
            'email' => 'calvinmagezi@ymail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'Admin',          
            'last_name' => 'Admin',          
            'role' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'first_name' => 'staff',          
            'last_name' => 'staff',          
            'role' => 'staff',
            'email' => 'staff@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
    
}
