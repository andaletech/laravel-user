<?php

namespace Tests\Unit;

use Tests\TestCase;
use Andaletech\LaravelUser\Models\PhoneType;
use Andaletech\LaravelUser\Models\PhoneNumber;

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
        $cellType = PhoneType::where('name', 'cell')->first();
        $data = [
            'type_id' => $cellType->id,
            'number' => '4046448829',
            'owner_type' => 'Andaletech\LaravelUser\Models\User',
            'owner_id' => '1',
        ];

        $aPhoneNumber = new PhoneNumber();
        foreach ($data as $attribute => $value) {
            $aPhoneNumber->{$attribute} = $value;
        }
        $aPhoneNumber->save();

        $this->assertNotEmpty($aPhoneNumber->id);
        foreach ($data as $attribute => $value) {
            $this->assertEquals($value, $aPhoneNumber->{$attribute});
        }
    }
}
