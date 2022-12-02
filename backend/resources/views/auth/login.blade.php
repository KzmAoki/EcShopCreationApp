@extends('layouts.app')

@section('content')
<div class="container">
    <h2>ログイン</h2>
    @include('commons.errors')
    <form action="{{ route('login') }}" method="post">
        @csrf 
        <dl class="form-list mb-3">
            <dt class="col-form-label">メールアドレス</dt>
            <dd><input type="email" class="form-control" name="email" value="{{ old('email') }}"></dd>
            <dt class="col-form-label">パスワード</dt>
            <dd><input type="password" class="form-control" name="password"></dd>
        </dl>
        <button type="submit" class=" btn btn-primary">ログイン</button>
        <span class="btn btn-secondary"><a href="/">キャンセル</a></span>
    </form>
</div>
@endsection
