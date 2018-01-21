<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends BaseController
{
    public function __construct(){
        
        parent::__construct();
        $this->middleware('auth');
    }

    public function show(){
        return view('home.profile-dashboard');
    }
}
