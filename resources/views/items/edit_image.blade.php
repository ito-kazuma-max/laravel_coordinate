@extends('layouts.default')

@section('title', $title)

@section('content')
<h1>{{ $title }}</h1>

<div class="mt-4">
    <span>現在の画像</span>
    <img src="{{ \Storage::url($item->image) }}">
  </div>
  <form method="POST" action="{{ route('items.update_image', $item) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mt-3">
            <label>
              画像を選択:
              <input type="file" name="image">
            </label>
        </div>
        <input class="input_form mt-3 btn btn-secondary"type="submit" value="更新">
    </form>

@endsection
