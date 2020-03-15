@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a class="btn-post m-size" href="{{ route('post.create') }}">スレッドを新規投稿する</a>
            <a class="btn-post m-size" href="{{ route('category.create') }}">カテゴリーを追加する</a>
            
            <div class="card">
                <div class="card-header">スレッド一覧</div>
                    <div class="card-body">
                        <ul>
                            @if(!$posts->isEmpty())
                                @foreach ($posts as $post) 
                                    <li class="item">
                                        <div class="m-size">
                                            <a class="underline link" href="{{ route('post.show', ['id' => $post->id]) }}">{{ str_limit($post->title, 70) }}</a>
                                        </div>
                                        <span class="s-size">
                                            [投稿時間]：{{ $post->created_at->format('Y.m.d(D) H:i') }}</span>
                                        <span class="s-size">
                                            [投稿者]：{{ $post->user->name }}
                                        </span>
                                        <div class="s-size">
                                            [カテゴリー]：
                                            @if(!$post->categories->isEmpty())
                                                @foreach ($post->categories as $category)
                                                    <span class="categoryName">{{ $category->name }}</span>
                                                @endforeach
                                            @else
                                                無し
                                            @endif
                                        </div>
                                    </li>
                                @endforeach
                            {{ $posts->links() }}
                            @else
                                <p>スレッドはまだありません</p>
                            @endif
                        </ul>
                        <form action="{{ route('search.index') }}" method="GET">
                            @csrf
                            <label for="word">スレッド・レスの検索</label>
                            <div class="form-group">
                                <input class="form-input" type="text" name="word" placeholder="検索したい単語を入力してください">
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
