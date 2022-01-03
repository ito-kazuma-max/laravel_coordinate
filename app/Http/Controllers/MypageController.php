<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MypageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = \Auth::user();
        return view('mypage.index', [
            'title' => 'マイページ',
            'user' => $user,
        ]);
    }
}
