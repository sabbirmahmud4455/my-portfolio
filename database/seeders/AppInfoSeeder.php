<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AppInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $date = Carbon::now();

        DB::statement('DELETE FROM app_infos');

        DB::table('app_infos')->insert([
            [
                'id' => 1,
                'title' => 'Rp Ai Solutions',
                'description' => 'Rp Ai Solutions | At RP A! Solutions, we develop innovative and creative products and services that provide a total A! Communication and information solutions.',
                'url' => 'https://rpaisolutions.com/',
                'logo' => 'logo.png',
                'favicon' => 'icon.png',
                'is_active' => true,
                'is_delete' => false,
                'created_at' => $date,
                'updated_at' => $date,
            ],
        ]);
    }
}
