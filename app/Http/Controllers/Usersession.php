<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userpagebase;

class Usersession extends Controller
{
    public function getSessionId()
    {
        if (session()->has('userId')) {
            $loginid = session()->get('userId');
                return $loginid;
        }
        return -1;
    }
}
