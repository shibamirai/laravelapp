@extends('layouts.helloapp')
<style>
  nav { margin: 10px; }
  nav span { margin: 5px; font-size: 12pt; }
  nav a { margin: 5px; font-size: 12pt; }
  nav div { margin: 0; font-size: 12pt; }
  svg { width: 25px; height: 25px; margin-bottom: -7px; }
  tr th a:link { color: white; }
  tr th a:visited { color: white; }
  tr th a:hover { color: white; }
  tr th a:active { color: white; }
</style>
@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <table>
    <tr>
      <th><a href="/hello?sort=name">name</a></th>
      <th><a href="/hello?sort=mail">mail</a></th>
      <th><a href="/hello?sort=age">age</a></th>
    </tr>
    @foreach ($items as $item)
      <tr>
        <td>{{ $item->name }}</td>
        <td>{{ $item->mail }}</td>
        <td>{{ $item->age }}</td>
      </tr>
    @endforeach
  </table>
  {{ $items->appends(['sort' => $sort])->links() }}
@endsection

@section('footer')
copyright 2025 tuyano.
@endsection