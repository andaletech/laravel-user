<?php

namespace Tests\Unit;

use Tests\TestCase;
use Andaletech\LaravelUser\Models\Gender;
use Illuminate\Foundation\Testing\RefreshDatabase;

/**
 * Unit test class for Andaletech\LaravelUser\Models\Gender eloquent model.
 * 
 * @author Kolado Sidibe <kolado.sidibe@andaletech.com>
 * @copyright 2018 Andale Technologies, SARL.
 * @license MIT
 */
class GenderModelTest extends TestCase
{
    /**
     * Test that you can store a gender model in db.
     *
     * @test
     * @return void
     */
    public function can_create_a_gender()
    {
        $data = [
            'name' => 'male_test',
            'display_name' => 'Male Test',
        ];
        $aGender = new Gender();
        $aGender->name = $data['name'];
        $aGender->display_name = $data['display_name'];
        $aGender->save();
        $this->assertNotEmpty($aGender);
        foreach($data as $key => $value)
        {
            $this->assertEquals($value, $aGender->{$key});
        }
    }
}
