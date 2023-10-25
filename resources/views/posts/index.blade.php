@extends('layouts.app')

@section('content')
    <div class="border border-1 bg-gray-100 rounded py-3 px-5 text-center">
        <h1>Catify</h1>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Alias, praesentium! Architecto error quod perferendis
            nesciunt natus, dolor facere quibusdam! Ex reiciendis temporibus ipsa voluptatum numquam dicta maxime rem
            doloribus saepe?</p>
    </div>
    @if (count($posts) > 0)
        @foreach ($posts as $post)
            <div class="container">
                <div class="row mx-5 flex justify-content-between">
                    <div class="col-4 d-flex justify-content-end">
                        <img width="100" height="100" class="rounded-circle" src="{{ asset($post->image) }}">
                    </div>
                    <div class="col">
                        <h3 class="text-capitalize"><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h3>
                        {{-- <p><a href="/posts/{{ $post->id }}">{{ $post->body }}</a></p> --}}
                        <small> Posted {{ $post->created_at->diffForHumans() }}</small>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="container ">
            <hr>
            <span class="d-flex justify-content-between px-5"> {{ $posts->links() }}</span>
        </div>
    @else
        <p class="text-center">No Blog posts found! <br><em>Check back later!</em></p>
    @endif
@endsection
