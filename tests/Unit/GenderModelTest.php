<?php

namespace Tests\Unit;

use Tests\TestCase;
use Andaletech\LaravelUser\Models\Gender;

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
        foreach ($data as $key => $value) {
            $this->assertEquals($value, $aGender->{$key});
        }
    }

    // /**
    //  * Test that the male query scope works.
    //  *
    //  * @test
    //  * @return void
    //  */
    // public function test_male_query_scope()
    // {
    //     $male = Gender::male()->first();
    //     $this->assertNotNull($male);
    //     $this->assertNotEmpty($male->id);
    //     $this->assertEquals(0, strcasecmp('male', $male->name));
    // }
}
