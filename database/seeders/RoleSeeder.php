<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();

        DB::statement('DELETE FROM roles');

        DB::table('roles')->insert([
            [
              'id' => 1,
              'name' => 'Super Admin',
              'is_active' => true,
              'is_delete' => false,
              'created_at' => $date,
              'updated_at' => $date,
            ],
        ]);
    }
}
