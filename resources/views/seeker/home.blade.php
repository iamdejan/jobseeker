@extends('layouts.app')

@section('content')
@if(Auth::guard('staff')->check())
<div class="sidenav">
    <a href="#">Staff</a>
    <a href="#">Client</a>
    <a href="#">Applicant</a>
</div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard for APPLICANT</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in as APPLICANT!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
