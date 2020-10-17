<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
    public function index(Request $request)
    {
        if($request->isMethod("POST"))
        {
            $token = Str::random(80);
            $user = $request->user();
            $user['api_token'] = hash("sha256",$token);
            $user->save();
            return redirect("/home")->with('api_token',$token);

        }
        return view('home');
    }
    public function mw2()
    {
        return view('mw2');
    }
}
