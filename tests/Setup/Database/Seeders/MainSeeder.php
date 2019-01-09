<?php

namespace Tests\Setup\Database\Seeders;

use Illuminate\Database\Seeder;
use Andaletech\LaravelUser\Database\Seeds\PhoneTypeSeeder;
use Andaletech\LaravelUser\Database\Seeds\AddressTypeSeeder;
use Andaletech\LaravelUser\Database\Seeds\GenderSeeder;

/**
 * This is the main seeder used to run all other seeders needed for testing.
 *
 * @author Kolado Sidibe <kolado.sidibe@andaletech.com>
 * @copyright 2018 Andale Technologies SARL
 * @license MIT
 */
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
        $this->call(AddressTypeSeeder::class);
        $this->call(GenderSeeder::class);
    }
}
