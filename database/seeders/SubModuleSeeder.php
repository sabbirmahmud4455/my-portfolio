<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubModuleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();

        DB::statement("DELETE FROM sub_modules");

        DB::table('sub_modules')->insert([


            //module id 1 (User Module) start
            [
                'id' => 1,
                'name' => 'Roles',
                'key' => 'roles',
                'position' => 1,
                'route' => 'role.index',
                'module_id' => 1,
                'created_at' => $date,
                'updated_at' => $date,
            ],
            [
                'id' => 2,
                'name' => 'All User',
                'key' => 'all_user',
                'position' => 2,
                'route' => 'user.index',
                'module_id' => 1,
                'created_at' => $date,
                'updated_at' => $date,
            ],

            //module id 1 (User Module) end

            //module id 2 (Settings Module) start
            [
                'id' => 3,
                'name' => 'App Info',
                'key' => 'app_info',
                'position' => 1,
                'route' => 'app.info.index',
                'module_id' => 2,
                'created_at' => $date,
                'updated_at' => $date,
            ]
            //module id 2 (Settings Module) end


        ]);

        //last ID: 3, Next ID: 4
    }
}
