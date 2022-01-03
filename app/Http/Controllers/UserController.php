<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Coordinate;

class UserController extends Controller
{
    public function user_page(User $user)
    {
        $coordinate = Coordinate::where('user_id', '=', $user->id)->latest()->first();
        return view('users.user_page', [
            'title' => $user->name . 'さんのページ',
            'user' => $user,
            'coordinate' => $coordinate,

        ]);

    }
}
