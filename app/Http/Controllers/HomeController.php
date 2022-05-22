<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    
    {       
         return view('welcome');
    }
    public function about(){
        return view('about');
    }
    public function instruction(){
        return view('instruction');
    }
    public function hackerboard(){
        return view('hackerboard');
    }

    public function index()
    {
        $posts = Posts::where('status', 1)->orderBy('updated_at', 'desc')->get();
        $listUser = User::all();

        return view('dasboard', compact('posts', 'listUser'));
    }
}
