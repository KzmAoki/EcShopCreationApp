<?php

namespace App\Http\Controllers;

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
        $shops = \Auth::user()->shops()->orderBy('created_at', 'desc')->orderBy('id', 'desc')->paginate(20);
        $data = [
            'shops' => $shops,
        ];

        return view('home', $data);
    }
}
