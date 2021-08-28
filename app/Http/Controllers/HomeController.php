<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('customer.home');
    }

    public function services()
    {
        return view('services');
    }

    public function jobs()
    {
        return view('jobs');
    }

    public function about_us()
    {
        return view('about_us');
    }

    public function contact_us()
    {
        return view('contact_us');
    }

    public function logged_services()
    {
        return view('customer.logged_services');
    }

    public function transactions()
    {
        return view('customer.transactions');
    }
    
    public function notifications()
    {
        return view('customer.notifications');
    }
    
    
}
