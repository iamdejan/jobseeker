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
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">Skill Manager</div>

                <div class="card-body">
                    <a href="{{ url('/staff/skill/new') }}" class="btn btn-success">Insert new skill</a>
                    <table class="table table-stripped" width="90%">
                        <thead>
                            <tr>
                                @foreach($data->toArray()[0] as $attrKey => $attribute)
                                    <th scope="col">{{ $attrKey }}</th>
                                @endforeach
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data->toArray() as $key => $value)
                                <tr>
                                    <td width="10%">{{ $value["SkillID"] }}</td>
                                    <td width="60%">{{ $value["SkillName"] }}</td>
                                    <td width="10%">
                                        <a class="btn btn-danger" href="{{ url('/staff/deletes/skill/'. $value['SkillID']) }}">Erase</a>
                                    </td>
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
