@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">検索結果</div>
                <div class="card-header-sub">スレッド</div>
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
                            {{ $posts->appends(request()->input())->links() }}
                        @else
                            <p>該当するスレッドはありませんでした</p>
                        @endif
                    </ul>
                </div>

                <div class="card-header-sub">レス</div>
                <div class="card-body">
                    <ul>
                        @if(!$ress->isEmpty())
                            @foreach ($ress as $res)
                                <li class="item">
                                    <div class="m-size">
                                        レス内容：{{ $res->content }}</a>
                                    </div>
                                    <div class="s-size">
                                        該当スレッド：
                                        <a class="underline link" href="{{ route('post.show', ['id' => $res->post->id]) }}">{{ str_limit($res->post->title, 70) }}</a>
                                    </div>
                                    <span class="s-size">
                                        [レス投稿時間]：{{ $res->created_at->format('Y.m.d(D) H:i') }}
                                    </span>
                                    <span class="s-size">
                                        [レス投稿者]：{{ $res->user->name }}
                                    </span>
                                </li>
                            @endforeach
                            {{ $ress->appends(request()->input())->links() }}
                        @else
                            <p>該当するレスはありませんでした</p>
                        @endif
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
