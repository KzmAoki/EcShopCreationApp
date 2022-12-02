@extends('layouts.app')
@section('content')
<div class="container">
    <h2>会員登録</h2>
    @include('commons.errors')
    <form action="{{ route('register') }}" method="post">
        @csrf 
        <dl class="form-list mb-3">
            <dt class="col-form-label">名前</dt>
            <dd><input type="text" class="form-control" name="name" value="{{ old('name') }}"></dd>
            <dt class="col-form-label">メールアドレス</dt>
            <dd><input type="email" class="form-control" name="email" value="{{ old('email') }}"></dd>
            <dt class="col-form-label">パスワード</dt>
            <dd><input type="password" class="form-control" name="password"></dd>
            <dt class="col-form-label">パスワード（確認用）</dt>
            <dd><input type="password" class="form-control" name="password_confirmation" placeholder="もう一度入力"></dd>
        </dl>
        <button type="submit" class="btn btn-primary">登録する</button>
        <span class="btn btn-secondary"><a href="/">キャンセル</a></span>
    </form>
</div>
@endsection
