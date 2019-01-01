<?php

namespace Tests\Unit;

use Tests\TestCase;
use Andaletech\LaravelUser\Models\AddressType;
use Andaletech\LaravelUser\Database\Seeds\AddressTypeSeeder;

/**
 * Unit test class for Andaletech\LaravelUser\Models\AddressType eloquent model.
 *
 * @author Kolado Sidibe <kolado.sidibe@andaletech.com>
 * @copyright 2018 Andale Technologies, SARL.
 * @license MIT
 */
class AddressTypeModelTest extends TestCase
{
    /**
     * Test that you can create an AddressType.
     *
     * @test
     * @return void
     */
    public function can_create_an_address_type()
    {
        $data = [
            'name' => 'home_address_type_test',
            'display_name' => 'Home',
        ];
        $aAddressType = new AddressType();
        $aAddressType->name = $data['name'];
        $aAddressType->display_name = $data['display_name'];
        $aAddressType->save();
        $this->assertNotEmpty($aAddressType->id);
        foreach ($data as $key => $value) {
            $this->assertEquals($value, $aAddressType->{$key});
        }
    }

    /**
     * Test that the address_types table seeder works.
     *
     * @test
     * @return void
     */
    public function seeder_works()
    {
        $this->assertEquals(
            count(AddressTypeSeeder::TYPES_DATA),
            AddressType::count()
        );
    }
}
