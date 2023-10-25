@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row mx-5">
            <div class="col-12 text-center">
                <h1 class="text-capitalize">{{ $post->title }}</h1>
                <em> <small>Updated {{ $post->updated_at }}</small>
                </em>
            </div>
            <div class="col-12 d-flex justify-content-center my-3">
                <img width="500" height="250" src="{{ asset($post->image) }}">
            </div>

            <div class="col-12 m-5">
                <p>{{ $post->body }}</p>
            </div>

            <div class="col-12 d-flex justify-content-end">
                <hr class="1px solid">
                <div class="col d-flex justify-content-start">
                    <a href="/posts" class="btn btn-dark">
                        < Back</a>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <div class=" mx-2">
                        {{-- edit form --}}
                        <a href="/posts/{{ $post->id }}/edit" class="btn btn-primary">Edit</a>

                    </div>

                    <div class=" mx-2">
                        {{-- delete form --}}
                        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                        {{-- hidden method --}}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
