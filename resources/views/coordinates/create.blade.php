@extends('layouts.default')

@section('title', $title)

@section('content')
<h1>{{ $title }}</h1>

<form method="POST" action="{{ route('coordinates.store', $user) }}">
    @csrf
    <div>
        <label>
            タイトル:
            <input type="text" name="title" value="{{ old('name') }}">
        </label>
    </div>
    @guest
        <div>
            <label>
                名前:
                <input type="text" name="madeUser_name" value="{{ old('name') }}">
            </label>
        </div>
    @endguest
    <div>
        <label>
            概要:
            <textarea name="description">{{ old('description') }}</textarea>
        </label>
    </div>
    <div class="mt-4">
        <span class="item_title">Tops（必須）</span>
        <ul class="items row list-unstyled">
            @forelse($items['Tops'] as $tops_item)
                <li class="col-lg-4 col-sm-6 col-12 mt-3 mb-2">
                    <div class="item card border-secondary">
                        <div class="item_body ml-2 mr-2">
                            <div class="item_body_img">
                                <div class="item_link d-flex align-items-center justify-content-center border mt-2 mb-2">
                                    <label>
                                        <input type="radio" name="tops_id" value="{{ $tops_item->id }}">
                                        <img class="coorde_item_image" src="{{ \Storage::url($tops_item->image) }}">
                                    </label>
                                </div>
                            </div>
                            <div class="item_body_name">
                                アイテム名: {{ $tops_item->name }}
                            </div>
                            <div class="item_body_description">
                                アイテム詳細: {{ $tops_item->description }}
                            </div>
                        </div>
                    </div>
                </li>
            @empty
                <li>トップスは登録されておりません</li>
            @endforelse
        </ul>
    </div>
    <div class="mt-4">
        <span class="item_title">Bottoms（必須）</span>
        <ul class="items row list-unstyled">
            @forelse($items['Bottoms'] as $bottoms_item)
                <li class="col-lg-4 col-sm-6 col-12 mt-3 mb-2">
                    <div class="item card border-secondary">
                        <div class="item_body ml-2 mr-2">
                            <div class="item_body_img">
                                <div class="item_link d-flex align-items-center justify-content-center border mt-2 mb-2">
                                    <label>
                                        <input type="radio" name="bottoms_id" value="{{ $bottoms_item->id }}">
                                        <img class="coorde_item_image" src="{{ \Storage::url($bottoms_item->image) }}">
                                    </label>
                                </div>
                            </div>
                            <div class="item_body_name">
                                アイテム名: {{ $bottoms_item->name }}
                            </div>
                            <div class="item_body_description">
                                アイテム詳細: {{ $bottoms_item->description }}
                            </div>
                        </div>
                    </div>
                </li>
            @empty
                <li>ボトムスは登録されておりません</li>
            @endforelse
        </ul>
    </div>
    <div class="mt-4">
        <span class="item_title">Shoes（必須）</span>
        <ul class="items row list-unstyled">
            @forelse($items['Shoes'] as $shoes_item)
                <li class="col-lg-4 col-sm-6 col-12 mt-3 mb-2">
                    <div class="item card border-secondary">
                        <div class="item_body ml-2 mr-2">
                            <div class="item_body_img">
                                <div class="item_link d-flex align-items-center justify-content-center border mt-2 mb-2">
                                    <label>
                                        <input type="radio" name="shoes_id" value="{{ $shoes_item->id }}">
                                        <img class="coorde_item_image" src="{{ \Storage::url($shoes_item->image) }}">
                                    </label>
                                </div>
                            </div>
                            <div class="item_body_name">
                                アイテム名: {{ $shoes_item->name }}
                            </div>
                            <div class="item_body_description">
                                アイテム詳細: {{ $shoes_item->description }}
                            </div>
                        </div>
                    </div>
                </li>
            @empty
                <li>シューズは登録されておりません</li>
            @endforelse
        </ul>
    </div>
    <div class="mt-4">
        <span class="item_title">Outer（任意）</span>
        <label>
            <input type="radio" name="outer_id" value="" checked>
            選択なし
        </label>
        <ul class="items row list-unstyled">
            @forelse($items['Outer'] as $outer_item)
                <li class="col-lg-4 col-sm-6 col-12 mt-3 mb-2">
                    <div class="item card border-secondary">
                        <div class="item_body ml-2 mr-2">
                            <div class="item_body_img">
                                <div class="item_link d-flex align-items-center justify-content-center border mt-2 mb-2">
                                    <label>
                                        <input type="radio" name="outer_id" value="{{ $outer_item->id }}">
                                        <img class="coorde_item_image" src="{{ \Storage::url($outer_item->image) }}">
                                    </label>
                                </div>
                            </div>
                            <div class="item_body_name">
                                アイテム名: {{ $outer_item->name }}
                            </div>
                            <div class="item_body_description">
                                アイテム詳細: {{ $outer_item->description }}
                            </div>
                        </div>
                    </div>
                </li>
            @empty
                <li>アウターは登録されておりません</li>
            @endforelse
        </ul>
    </div>
    <div class="mt-4">
        <span class="item_title">Bag（任意）</span>
        <label>
            <input type="radio" name="bag_id" value="" checked>
            選択なし
        </label>
        <ul class="items row list-unstyled">
            @forelse($items['Bag'] as $bag_item)
                <li class="col-lg-4 col-sm-6 col-12 mt-3 mb-2">
                    <div class="item card border-secondary">
                        <div class="item_body ml-2 mr-2">
                            <div class="item_body_img">
                                <div class="item_link d-flex align-items-center justify-content-center border mt-2 mb-2">
                                    <label>
                                        <input type="radio" name="bag_id" value="{{ $bag_item->id }}">

                                        <img class="coorde_item_image" src="{{ \Storage::url($bag_item->image) }}">
                                    </label>
                                </div>
                            </div>
                            <div class="item_body_name">
                                アイテム名: {{ $bag_item->name }}
                            </div>
                            <div class="item_body_description">
                                アイテム詳細: {{ $bag_item->description }}
                            </div>
                        </div>
                    </div>
                </li>
            @empty
                <li>バッグは登録されておりません</li>
            @endforelse
        </ul>
    </div>
    <input class="btn btn-secondary mb-3" type="submit" value="登録">
</form>

@endsection
