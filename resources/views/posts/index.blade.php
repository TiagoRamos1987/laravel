@extends('layouts.app')

{{-- @section('content')
    <div class="jumbotrom text-center">
        <h1>Posts</h1>
        <p> This is the posts page</p>
        @if(count($posts) > 0)
            @foreach ($posts as $post)
                <div class="list-group-item">
                <h3><a href="http://localhost:81/laravel/laravel/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                <small>Written on {{$post->created_at}}</small>
                </div>
            @endforeach
            {{$posts->links()}}
        @else
            <p>No posts found</p>
        @endif
    </div>    
@endsection --}}

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Posts</div>
        
                    <div class="card-body">
                        <p> This is the posts page</p>
                        @if(count($posts) > 0)
                            @foreach ($posts as $post)
                                <div class="list-group-item">
                                    <div class="row">
                                        <div class="col-md-4 col-sm-4">
                                            <img style="width:100%" src="http://localhost:81/laravel/laravel/public/storage/cover_images/{{$post->cover_image}}">
                                        </div>
                                        <div class="col-md-8 col-sm-8">
                                            <h3><a href="http://localhost:81/laravel/laravel/public/posts/{{$post->id}}">{{$post->title}}</a></h3>
                                            <small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{$posts->links()}}
                        @else
                            <p>No posts found</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>                
    </div>    
@endsection