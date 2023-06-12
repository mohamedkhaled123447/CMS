<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    //
    public function index()
    {
        if (auth()->user() == null) {
            return redirect('/login');
        }
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        $data = [
            'posts' => $user->posts,
            'media' => $user->media
        ];
        return view('pages.home')->with($data);
    }
    public function about()
    {
        return view('pages.about');
    }

    public function features()
    {
        return view('pages.features');
    }
}
