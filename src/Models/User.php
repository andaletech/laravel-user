<?php

namespace Andaletech\LaravelUser\Models;

use Illuminate\Database\Eloquent\Model;

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
     * Encrypt and set the password for this user.
     *
     * @param string $clearPwd
     * @return \Andaletech\LaravelUser\Models\User
     */
    public function encryptAndSetPwd(string $clearPwd) : User
    {
        $this->attributes['password'] = bcrypt($clearPwd);
        return $this;
    }

    #endregion accessors & mutators
}
