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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Client Manager</div>

                <div class="card-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th scope="col">Client NPWP</th>
                                <th scope="col">Client Name</th>
                                <th scope="col">Client Type</th>
                                <th scope="col">Client Rate</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $value)
                                <tr>
                                    <td>{{ $value->ClientNPWP }}</td>
                                    <td>{{ $value->ClientName }}</td>
                                    <td>{{ $value->type->TypeName }}</td>
                                    <td>{{ $value->ClientRate }}</td>
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
