<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Item;
use App\Http\Requests\ItemRequest;
use App\Http\Requests\ItemEditRequest;
use App\Http\Requests\ItemEditImageRequest;
use App\Services\FileUploadService;
use App\Services\ItemsArrayService;

class ItemController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(ItemsArrayService $service)
    {
        $items = $service->getArray(\Auth::user()->items);
        return view('items.index', [
            'title' => 'アイテム管理ページ',
            'items' => $items,
        ]);
    }

    public function create()
    {
        $categories = Category::get();
        return view('items.create', [
            'title' => '新規アイテム登録',
            'categories' => $categories,
        ]);
    }

    public function store(ItemRequest $request, FileUploadService $service)
    {
        $path = $service->saveImage($request->file('image'));

        if($path) {
            Item::create([
                'user_id' => \Auth::id(),
                'name' => $request->item_name,
                'description' => $request->description,
                'category_id' => $request->category_id,
                'image' => $path,
            ]);
            session()->flash('success', '新規アイテムを登録しました');
        } else {
            session()->flash('error', '新規アイテムの登録に失敗しました');
        }
        return redirect()->route('items.index');
    }

    public function edit(Item $item)
    {
        $categories = Category::get();
        return view('items.edit', [
            'title' => 'アイテムの編集',
            'item' => $item,
            'categories' => $categories,
        ]);
    }

    public function update(ItemEditRequest $request, Item $item)
    {
        $item->update([
            'name' => $request->item_name,
            'description' => $request->description,
            'category_id' => $request->category_id,
        ]);
        session()->flash('success', 'アイテム情報を変更しました');

        return redirect()->route('items.index');
    }

    public function edit_image(Item $item)
    {
        return view('items.edit_image', [
            'title' => 'アイテム画像の変更',
            'item' => $item,
        ]);
    }

    public function update_image(ItemEditImageRequest $request, Item $item, FileUploadService $service)
    {
        $path = $service->saveImage($request->file('image'));

        if($path) {
            $item->update([
                'image' => $path,
            ]);
            session()->flash('success', 'アイテム画像を変更しました');
        } else {
            session()->flash('error', 'アイテム画像の変更に失敗しました');
        }

        return redirect()->route('items.index');
    }

    public function destroy(Item $item)
    {
        $item->delete();
        session()->flash('success', 'アイテムを削除しました');

        return redirect()->route('items.index');

    }
}
