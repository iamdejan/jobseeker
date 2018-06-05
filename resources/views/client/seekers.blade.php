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
                <div class="card-header">List of Seekers</div>

                <div class="card-body">
                    @foreach($jobs as $job)
                        <h3>{{ $job->JobName }}</h3>
                        @foreach($job->seekers as $seeker)
                            Name: {{ $seeker->fName . ' ' . $seeker->lName }}<br>
                            Address : {{ $seeker->SeekerAddress}}<br>
                            Gender : {{ $seeker->SeekerGender}}<br>
                            Email : {{ $seeker->SeekerEmail}}<br>
                            Phone Number : {{ $seeker->SeekerPhone}}<br><br>
                        @endforeach
                        <br>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
