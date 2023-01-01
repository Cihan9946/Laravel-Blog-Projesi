<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'=>'Mustafa Cihan',
            'email'=>'incirmustafa23@gmail.com',
            'password'=>bcrypt(111000),
            'created_at'=>now(),
            'updated_at'=>now(),
        ]);
    }

}
