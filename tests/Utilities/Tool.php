<?php

namespace Tests\Utilities;

use Illuminate\Database\Eloquent\Model;

/**
 * A utility class that contains some useful, static methods.
 *
 * @author Kolado Sidibe <kolado.sidibe@andaletech.com>
 * @copyright 2019 Andale Technologies, SARL.
 * @license MIT
 */
class Tool
{
    /**
     * Set the attributes of $model using the sets of $anAttribute => $value pairs defined in the array $attributes.
     *
     * @param \Illuminate\Database\Eloquent\Model $model
     * @param array $attributes
     * @return \Illuminate\Database\Eloquent\Model
     */
    public static function setModelAttributes(Model $model, array $attributes) : Model
    {
        foreach ($attributes as $key => $value) {
            $model->{$key} = $value;
        }

        return $model;
    }

    /**
     * Instantiate the eloquent model specified by $modelFqn using the attributes defined in $data.
     *
     * @param string $modelFqn
     * @param array $data
     * @param bool $save Set to true to save the instantiated model before returning it.
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function instantiateModel(string $modelFqn, array $data, $save = false) : Model
    {
        $model = new $modelFqn();
        return self::setModelAttributes($model, $data);
        if($save)
        {
            $model->save();
        }
        
        return $model;
    }
}