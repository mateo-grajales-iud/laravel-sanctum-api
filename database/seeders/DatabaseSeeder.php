<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [ 'description' => 'Coordinador' ],
            [ 'description' => 'Estudiante ']);
        DB::table('users')->insert(
            ['name' => 'admin', 'email' => 'admin@admin', 'password' => bcrypt('123456789'), 'role' => 1]
        );
    }
}
