@csrf
<dl class="form-list mb-3">
    <input type="hidden" name="shop_id" value="{{ $shop_id ?? '' }}">
    <dt class="col-form-label">商品名</dt>
    <dd><input type="text" name="name" value="{{ old('name', $product->name) }}" class="form-control"></dd>
    <dt class="col-form-label">説明</dt>
    <dd><textarea name="description" class="form-control" rows="5">{{ old('description', $product->description) }}</textarea></dd>
    <dt class="col-form-label">価格</dt>
    <dd><input type="number" name="price" min="100" value="{{ old('price', $product->price) }}" class="form-control"></dd>
    <dt class="col-form-label">在庫</dt>
    <dd><input type="number" name="stock" min="0" value="{{ old('stock', $product->stock) }}" class="form-control"></dd>
</dl>