@extends('layouts.app')

@section('content')

<div class="sidenav">
    <a href="{{ url('/client/home') }}">My Profile</a>
    <a href="{{ url('/client/jobs') }}">Job Management</a>
    <a href="{{ url('/client/seekers') }}">View Applicants</a>
    <a href="{{ url('/client/jobs/new') }}">Add New Job</a>
</div>

<div class="container">
    <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h3>My Profile</h3>
                    </div>

                    <div class="card-body">
                        Name:<br>{{ $seeker->fName . ' ' . $seeker->lName }}<br><br>
                        Email:<br>{{ $seeker->SeekerEmail }}<br><br>
                        Phone:<br>{{ $seeker->SeekerPhone }}<br><br>
                        Address:<br>{{ $seeker->SeekerAddress }}<br><br>
                        Gender:<br>
                        @if($seeker->SeekerGender == "M")
                            Male
                        @else
                            Female
                        @endif
                    </div>
                </div>

            </div>
        <!-- </div> -->
        
    </div>
</div>
@endsection
