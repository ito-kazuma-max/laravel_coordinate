@extends('layouts.default')

@section('title', $title)

@section('content')
<h1 class="mb-3">{{ $title }}</h1>
<a href="{{ route('items.create') }}" class="btn btn-success mb-3">新規アイテム登録</a>
<a href="{{ route('coordinates.create', \Auth::user()) }}" class="btn btn-primary mb-3 ml-3">新規コーデ登録</a>

@foreach($items as $key => $category_items)
<h2 class="mt-4">{{ $key }}</h2>
<ul class="items row list-unstyled mb-5">
    @forelse($category_items as $item)
        <li class="col-lg-4 col-sm-6 col-12 mt-3 mb-2">
            <div class="item card border-secondary">
                <div class="item_body ml-2 mr-2">
                    <div class="item_body_img">
                        <div class="item_link d-flex align-items-center justify-content-center border mt-2 mb-2">
                            <img class="item_image" src="{{ \Storage::url($item->image) }}">
                        </div>
                    </div>
                    <div class="item_body_name">
                        アイテム名: {{ $item->name }}
                    </div>
                    <div class="item_body_description">
                        アイテム詳細: {{ $item->description }}
                    </div>
                    <div class="mb-1">
                        <a href="{{ route('items.edit', $item) }}">[編集]</a>
                        <a href="{{ route('items.edit_image', $item) }}">[画像を変更]</a>
                        <form action="{{ route('items.destroy', $item) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="削除">
                        </form>
                    </div>
                </div>
            </div>
        </li>
    @empty
        <li>アイテムが登録されておりません</li>
    @endforelse
</ul>
@endforeach


@endsection
