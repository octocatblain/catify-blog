@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>

    {{-- specify route parameter --}}
    {!! Form::open(['route' => ['posts.update', $post->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    {{-- title area --}}
    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
    </div>

    {{-- text area --}}
    <div class="form-group">
        {!! Form::label('body', 'Blog body') !!}
        {!! Form::textarea('body', $post->body, ['class' => 'form-control', 'placeholder' => 'Write your blog here...']) !!}
    </div>

    {{-- file image upload --}}
    <div class="form-group">
        {{ Form::file('cover_image') }}
    </div>

    {{-- hidden method --}}
    {{ Form::hidden('_method', 'PUT') }}
    {!! Form::submit('Submit Blog', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
