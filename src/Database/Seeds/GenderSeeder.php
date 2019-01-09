<?php

namespace Andaletech\LaravelUser\Database\Seeds;

use Illuminate\Database\Seeder;
use Andaletech\LaravelUser\Models\Gender;

/**
 * The seeder for the genders table.
 *
 * @author Kolado Sidibe <kolado.sidibe@andaletech.com>
 * @copyright 2019 Andale Technologies SARL
 * @license MIT
 */
class GenderSeeder extends Seeder
{
    /**
     * The payload for genders.
     *
     * @var array
     */
    public const GENDERS_DATA = [
        'male' => [
            'name' => 'male',
            'display_name' => 'Male',
        ],
        'female' => [
            'name' => 'female',
            'display_name' => 'Female',
        ],
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::GENDERS_DATA as $aData) {
            $aGender = Gender::where('name', $aData['name'])->first();
            if(empty($aGender))
            {
                $this->createGender($aData);
            }
        }
    }

    /**
     * Create a Gender with the given $data.
     *
     * @param array $data
     * @return void
     */
    protected function createGender($data)
    {
        $gender = new Gender();
        foreach ($data as $attribute => $value) {
            $gender->{$attribute} = $value;
        }
        $gender->save();

        return $gender;
    }
}
