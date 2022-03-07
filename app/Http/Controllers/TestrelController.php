<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class TestrelController extends Controller
{
    public function index()
    {
        error_log("testrelcontroller index called");
        $role = User::find(1)->role;
        echo($role);
    }
}
