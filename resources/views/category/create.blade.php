@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            @foreach ($errors->all() as $error)
                <div class="alert-group" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        
            <div class="card">
                <div class="card-header">カテゴリーを登録する</div>
                <div class="card-body">
                    <div class="card-part">
                        <p class="m-size">登録されているカテゴリー</p>
                        @if($categories)
                            @foreach($categories as $category)
                                <ul><li>・{{ $category->name }}</li></ul>
                            @endforeach
                        @else
                            <p>現在登録されているカテゴリーはありません</p>
                        @endif
                    </div>

                    <div class="card-part">
                        <p class="m-size">カテゴリーを新規登録する</p>
                        <form method="POST" action="{{ route('category.store') }}">
                            @csrf

                            <div class="form-group">
                                <input class="form-input" type="text" name="name" placeholder="登録したいカテゴリー名を入力してください">
                            </div>

                            <div class="form-group">
                                <button class="submit" type="submit">送信する</button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
