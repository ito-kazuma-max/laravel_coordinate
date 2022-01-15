@extends('layouts.default')

@section('content')
  <h1>ログイン</h1>

  <form class="mt-4" method="POST" action="{{ route('login') }}">
      @csrf
      <div>
          <label>
            メールアドレス:
            <input class="input_form" type="email" name="email">
          </label>
      </div>

      <div class="mt-2">
          <label>
            パスワード:
            <input class="input_form" type="password" name="password" >
          </label>
      </div>

      <input class="input_form mt-3 btn btn-secondary" type="submit" value="ログイン">
  </form>
@endsection
