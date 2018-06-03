@extends('layouts.app')

@section('content')
@if(Auth::guard('staff')->check())
<div class="sidenav">
    <a href="{{ url('/staff/manage/staff') }}">Staff</a>
    <a href="{{ url('/staff/manage/client') }}">Client</a>
    <a href="{{ url('/staff/manage/seeker') }}">Applicant</a>
</div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome, {{ Auth::guard("staff")->user()->StaffName }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as STAFF!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
