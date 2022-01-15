@extends('layouts.default')

@section('title', $title)

@section('content')
<h1>{{ $title }}</h1>

<form class="mt-4" method="POST" action="{{ route('items.update', $item) }}">
    @csrf
    @method('PATCH')
    <div>
        <label>
          アイテム名:
          <input class="input_form" type="text" name="item_name" value="{{ old('item_name', $item->name) }}">
        </label>
    </div>
    <div class="mt-2">
        <label>
          アイテム説明:
          <textarea name="description">{{ old('description', $item->description) }}</textarea>
        </label>
    </div>
    <div class="mt-2">
        <label>
          カテゴリー:
          <select name="category_id">
              <option value="">選択してください</option>
              @foreach($categories as $category)
                  @if((int)old('category_id', $item->category_id) === $category->id)
                      <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                  @else
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                  @endif
              @endforeach
          </select>
        </label>
    </div>
    <input class="input_form mt-3 btn btn-secondary" type="submit" value="登録">
</form>

@endsection
