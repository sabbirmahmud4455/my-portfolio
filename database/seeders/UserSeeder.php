<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();

        DB::statement('DELETE FROM users');

        DB::table('users')->insert([
            [
              'id' => 1,
              'name' => 'Super Admin',
              'email' => 'superadmin@gmail.com',
              'phone' => '01857040605',
              'image' => null,
              'password' => Hash::make(123456),
              'role_id' => 1,
              'is_super_admin' => true,
              'is_active' => true,
              'is_delete' => false,
              'created_at' => $date,
              'updated_at' => $date,
            ],
        ]);

    }
}
