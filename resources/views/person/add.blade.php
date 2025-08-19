@extends('layouts.helloapp')

@section('title', 'Person.Add')

@section('menubar')
  @parent
  新規作成ページ
@endsection

@section('content')
  @if (count($errors) > 0)
    <div>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $eeor }}</li>
        @endforeach
      </ul>
    </div>
  @endif
  <form action="/person/add" method="post">
    @csrf
    <label for="name">name:</label>
    <div>
      <input type="text" name="name" value="{{ old('name') }}">
    </div>
    <label for="mail">mail:</label>
    <div>
      <input type="text" name="mail" value="{{ old('mail') }}">
    </div>
    <label for="age">age:</label>
    <div>
      <input type="number" name="age" value="{{ old('age') }}">
    </div>
    <div>
      <button type="submit">send</button>
    </div>
  </form>
@endsection

@section('footer')
copyright 2025 tuyano.
@endsection