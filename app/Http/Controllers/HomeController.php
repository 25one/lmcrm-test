<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lead;

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
    public function index($showId = 0)
    {
        $leads = request()
                       ->user()
                       ->leads()
                       ->has('open')
                       ->with('customer'); 
        
        if ($showId) {
            return $leads->where('leads.id', $showId)->first();
         }
        else {            
            return view('home', ['leads' => $leads->get()]);
        }
    }
    
    /**
     * Show item.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show($id)
    {
        return $this->index($id);
    }
}
