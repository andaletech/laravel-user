<?php

namespace Andaletech\LaravelUser\Database\Seeds;

use Illuminate\Database\Seeder;
use Andaletech\LaravelUser\Models\AddressType;

/**
 * The seeder for the address_types table.
 *
 * @author Kolado Sidibe <kolado.sidibe@andaletech.com>
 * @copyright 2018 Andale Technologies SARL
 * @license MIT
 */
class AddressTypeSeeder extends Seeder
{
    /**
     * The payload for phone types.
     *
     * @var array
     */
    public const TYPES_DATA = [
        'home' => [
            'name' => 'home',
            'display_name' => 'Home',
        ],
        'office' => [
            'name' => 'office',
            'display_name' => 'Office',
        ],
        'other' => [
            'name' => 'other',
            'display_name' => 'Other',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::TYPES_DATA as $aType) {
            $this->createType($aType);
        }
    }

    /**
     * Create a PhoneType with the given $data.
     *
     * @param array $data
     * @return void
     */
    protected function createType($data)
    {
        $type = new AddressType();
        foreach ($data as $attribute => $value) {
            $type->{$attribute} = $value;
        }
        $type->save();

        return $type;
    }
}
