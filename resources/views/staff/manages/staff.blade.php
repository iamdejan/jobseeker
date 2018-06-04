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
                <div class="card-header">Job Manager</div>

                <div class="card-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                <th scope="col">Staff ID</th>
                                <th scope="col">Staff Name</th>
                                <th scope="col">Position</th>
                                <th scope="col">Jobs Managed</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $value)
                                <tr>
                                    <td>{{ $value->StaffID }}</td>
                                    <td>{{ $value->StaffName }}</td>
                                    <td>{{ $value->StaffPosition }}</td>
                                    <td>

                                        @for($i = 0; $i < $value->jobs()->count(); $i++)
                                            @php
                                            $job = $value->jobs[$i];
                                            @endphp
                                            - {{ $job->JobName }}
                                            @if($i + 1 != $value->jobs()->count())
                                                <br />
                                            @endif
                                        @endfor
                                    </td>
                                    <td><a class="btn btn-danger" href="{{ url('/staff/deletes/staff/' . $value->StaffID) }}">Delete</a></td>
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
