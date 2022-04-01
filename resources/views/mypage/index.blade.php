@extends('layouts.default')

@section('title', $title)

@section('content')
<h1 class="mb-5">{{ $title }}</h1>


<div class="row justify-content-center">
    <div class="col-8 col-lg-6 mt-4 mb-3">
        <div class="card bg-light border-secondary">
            <div class="card-header border-secondary">
                アイテム
            </div>
            <div class="card-body">
                <a href="{{ route('items.create') }}" class="btn btn-secondary pt-2 pb-2 mb-3 w-100">登録する</a>
                <a href="{{ route('items.index') }}" class="btn btn-secondary pt-2 pb-2 mb-2 w-100">一覧を見る</a>
            </div>
        </div>
    </div>

    <div class="col-8 col-lg-6 mt-4 mb-3">
        <div class="card bg-light border-info">
            <div class="card-header text-primary border-info">
                マイコーデ
            </div>
            <div class="card-body">
                <a href="{{ route('coordinates.create', $user) }}" class="btn btn-primary pt-2 pb-2 mb-3 w-100">登録する</a>
                <a href="{{ route('coordinates.index', $user) }}" class="btn btn-primary pt-2 pb-2 mb-2 w-100">一覧を見る</a>
            </div>
        </div>
    </div>
    <div class="col-12 mt-5 text-center">
        <p>友達からコーディネートを提案してもらおう！
    </div>
    <div class="col-6 mt-2 text-right">
        <div class="line-it-button" data-lang="ja" data-type="share-a" data-env="REAL" data-url="https://max-ito.com/coorde-for/users/{{ $user->id }}/user_page" data-color="default" data-size="large" data-count="false" data-ver="3" style="display: none;"></div>
     </div>
    <div class="col-6 mt-2 pl-4">
       <a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="私をコーデして！&#13" data-url="https://max-ito.com/coorde-for/users/{{ $user->id }}/user_page&#13" data-hashtags="coorde_for" data-size="large" data-show-count="false">Tweet</a>
    </div>

</div>



<script src="https://www.line-website.com/social-plugins/js/thirdparty/loader.min.js" async="async" defer="defer"></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

@endsection
