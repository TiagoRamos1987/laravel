@extends('layouts.app')

{{-- @section('content')
<div class="jumbotrom text-center">
    <h1>Welcome To Laravel</h1>
    <p> This is laravel application from the "Laravel From Scratch" Youtube series</p>
    <a class="btn btn-outline-primary" href="/login">Sign up</a>
    <a class="btn btn-outline-primary" href="/register">Register</a>
</div>
@endsection  --}}

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome To Laravel</div>
    
                <div class="card-body">
                    <ul>
                        <li> This is laravel application from the "Laravel From Scratch" Youtube series</li>
                        {{-- <a class="btn btn-outline-primary" href="/login">Sign up</a>
                        <a class="btn btn-outline-primary" href="/register">Register</a> --}}
                        <li>Series Introduction</li>
                        <li>Environment Setup & Laravel Installation</li>
                        <li>Basic Routing & Controllers</li>
                        <li>Blade Templating & Compiling Assets</li>
                        <li>Models & Database Migrations</li>
                        <li>Fetching Data With Eloquent</li>
                        <li>Forms & Saving Data</li>
                        <li>Edit & Delete Data</li>
                        <li>User Authentication</li>
                        <li>Model Relationships</li>
                        <li>Access Control</li>
                        <li>File Uploading & Finishing Up</li>
                        <li>Deploy Laravel To Shared Hosting The Easy Way</li>
                    </ul>
                </div>
            </div>
        </div>    
    </div>    
@endsection