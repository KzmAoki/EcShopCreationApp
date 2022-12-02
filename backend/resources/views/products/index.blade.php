@extends("layouts.app")
@section("content")
<div class="col-md-8 col-lg-9">
        <div class="table-responsive">            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>商品名</th><th>価格</th><th>在庫</th><th>出品者</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a></td>
                            <td>¥{{ number_format($product->price) }}</td>
                            <td>{{ $product->stock }}</td>
                            <td><a href="{{ route('shops.show', $product->shop_id) }}">{{ $product->shop->name }}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
</div>
@endsection()