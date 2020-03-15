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
                <div class="card-header">投稿する</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('post.store')}}">
                        @csrf

                        <div class="form-group">
                            <label class="form-label" for="title">タイトル</label>
                            <input class="form-input" type="text" name="title" placeholder="タイトルを入力してください">
                        </div>

                        <div class="form-group">
                            <label class="form-label" for="content">1レス目</label>
                            <textarea class="form-input" type="text" name="content" cols="45" rows="10" maxlength="1000" placeholder="1レス目を入力してください"></textarea>
                        </div>
                        
                        @if($categories)
                            <div class="form-group">
                            <div>カテゴリー</div>
                                @foreach ($categories as $category)
                                <div>
                                    <input type="checkbox" name="category[]" value="{{ $category->id }}">{{ $category->name }}
                                </div>
                                @endforeach
                            </div>
                        @endif

                        <div class="form-group">
                            <button class="submit" type="submit">投稿する</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
