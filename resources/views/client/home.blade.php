@extends('layouts.app')

@section('content')

<div class="sidenav">
    <a href="{{ url('/client/home') }}">My Profile</a>
    <a href="{{ url('/client/jobs') }}">Job Management</a>
    <a href="{{ url('/client/seekers') }}">View Applicants</a>
    <a href="{{ url('/client/job/new') }}">Add New Job</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Dashboard for CLIENT</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as CLIENT!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
