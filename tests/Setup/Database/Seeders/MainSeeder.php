<?php

namespace Tests\Setup\Database\Seeders;

use Illuminate\Database\Seeder;
use Andaletech\LaravelUser\Database\Seeds\PhoneTypeSeeder;


class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PhoneTypeSeeder::class);
    }
}