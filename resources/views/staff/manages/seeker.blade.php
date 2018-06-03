@extends('layouts.app')

@section('content')

@if(Auth::guard('staff')->check())
<div class="sidenav">
    <a href="{{ url('/staff/manages/staff') }}">Staff</a>
    <a href="{{ url('/staff/manages/client') }}">Client</a>
    <a href="{{ url('/staff/manages/seeker') }}">Applicant</a>
    <a href="{{ url('/staff/manages/job') }}">Job</a>
    <a href="{{ url('/staff/manages/skill') }}">Skill</a>
</div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Applicant Manager</div>

                <div class="card-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Address</th>
                                <th scope="col">Gender</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $value)
                                <tr>
                                    <td>{{ $value->SeekerID }}</td>
                                    <td>{{ $value->fName . ' ' . $value->lName }}</td>
                                    <td>{{ $value->SeekerAddress }}</td>
                                    <td>{{ $value->SeekerGender }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
