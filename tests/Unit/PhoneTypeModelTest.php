<?php

namespace Tests\Unit;

use Tests\TestCase;
use Andaletech\LaravelUser\Models\PhoneType;
// use Andaletech\LaravelUser\Models\Gender;
// use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Unit test class for Andaletech\LaravelUser\Models\PhoneType eloquent model.
 * 
 * @author Kolado Sidibe <kolado.sidibe@andaletech.com>
 * @copyright 2018 Andale Technologies, SARL.
 * @license MIT
 */
class PhoneTypeModelTest extends TestCase
{
    /**
     * Test that you can create a PhoneType.
     *
     * @test
     * @return void
     */
    public function can_create_a_phone_type()
    {
        $data = [
            'name' => 'cell_test',
            'display_name' => 'Cell Test',
        ];
        $aPhoneType = new PhoneType();
        $aPhoneType->name = $data['name'];
        $aPhoneType->display_name = $data['display_name'];
        $aPhoneType->save();
        $this->assertNotEmpty($aPhoneType);
        foreach($data as $key => $value)
        {
            $this->assertEquals($value, $aPhoneType->{$key});
        }
    }

    /**
     * Test that you can create a PhoneType.
     *
     * @test
     * @return void
     */
    public function seeder_works()
    {
        
        $aPhoneType =  PhoneType::first();
        $this->assertNotNull($aPhoneType);
    }
}
