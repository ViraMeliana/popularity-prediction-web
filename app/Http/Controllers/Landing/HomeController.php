<?php

namespace App\Http\Controllers\Landing;

use App\Models\Setting;

class HomeController
{
    public function index()
    {
        $settings = Setting::first();
        return view('landing.home', compact('settings'));
    }
}
