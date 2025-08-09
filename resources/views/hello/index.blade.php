@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです。</p>
  <table>
    @foreach($data as $item)
      <tr>
        <th style="border: solid 1px #aaa; padding: 5px 10px;">
          {{ $item['name'] }}
        </th>
        <td style="border: solid 1px #aaa; padding: 5px 10px;">
          {{ $item['mail'] }}
        </td>
      </tr>
    @endforeach
  </table>
@endsection

@section('footer')
copyright 2025 tuyano.
@endsection