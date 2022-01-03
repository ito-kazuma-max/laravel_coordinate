@extends('layouts.default')

@section('title', $title)

@section('content')
<h1>{{ $title }}</h1>

<form method="POST" action="{{ route('items.store') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <label>
          アイテム名:
          <input type="text" name="name" value="{{ old('name') }}">
        </label>
    </div>
    <div>
        <label>
          アイテム説明:
          <textarea name="description">{{ old('description') }}</textarea>
        </label>
    </div>
    <div>
        <label>
          カテゴリー:
          <select name="category_id">
              <option value="">選択してください</option>
              @foreach($categories as $category)
                  @if((int)old('category_id') === $category->id)
                      <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                  @else
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endif
              @endforeach
          </select>
        </label>
    </div>
    <div>
        <label>
          画像を選択:
          <input type="file" name="image">
        </label>
    </div>

    <input type="submit" value="登録">
</form>

@endsection
