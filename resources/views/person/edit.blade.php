@extends('layouts.helloapp')

@section('title', 'Person.Edit')

@section('menubar')
  @parent
  編集ページ
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
  <form action="/person/edit" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $form->id }}">
    <label for="name">name:</label>
    <div>
      <input type="text" name="name" value="{{ $form->name }}">
    </div>
    <label for="mail">mail:</label>
    <div>
      <input type="text" name="mail" value="{{ $form->mail }}">
    </div>
    <label for="age">age:</label>
    <div>
      <input type="number" name="age" value="{{ $form->age }}">
    </div>
    <div>
      <button type="submit">send</button>
    </div>
  </form>
@endsection

@section('footer')
copyright 2025 tuyano.
@endsection