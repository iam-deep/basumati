<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
            'name' => 'Admin',
            'email' => 'biswadeepoffice@gmail.com',
            'groupId' => 1,
            'password' => Hash::make('deepbrain'),
            'status' => 1,
            'createdAt' => Carbon::now()->toDateTimeString()
        ]);
    }
}
