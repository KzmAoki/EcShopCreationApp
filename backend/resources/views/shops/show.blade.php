@extends('layouts.app')
@section('content')
<h2>{{ $shop->name }}</h2>
<div class="mb-3">
    <p>{!! nl2br(e($shop->description)) !!}</p>
    <span class="d-block">出店者　{{ $shop->user->name }}</span>
</div>

@can('update', $shop)
<ul class="d-flex flex-wrap">
    <li class="pr-3 mb-3">
        <span class="btn btn-secondary"><a href="{{ route('shops.edit', $shop) }}">編集</a></span>
    </li>
    <li class="pr-3 mb-3">
        <form onsubmit="return confirm('本当に削除しますか？')" action="{{ route('shops.destroy', $shop) }}" method="post">
            @csrf 
            @method('delete')
            <button type="submit" class="btn btn-danger">ショップを削除</button>
        </form>
    </li>
    <li class="pr-3 mb-3">
        <span class="btn btn-primary"><a href="{{ route('products.create', $shop) }}">新規商品登録</a></span>
    </li>
    <li class="pr-3 mb-3">
        <form id='csvform' onsubmit="return confirm('ダウンロードしますか？')" action="{{ route('csv.export', $shop) }}" method="post">
            @csrf
            <button type='submit'  class="btn btn-success">CSV出力</button>
        </form>
    </li>
</ul>
@endcan
<div class="row">
    @foreach ($products as $product)
    <div class="card col-sm-3 px-0 ml-3 mr-3 mb-3 shop-hover" style="width: 18rem;">
        <a href="{{ route('products.show', $product) }}">
        <div class="card-body h-100">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text align-self-end">¥{{ number_format($product->price) }}</p>
        </div>
        </a>
    </div>
    @endforeach
</div>
@endsection