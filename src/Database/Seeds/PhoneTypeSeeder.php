<?php

namespace Andaletech\LaravelUser\Database\Seeds;

use Illuminate\Database\Seeder;
use Andaletech\LaravelUser\Models\PhoneType;


class PhoneTypeSeeder extends Seeder
{
    /**
     * The payload for phone types
     *
     * @var array
     */
    protected $typesData = [
        'cell' => [
            'name' => 'cell', 
            'display_name' => 'Cell', 
        ],
        'Home' => [
            'name' => 'home', 
            'display_name' => 'Home', 
        ],
        'office' => [
            'name' => 'office', 
            'display_name' => 'Office', 
        ], 
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach($this->typesData as $aType)
        {
            $this->createType($aType);
        }
    }

    protected function createType($data)
    {
        $type = new PhoneType();
        foreach($data as $attribute => $value)
        {
            $type->{$attribute} = $value;
        }
        $type->save();
        return $type;
    }
}