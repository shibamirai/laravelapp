@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <h2>コンポーネント</h2>
  <x-package-message id="{{ $id }}" />
  <p>※上がコンポーネントの表示です。</p>
@endsection

@section('footer')
copyright 2025 tuyano.
@endsection