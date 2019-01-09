<?php

namespace Tests\Unit;

use Hash;
use Tests\TestCase;
use Tests\Utilities\Tool;
use Andaletech\LaravelUser\Models\User;
use Andaletech\LaravelUser\Models\Gender;

/**
 * Unit test class for Andaletech\LaravelUser\Models\User eloquent model.
 *
 * @author Kolado Sidibe <kolado.sidibe@andaletech.com>
 * @copyright 2018 Andale Technologies, SARL.
 * @license MIT
 */
class UserModelTest extends TestCase
{
    /**
     * Test that you can create a User.
     *
     * @test
     * @return void
     */
    public function can_create_a_user_with_minimal_attributes()
    {
        $data = [
            'last_name' => 'John',
            'first_name' => 'Smith',
            'username' => 'johnsmith',
        ];
        $aUser = new User();
        $aUser = Tool::setModelAttributes($aUser, $data);
        $aUser->encryptAndSetPwd('P@55w0rd');
        $aUser->save();
        $this->assertNotEmpty($aUser->id);
        $this->assertTrue(Hash::check('P@55w0rd', $aUser->password));
        foreach ($data as $key => $value) {
            $this->assertEquals($value, $aUser->{$key});
        }
    }

    /**
     * Test that you can create a User.
     *
     * @test
     * @return void
     */
    public function can_create_a_user_with_gender_attributes()
    {
        $aGender = Gender::first();
        $data = [
            'last_name' => 'John',
            'first_name' => 'Smith',
            'username' => 'johnsmith',
            'gender_id' => $aGender->id,
        ];
        $aUser = new User();
        $aUser = Tool::setModelAttributes($aUser, $data);
        $aUser->encryptAndSetPwd('P@55w0rd');
        $aUser->save();
        $this->assertNotEmpty($aUser->id);
        $this->assertTrue(Hash::check('P@55w0rd', $aUser->password));
        foreach ($data as $key => $value) {
            $this->assertEquals($value, $aUser->{$key});
        }
    }
}
