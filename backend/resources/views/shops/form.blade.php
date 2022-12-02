@csrf
<dl class="form-list mb-3">
    <dt class="col-form-label">ショップ名</dt>
    <dd><input type="text" name="name" value="{{ old('name', $shop->name) }}" class="form-control"></dd>
    <dt class="col-form-label">説明</dt>
    <dd><textarea name="description" class="form-control" rows="5">{{ old('description', $shop->description) }}</textarea></dd>
</dl>