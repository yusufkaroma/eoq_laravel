<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
        switch(Auth::User()->id_bagian){
            case(7);
                return redirect('admin');
                break;
            case(12);
                return redirect('gudang');
                break;
            case(8);
                return redirect('manager');
                break;
            case(9);
                return redirect('pesan');
                break;
        }
        
    }
}
