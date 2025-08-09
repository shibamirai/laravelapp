@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>{{ $msg }}</p>
  <form action="/hello" method="post">
    @csrf
    <div>
      <label style="display: inline-block; width: 75px;" for="name">
        name:
      </label>
      <input type="text" name="name">
    </div>
    <div>
      <label style="display: inline-block; width: 75px;" for="mail">
        mail:
      </label>
      <input type="text" name="mail">
    </div>
    <div>
      <label style="display: inline-block; width: 75px;" for="age">
        age:
      </label>
      <input type="number" name="age">
      <input type="submit" value="send">
    </div>
  </form>
@endsection

@section('footer')
copyright 2025 tuyano.
@endsection