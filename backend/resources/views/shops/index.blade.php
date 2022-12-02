@extends("layouts.app")
@section("content")
<div><h2>ショップ一覧</h2></div>
<ul class="row">
@foreach ($shops as $shop)
        <li class="col-sm-3 shop-li shop-hover"><a href="{{ route('shops.show', $shop) }}">{{ $shop->name }}</a></li>
@endforeach
</ul>
@endsection()