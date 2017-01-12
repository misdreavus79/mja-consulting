@extends('layouts.twocolumn')

@section('content')
    <h1>{{ $post->title }}</h1>
    <h4>By {{ $post->author->name }} on {{ $post->created_at }}</h4>
    <img src="{{ $post->featuredImage->url }}" alt="{{ $post->featuredImage->description }}">
    <article class="post-content">
        {{ $post->body }}
    </article>
    <section class="post-comments">
        @if($post->comments > 0)
            @foreach($post->comments as $c)
                <div class="comment">
                    <h5>{{ $c->author->name }} said on {{ $c->created_at }}:</h5>
                    <p>{{ $c->body }}</p>
                </div>
            @endforeach
        @else
            <p>No comments yet. Be the first to comment!</p>
        @endif
    </section>
@endsection

@section('aside')
    @parent
    <section>
        Something
    </section>
@endsection