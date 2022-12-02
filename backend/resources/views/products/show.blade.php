@extends('layouts.app')
@section('content')
<!-- <a href="{{ route('shops.show', $product->shop_id) }}">{{ $product->shop->name }}</a> -->
<h2>{{ $product->name }}</h2>
<p>¥{{ number_format($product->price) }}</p>
<p>在庫　{{ $product->stock }}</p>
@if($product->stock > 0)
<div>
<button onClick="location.href='{{ route('checkout', $product) }}'" class="cart__purchase btn btn-primary">
        購入する
</button>
</div>
@else
<div>
<button class="btn btn-secondary">
        SOLD OUT
</button>
</div>
@endif
<p class="mt-3">{!! nl2br(e($product->description)) !!}</p>
@can('update', $product)
<ul class="d-flex">
    <li class="mr-3">
        <span class="btn btn-secondary"><a href="{{ route('products.edit', $product) }}">編集</a></span>
    </li>
    <li class="mr-3">
        <form onsubmit="return confirm('本当に削除しますか？')" action="{{ route('products.destroy', $product) }}" method="post">
            @csrf 
            @method('delete')
            <button type="submit" class="btn btn-danger">削除</button>
        </form>
    </li>
</ul>
@endcan
@endsection