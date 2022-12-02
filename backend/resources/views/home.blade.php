@extends('layouts.app')

@section('content')
<h2>マイページ</h2>
@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<p class="btn btn-primary"><a href="{{ route('shops.create') }}">新規店舗出店</a></p>
    <div class="table-responsive">            
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ Auth::user()->name }}さんの店舗一覧</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($shops as $shop)
                    <tr>
                    <td><a href="{{ route('shops.show', $shop->id) }}">{{ $shop->name }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
</div>
<form action="{{ route('logout') }}" method="post">
    @csrf 
    <button type="submit" class="btn btn-secondary">ログアウト</button>
</form>
@endsection
