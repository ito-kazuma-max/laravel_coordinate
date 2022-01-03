<?php

namespace App\Http\Controllers;

use App\Coordinate;
use Illuminate\Http\Request;
use App\Item;
use App\User;
use App\Http\Requests\CoordinateRequest;
use App\Services\ItemsArrayService;

class CoordinateController extends Controller
{
    public function index(User $user)
    {
        $coordinates = Coordinate::where('user_id', '=', $user->id)->get();
        $my_coordinates = $coordinates->where('madeUser_id', $user->id);
        $suggested_coordinates = $coordinates->where('madeUser_id', '!=', $user->id);
        if($user->id === \Auth::id()){
            $title = 'マイコーデ一覧';
        } else {
            $title = $user->name . 'さんのコーデ一覧';
        }
        return view('coordinates.index', [
            'title' => $title,
            'user' => $user,
            'my_coordinates' => $my_coordinates,
            'suggested_coordinates' => $suggested_coordinates,
        ]);
    }

    public function create(User $user, ItemsArrayService $service)
    {
        $items = $service->getArray(Item::where('user_id', '=', $user->id)->get());

        return view('coordinates.create', [
            'title' => '新規コーデ登録',
            'user' => $user,
            'items' => $items,
        ]);
    }

    public function store(CoordinateRequest $request, User $user)
    {
        if (\Auth::check()) {
            $madeUser_id = \Auth::id();
            $madeUser_name = \Auth::user()->name;
        } else {
            $madeUser_id = null;
            $madeUser_name = $request->madeUser_name;
        }
        Coordinate::create([
            'madeUser_id' => $madeUser_id,
            'madeUser_name' => $madeUser_name,
            'user_id' => $user->id,
            'tops_id' => $request->tops_id,
            'bottoms_id' => $request->bottoms_id,
            'shoes_id' => $request->shoes_id,
            'outer_id' => $request->outer_id,
            'bag_id' => $request->bag_id,
            'title' => $request->title,
            'description' => $request->description,
        ]);

        return redirect()->route('coordinates.index', $user);
    }

    public function show(Coordinate $coordinate)
    {
        return view('coordinates.show', [
            'title' => $coordinate->title,
            'coordinate' => $coordinate,
        ]);
    }

    public function destroy(User $user, Coordinate $coordinate)
    {
        $coordinate->delete();

        return redirect()->route('coordinates.index', $user);
    }

}
