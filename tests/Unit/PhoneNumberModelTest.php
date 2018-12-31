<?php

namespace Tests\Unit;

use Tests\TestCase;
use Andaletech\LaravelUser\Models\PhoneType;
use Andaletech\LaravelUser\Models\PhoneNumber;
// use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Unit test class for Andaletech\LaravelUser\Models\PhoneNumber eloquent model.
 * 
 * @author Kolado Sidibe <kolado.sidibe@andaletech.com>
 * @copyright 2018 Andale Technologies, SARL.
 * @license MIT
 */
class PhoneNumberModelTest extends TestCase
{
    /**
     * Test that you can create a PhoneType model in db.
     *
     * @test
     * @return void
     */
    public function can_create_a_phone_Number()
    {
        // $data = [
        //     'name' => 'cell_test',
        //     'display_name' => 'Cell Test',
        // ];
        // $aPhoneNumber = new PhoneNumber();
        // $aPhoneNumber->name = $data['name'];
        // $aPhoneNumber->display_name = $data['display_name'];
        // $aPhoneNumber->save();
        // $this->assertNotEmpty($aPhoneType);
        // foreach($data as $key => $value)
        // {
        //     $this->assertEquals($value, $aPhoneType->{$key});
        // }



        $cellType = PhoneType::where('name', 'cell')->first();
        $data = [
            'type_id' => $cellType->id, 
            'number' => '4046448829', 
            'owner_type' => 'Andaletech\LaravelUser\Models\User',
            'owner_id' => '1',
        ];

        $aPhoneNumber = new PhoneNumber();
        foreach($data as $attribute => $value)
        {
            $aPhoneNumber->{$attribute} = $value;
        }
        $aPhoneNumber->save();

        $this->assertNotEmpty($aPhoneNumber->id);
        foreach($data as $attribute => $value)
        {
            $this->assertEquals($value, $aPhoneNumber->{$attribute});
        }
    }
}
