@extends('layouts.default')

@section('title', $title)

@section('content')
<h1 class="mb-3">{{ $title }}</h1>
<a href="{{ route('coordinates.index', $coordinate->user) }}" class="btn btn-secondary">一覧に戻る</a>

<ul class="items row list-unstyled mt-4 mb-5">
    <li class="col-lg-4 col-sm-6 col-12 mt-3 mb-2">
        <h2 class="mt-4">Tops</h2>
        <div class="item card border-secondary">
            <div class="item_body ml-2 mr-2">
                <div class="item_body_img">
                    <div class="item_link d-flex align-items-center justify-content-center border mt-2 mb-2">
                        <img class="item_image" src="{{ \Storage::url($coordinate->tops->image) }}">
                    </div>
                </div>
                <div class="item_body_name">
                    アイテム名: {{ $coordinate->tops->name }}
                </div>
                <div class="item_body_description">
                    アイテム詳細: {{ $coordinate->tops->description }}
                </div>
            </div>
        </div>
    </li>

    <li class="col-lg-4 col-sm-6 col-12 mt-3 mb-2">
        <h2 class="mt-4">Bottoms</h2>
        <div class="item card border-secondary">
            <div class="item_body ml-2 mr-2">
                <div class="item_body_img">
                    <div class="item_link d-flex align-items-center justify-content-center border mt-2 mb-2">
                        <img class="item_image" src="{{ \Storage::url($coordinate->bottoms->image) }}">
                    </div>
                </div>
                <div class="item_body_name">
                    アイテム名: {{ $coordinate->bottoms->name }}
                </div>
                <div class="item_body_description">
                    アイテム詳細: {{ $coordinate->bottoms->description }}
                </div>
            </div>
        </div>
    </li>

    <li class="col-lg-4 col-sm-6 col-12 mt-3 mb-2">
        <h2 class="mt-4">Shoes</h2>
        <div class="item card border-secondary">
            <div class="item_body ml-2 mr-2">
                <div class="item_body_img">
                    <div class="item_link d-flex align-items-center justify-content-center border mt-2 mb-2">
                        <img class="item_image" src="{{ \Storage::url($coordinate->shoes->image) }}">
                    </div>
                </div>
                <div class="item_body_name">
                    アイテム名: {{ $coordinate->shoes->name }}
                </div>
                <div class="item_body_description">
                    アイテム詳細: {{ $coordinate->shoes->description }}
                </div>
            </div>
        </div>
    </li>

    @if($coordinate->outer)
    <li class="col-lg-4 col-sm-6 col-12 mt-3 mb-2">
        <h2 class="mt-4">Outer</h2>
        <div class="item card border-secondary">
            <div class="item_body ml-2 mr-2">
                <div class="item_body_img">
                    <div class="item_link d-flex align-items-center justify-content-center border mt-2 mb-2">
                        <img class="item_image" src="{{ \Storage::url($coordinate->outer->image) }}">
                    </div>
                </div>
                <div class="item_body_name">
                    アイテム名: {{ $coordinate->outer->name }}
                </div>
                <div class="item_body_description">
                    アイテム詳細: {{ $coordinate->outer->description }}
                </div>
            </div>
        </div>
    </li>
    @endif

    @if($coordinate->bag)
    <li class="col-lg-4 col-sm-6 col-12 mt-3 mb-2">
        <h2 class="mt-4">Bag</h2>
        <div class="item card border-secondary">
            <div class="item_body ml-2 mr-2">
                <div class="item_body_img">
                    <div class="item_link d-flex align-items-center justify-content-center border mt-2 mb-2">
                        <img class="item_image" src="{{ \Storage::url($coordinate->bag->image) }}">
                    </div>
                </div>
                <div class="item_body_name">
                    アイテム名: {{ $coordinate->bag->name }}
                </div>
                <div class="item_body_description">
                    アイテム詳細: {{ $coordinate->bag->description }}
                </div>
            </div>
        </div>
    </li>
    @endif
</ul>

@endsection
