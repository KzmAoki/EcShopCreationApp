@extends('layouts.app')
@section('content')
<h2>新規店舗出店</h2>
@include('commons.errors')
<form action="{{ route('shops.store') }}" method="post">
  @include('shops.form')
  <button type="submit" class="btn btn-primary">登録する</button>
  <span class="btn btn-secondary"><a href="{{ route('home') }}">キャンセル</a></span>
</form>
@endsection()