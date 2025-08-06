@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです。</p>

  @each('hello.item', $data, 'item')

@endsection

@section('footer')
copyright 2025 tuyano.
@endsection