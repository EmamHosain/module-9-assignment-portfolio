<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin(){
        return "admin";
    }
    public function adminDashbord(){
        return "admin dashbord";
    }
}
