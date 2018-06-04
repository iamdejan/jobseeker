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
                                <th scope="col">Job ID</th>
                                <th scope="col">Title</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Job Desc.</th>
                                <th scope="col">Client</th>
                                <th scope="col">Skill</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $key => $value)
                                <tr>
                                    <td>{{ $value->JobID }}</td>
                                    <td>{{ $value->JobName }}</td>
                                    <td>{{ $value->JobSalary }}</td>
                                    <td>{{ $value->JobDescription }}</td>
                                    <td>{{ $value->client->ClientName }}</td>
                                    <td>

                                        @for($i = 0; $i < $value->skills()->count(); $i++)
                                            @php
                                            $skill = $value->skills[$i];
                                            @endphp
                                            - {{ $skill->SkillName }}
                                            @if($i + 1 != $value->skills()->count())
                                                <br />
                                            @endif
                                        @endfor
                                    </td>
                                    <td><a href="{{ url('/staff/deletes/job/' . $value->JobID) }}" class="btn btn-danger">Delete</a></td>
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
