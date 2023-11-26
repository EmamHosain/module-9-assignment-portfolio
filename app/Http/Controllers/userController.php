<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function userHome(){
        return 'user';
    }
    public function userId(){
        return 'user id';
    }
}
