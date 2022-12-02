@extends('layouts.app')
@section('content')
<h2>新規商品登録</h2>
@include('commons.errors')
<form action="{{ route('products.store') }}" method="post">
  @include('products.form')
  <button type="submit" class="btn btn-primary">登録する</button>
  <span class="btn btn-secondary"><a href="{{ route('home') }}">キャンセル</a></span>
</form>
@endsection()