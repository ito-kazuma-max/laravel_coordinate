@extends('layouts.default')

@section('title', $title)

@section('content')
<h1 class="mb-5">{{ $title }}</h1>



<div class="row mt-4">

    <a href="{{ route('items.create') }}" class="btn btn-outline-dark col-4 offset-1 pt-5 pb-5 mb-5">新規アイテム<br>登録</a>

    <a href="{{ route('items.index') }}" class="btn btn-secondary col-4 offset-1 pt-5 pb-5 mb-5">アイテム<br>一覧</a>

    <a href="{{ route('coordinates.create', $user) }}" class="btn btn-outline-primary col-4 offset-1 pt-5 pb-5 mb-5">新規コーデ<br>登録</a>

    <a href="{{ route('coordinates.index', $user) }}" class="btn btn-info col-4 offset-1 pt-5 pb-5 mb-5">マイコーデ<br>一覧</a>

    <div class="col-12 text-center">
        <div class="line-it-button" data-lang="ja" data-type="share-a" data-env="REAL" data-url="https://max-ito.com/coorde-for/users/{{ $user->id }}/user_page" data-color="default" data-size="large" data-count="false" data-ver="3" style="display: none;"></div>
    </div>

</div>

<script src="https://www.line-website.com/social-plugins/js/thirdparty/loader.min.js" async="async" defer="defer"></script>

@endsection
