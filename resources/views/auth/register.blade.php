@extends('layouts.default')

@section('content')
  <h1>サインアップ</h1>

  <form class="mt-4" method="POST" action="{{ route('register') }}">
    @csrf
    <div>
      <label>
        ユーザー名:
        <input class="input_form" type="text" name="name">
      </label>
    </div>

    <div class="mt-2">
      <label>
        メールアドレス:
        <input class="input_form" type="email" name="email">
      </label>
    </div>

    <div class="mt-2">
      <label>
        パスワード:
        <input class="input_form" type="password" name="password">
      </label>
    </div>

    <div class="mt-2">
      <label>
        パスワード（確認用）:
        <input class="input_form" type="password" name="password_confirmation" >
      </label>
    </div>

    <div>
      <input class="input_form mt-3 btn btn-secondary" type="submit" value="登録">
    </div>
  </form>
@endsection
