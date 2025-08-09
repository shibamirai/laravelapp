@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>{{ $msg }}</p>
  @if (count($errors) > 0)
    <div>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form action="/hello" method="post">
    @csrf
    <div>
      <label style="display: inline-block; width: 75px;" for="name">
        name:
      </label>
      <input style="display: inline-block" type="text" name="name" value="{{ old('name') }}">
    </div>
    <div>
      <label style="display: inline-block; width: 75px;" for="mail">
        mail:
      </label>
      <input style="display: inline-block" type="text" name="mail" value="{{ old('name') }}">
    </div>
    <div>
      <label style="display: inline-block; width: 75px;" for="age">
        age:
      </label>
      <input style="display: inline-block" type="number" name="age" value="{{ old('name') }}">
      <button type="submit">send</button>
    </div>
  </form>
@endsection

@section('footer')
copyright 2025 tuyano.
@endsection