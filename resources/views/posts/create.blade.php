@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    {{-- specify route parameter --}}
    {!! Form::open(['route' => 'posts.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
    @csrf
    {{-- title area --}}
    <div class="row">
        <div class="form-group col-6">
            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Title']) !!}
        </div>

        {{-- file image upload --}}
        <div class="form-group col-6">
            {!! Form::label('image', 'Cover Image') !!}
            {!! Form::file('image', ['class' => 'form-control-file']) !!}
        </div>
    </div>

    {{-- text area --}}
    <div class="form-group">
        {!! Form::label('body', 'Blog body') !!}
        {!! Form::textarea('body', null, ['class' => 'form-control', 'placeholder' => 'Write your blog here...']) !!}
    </div>



    {!! Form::submit('Submit Blog', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}
@endsection
