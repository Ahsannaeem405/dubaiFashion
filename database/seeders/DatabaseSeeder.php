<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use DB;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $hash=Hash::make('PentaGrama_March');
        DB::table('users')->insert([

            ['f_name' => "admin",'email'=>'Info@ohvu.io','password'=>''.$hash.'','role'=>'admin'],

        ]);
        DB::table('settings')->insert([

            ['heading' => "dummy text"],

        ]);
    }
}

