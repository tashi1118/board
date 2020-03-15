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
                <div class="card-header m-size">
                    {{ $post->title }}
                    <div class="s-size">
                        カテゴリー：
                        @if(!$post->categories->isEmpty())
                            @foreach ($post->categories as $category)
                                <span class="categoryName">{{ $category->name }}</span>
                            @endforeach
                        @else
                            無し
                        @endif
                    </div>
                </div>
                    <div class="card-body">
                        <article>
                            <div>1：</div>
                            <span class="s-size">
                                [投稿時間]：{{ $post->created_at->format('Y.m.d(D) H:i') }}
                            </span>
                            <span class="s-size">
                                [投稿者]：{{ $post->user->name }}
                            </span>
                            <div class="m-size">
                                {{ $post->content }}
                            </div>
                        </article>

                        <?php $i = 2; ?>
                        @foreach ($post->responses as $response)
                            <article>
                                <div>
                                    <?php echo $i .'：'; $i++; ?>
                                </div>
                                <span class="s-size">
                                    [投稿時間]：{{ $response->created_at->format('Y.m.d(D) H:i') }}
                                </span>
                                <span class="s-size">
                                    [投稿者]：{{ $response->user->name }}
                                </span>
                                <div class="m-size">
                                    {{ $response->content }}
                                </div>
                            </article>
                        @endforeach

                        <div>
                            <form method="post" action="{{ route('response.store') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="content">レスする</label>
                                    <textarea class="form-input" name="content" cols="45" rows="5" maxlength="1000"></textarea>
                                </div>
                                <input type="hidden" name="post_id" value="{{ $post->id }}">
                                <input type="submit" value="書き込む">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
