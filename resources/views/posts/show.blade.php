@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <img style="75%" src="/storage/cover_images/{{ $post->cover_images }}">
    <br><br>
    <small>Updated on {{ $post->updated_at }}</small>

    <div class="innerContainer">
        <p>{{ $post->body }}</p>
    </div>

    <hr>
    <a href="/posts" class="btn btn-dark">
        < Back</a>
            {{-- edit form --}}
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>

            {{-- delete form --}}
            {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
            {{-- hidden method --}}
            {{ Form::hidden('_method', 'DELETE') }}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        @endsection
