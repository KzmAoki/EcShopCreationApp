@extends('layouts.app')
@section('content')
<h2>商品編集</h2>
@include('commons.errors')
<form action="{{ route('products.update', $product) }}" method="post">
  @method('patch')
  @include('products.form')
  <button type="submit" class="btn btn-primary">更新する</button>
  <span class="btn btn-secondary"><a href="{{ route('products.show', $product) }}">キャンセル</a></span>
</form>
@endsection()