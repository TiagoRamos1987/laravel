@extends('layouts.app')

{{-- @section('content')
<div class="jumbotrom text-center">
    <h1>{{$title}}</h1>
    <p> This is the service page</p>
    @if(count($services) > 0)
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
</div>
@endsection  --}}

@section('content')
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$title}}</div>
        
                    <div class="card-body">
                        <p> This is the service page</p>
                        @if(count($services) > 0)
                            <ul class="list-group">
                                @foreach($services as $service)
                                    <li class="list-group-item">{{$service}}</li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>                
</div>
@endsection 

