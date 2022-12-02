@extends('layouts.app')
@section('content')
<h2>ショップ編集</h2>
@include('commons.errors')
<form action="{{ route('shops.update', $shop) }}" method="post">
  @method('patch')
  @include('shops.form')
  <button type="submit" class="btn btn-primary">更新する</button>
  <span class="btn btn-secondary"><a href="{{ route('shops.show', $shop) }}">キャンセル</a></span>
</form>
@endsection()