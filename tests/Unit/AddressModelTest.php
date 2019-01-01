<?php

namespace Tests\Unit;

use Tests\TestCase;
use Andaletech\LaravelUser\Models\AddressType;
use Andaletech\LaravelUser\Database\Seeds\AddressTypeSeeder;
use Andaletech\LaravelUser\Models\Address;

/**
 * Unit test class for Andaletech\LaravelUser\Models\AddressType eloquent model.
 *
 * @author Kolado Sidibe <kolado.sidibe@andaletech.com>
 * @copyright 2018 Andale Technologies, SARL.
 * @license MIT
 */
class AddressModelTest extends TestCase
{
    /**
     * Test that you can create an Address.
     *
     * @test
     * @return void
     */
    public function can_create_an_address()
    {
        $homeType = AddressType::where('name', 'home')->first();
        // $table->bigInteger('address_type_id', false, true)->nullable();
        //     $table->string('line_2', 100)->nullable();
        //     $table->string('city', 100);
        //     $table->string('state', 100)->nullable();
        //     $table->string('postal_code', 20)->nullable();
        //     $table->string('country', 100)->nullable();
        $data = [
            'address_type_id' => $homeType->id,
            'owner_type' => 'Andaletech\LaravelUser\Models\User',
            'owner_id' => '1',
            'line_1' => '123 Main St',
            'city' => 'Atlanta',
            'state' => 'GA',
            'postal_code' => '30345',
        ];
        $anAddress = new Address();
        foreach ($data as $key => $value) {
            $anAddress->{$key} = $value;
        }
        $anAddress->save();
        $this->assertNotEmpty($anAddress->id);
        foreach ($data as $key => $value) {
            $this->assertEquals($value, $anAddress->{$key});
        }
    }

    /**
     * Test that you can create an Address.
     *
     * @test
     * @return void
     */
    public function can_create_an_address_without_type()
    {
        $data = [
            'owner_type' => 'Andaletech\LaravelUser\Models\User',
            'owner_id' => '1',
            'line_1' => '123 Main St',
            'city' => 'Atlanta',
            'state' => 'GA',
            'postal_code' => '30345',
        ];
        $anAddress = new Address();
        foreach ($data as $key => $value) {
            $anAddress->{$key} = $value;
        }
        $anAddress->save();
        $this->assertNotEmpty($anAddress->id);
        $this->assertNull($anAddress->address_type_id);
        foreach ($data as $key => $value) {
            $this->assertEquals($value, $anAddress->{$key});
        }
    }
}
