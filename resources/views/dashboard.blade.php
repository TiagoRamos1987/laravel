@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Your Blog Posts</h3>
                    <a class="btn btn-outline-primary" href="http://localhost:81/laravel/laravel/public/posts/create">Create Post</a>
                    <br>
                    <br>
                    @if(count($posts) > 0)
                        <table class="table table-stripped">
                            <tr>
                                <th>Title</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($posts as $post)
                                <tr>
                                    <th>{{$post->title}}</th>
                                    <th><a href="http://localhost:81/laravel/laravel/public/posts/{{$post->id}}/edit" class="btn btn-outline-primary">Edit</a>
                                        {!!Form::open(['action'=> ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'btn btn'])!!}
                                        {{Form::hidden('_method', 'DELETE')}}
                                        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                        {!!Form::close()!!}
                                    </th>
                                    <th></th>
                                </tr>
                            @endforeach
                        </table>
                        @else
                            <p>You have no posts</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
