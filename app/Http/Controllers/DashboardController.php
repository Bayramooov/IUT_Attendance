<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Teacher;
class DashboardController extends Controller
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
        // return (auth()->user()->id);
        $teacher=Teacher::find(auth()->user()->id);
        return view('dashboard')->with('classes',$teacher->classes);

    }
}
