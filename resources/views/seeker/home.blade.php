@extends('layouts.app')

@section('content')

<div class="sidenav">
    <a href="{{ url('/seeker/home') }}">My Profile</a>
    <a href="{{ url('/seeker/jobs') }}">Job Applied</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3>My Profile</h3>
                </div>

                <div class="card-body">
                    Name:<br>{{ Auth::guard('seeker')->user()->fName . ' ' . Auth::guard('seeker')->user()->lName }}<br><br>
                    Email:<br>{{ Auth::guard('seeker')->user()->SeekerEmail }}<br><br>
                    Phone:<br>{{ Auth::guard('seeker')->user()->SeekerPhone }}<br><br>
                    Address:<br>{{ Auth::guard('seeker')->user()->SeekerAddress }}<br><br>
                    Gender:<br>
                    @if(Auth::guard('seeker')->user()->SeekerGender == "M")
                        Male
                    @else
                        Female
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
