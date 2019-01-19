<?php

namespace Andaletech\LaravelUser\Models;

use Illuminate\Database\Eloquent\Model;
use Andaletech\LaravelUser\Utilities\Tools;

/**
 * The user eloquent model.
 *
 * @author Kolado Sidibe <kolado.sidibe@andaletech.com>
 * @copyright 2019 Andale Technologies SARL
 * @license MIT
 */
class User extends Model
{
    #region accessors & mutators

    /**
     * Accesor for the full_name_last_first attribute.
     *
     * @param mix $value
     * @return string the full name of the user in the format LastName, FirstName (i.e. Doe, John)
     */
    public function getFullNameLastFirstAttribute($value)
    {
        $middleName = empty($this->middle_name) ? '' : Tools::stringSpace() . $this->middle_name;

        return implode(
            Tools::stringSpace(),
            [
                $this->last_name . $middleName . ',',
                $this->first_name,
            ]
        );
    }

    #endregion accessors & mutators
}
