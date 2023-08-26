@extends('layouts.app')

@section('content')
    <h1>Blog Posts</h1>
    @if (count($posts) > 0)
        @foreach ($posts as $post )
            <div class="well">
                <h3><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                <small> Written on  {{ $post->created_at }}</small>
            </div>
        @endforeach
        <div class="container">
            <hr>
            {{ $posts->links() }}
        </div>
    @else
        <p>No Blog posts found</p>
    @endif
@endsection
