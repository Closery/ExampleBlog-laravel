<?php

use App\Models\User;

if(!function_exists('findUser')) {
    function findUser($id)
    {
        return User::find($id);
    }
}