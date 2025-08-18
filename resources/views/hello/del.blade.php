@extends('layouts.helloapp')

@section('title', 'Delete')

@section('menubar')
  @parent
  削除ページ
@endsection

@section('content')
  <table>
    <tr>
      <th>name: </th>
      <td>{{ $form->name }}</td>
    </tr>
    <tr>
      <th>mail: </th>
      <td>{{ $form->mail }}</td>
    </tr>
    <tr>
      <th>age: </th>
      <td>{{ $form->age }}</td>
    </tr>
  </table>
  <form action="/hello/del" method="post">
    @csrf
    <input type="hidden" name="id" value="{{ $form->id }}">
    <div><button type="submit">send</button></div>
  </form>
@endsection

@section('footer')
copyright 2025 tuyano.
@endsection