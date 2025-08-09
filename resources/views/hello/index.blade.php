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
      <input style="display: inline-block" type="text" name="name" value="{{ old('name') }}">
      @if ($errors->has('name'))
        <p style="font-size: 10pt; margin-top: 0;">ERROR:{{ $errors->first('name') }}</p>
      @endif
    </div>
    <div>
      <label style="display: inline-block; width: 75px;" for="mail">
        mail:
      </label>
      <input style="display: inline-block" type="text" name="mail" value="{{ old('name') }}">
      @error('mail')
        <p style="font-size: 10pt; margin-top: 0;">ERROR:{{ $errors->first('mail') }}</p>
      @enderror
    </div>
    <div>
      <label style="display: inline-block; width: 75px;" for="age">
        age:
      </label>
      <input style="display: inline-block" type="number" name="age" value="{{ old('name') }}">
      @error('age')
        <p style="font-size: 10pt; margin-top: 0;">ERROR:{{ $errors->first('age') }}</p>
      @enderror
      <button type="submit">send</button>
    </div>
  </form>
@endsection

@section('footer')
copyright 2025 tuyano.
@endsection