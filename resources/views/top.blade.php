@extends('layouts.default')

@section('content')
<p class="catch_copy mt-5">自分のための</p>
<p class="ml-3 catch_copy">貴方のための</p>
<p class="ml-5 catch_copy"> 誰かのための</p>
<p class="ml-5 mt-5 catch_copy_title">コーディネート提案アプリ
<h1 class="text-center mt-5 title mb-5">Coorde for</h1>
<div class="row">
    <a href="{{ route('register') }}" class="btn btn-success col-4 offset-1 mt-5">サインアップ</a>
    <a href="{{ route('login') }}" class="btn btn-primary col-4 offset-2 mt-5">ログイン</a>
</div>


@endsection
