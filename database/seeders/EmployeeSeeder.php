<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('employees')->insert([
            'sectorDistrict_id'=> 1 ,
            'login'=> 'samsampanda',
            'password'=> Hash::make('password'),
            'code'=> 'a92',
            'leader_id'=> '55',
            'postalCode'=> '85000',
            'firstname'=> 'samy',
            'lastname'=> 'alexandre',
            'address'=> '10 rue jean moulin',
            'city'=> 'La roche sur yon',
            'phone'=> '0661785948',
            'entryDate'=> '1995-01-12',
        ]);
    }
}
