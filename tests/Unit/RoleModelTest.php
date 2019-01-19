<?php

namespace Tests\Unit;

use Hash;
use Tests\TestCase;
use Andaletech\LaravelUser\Models\User;
use Andaletech\LaravelUser\Utilities\Tools;

/**
 * Unit test class for Andaletech\LaravelUser\Models\Role eloquent model.
 *
 * @author Kolado Sidibe <kolado.sidibe@andaletech.com>
 * @copyright 2019 Andale Technologies, SARL.
 * @license MIT
 */
class RoleModelTest extends TestCase
{
    /**
     * Test that you can create a User.
     *
     * @test
     * @return void
     */
    public function can_create_a_role()
    {
        $data = [
            'name' => 'a-test-role',
            'display_name' => 'A Test Role',
        ];

        $aRole = Tools::instantiateModel('Andaletech\LaravelUser\Models\Role', $data, true);
        $this->assertNotEmpty($aRole);
        $this->assertNotEmpty($aRole->id);
        foreach ($data as $key => $value) {
            $this->assertEquals($value, $aRole->{$key});
        }
    }
}
