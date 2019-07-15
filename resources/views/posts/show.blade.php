@extends('layouts.app')

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$post->title}}</div>
                    <img style="width:100%" src="http://localhost:81/laravel/laravel/public/storage/cover_images/{{$post->cover_image}}">
                    <div class="card-body">
                        <div>
                            {!!$post->body!!} 
                        </div>
                        <hr>
                        <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                        <hr>
                        @if(!Auth::guest())
                            @if(Auth::user()->id == $post->user_id)
                                <a href="http://localhost:81/laravel/laravel/public/posts/{{$post->id}}/edit" class="btn btn-outline-primary">Edit</a>
                                {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'btn btn'])!!}
                                    {{Form::hidden('_method', 'DELETE')}}
                                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                {!!Form::close()!!}
                                <a class="btn btn-outline-primary" href="http://localhost:81/laravel/laravel/public/posts">Go Back</a>
                            @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>                
</div>
@endsection