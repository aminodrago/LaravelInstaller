<?php

namespace RachidLaasri\LaravelInstaller\Controllers;

use Illuminate\Routing\Controller;

class WelcomeController extends Controller
{
    /**
     * Display the installer welcome page.
     *
     * @return \Illuminate\View\View
     */
    public function welcome()
    { 
        \Session::flush(); 
        \Session::put('locale', config('installer.lang'));
        return view('vendor.installer.welcome');
    }
}
