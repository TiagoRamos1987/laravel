@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Posts</div>
    
                    <div class="card-body">
                        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                        <div class="form-group">
                            {{Form::label('title', 'Title')}}
                            {{Form::text('title', '', ['class' => 'form-control', 'placeholder' => 'Title'])}}
                        </div>
                        <div class="form-group">
                            {{Form::label('body', 'Body')}}
                            {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Body Text'])}}
                        </div>
                        <div class="form-group">
                            {{Form::file('cover_image')}}
                        </div>
                        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
                        {{-- <a class="btn btn-outline-primary" href="http://localhost:81/laravel/laravel/public/dashboard">Go Back</a> --}}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>            
@endsection