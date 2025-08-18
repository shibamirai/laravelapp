@extends('layouts.helloapp')

@section('title', 'Edit')

@section('menubar')
  @parent
  更新ページ
@endsection

@section('content')
  <form action="/hello/edit" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $form->id }}">
    <label for="name">name:</label>
    <div><input type="text" name="name" value="{{ $form->name }}"></div>
    <label for="mail">mail:</label>
    <div><input type="text" name="mail" value="{{ $form->mail }}"></div>
    <label for="age">age:</label>
    <div><input type="number" name="age" value="{{ $form->age }}"></div>
    <div><button type="submit">send</button></div>
  </form>
@endsection