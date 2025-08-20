@extends('layouts.helloapp')

@section('title', 'Board.Add')

@section('menubar')
  @parent
  投稿ページ
@endsection

@section('content')
  <form action="/board/add" method="post">
    @csrf
    <label for="person_id">person id: </label>
    <div><input type="number" name="person_id"></div>
    <label for="title">title:</label>
    <div><input type="text" name="title"></div>
    <label for="message">message:</label>
    <div><input type="text" name="message"></div>
    <div><button type="submit">send</button></div>
  </form>
@endsection

@section('footer')
copyright 2025 tuyano.
@endsection