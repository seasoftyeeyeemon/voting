<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Prospect;
use App\Event;

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
        if(Auth::user()->role===1){
            
            return view('admin.index');
        }elseif(Auth::user()->role===0){
            $events=Event::all();
            return view('user.index', compact('events'));
        }

        return view('home');
    }
}
