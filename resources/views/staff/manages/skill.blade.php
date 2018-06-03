@extends('layouts.app')

@section('content')

@if(Auth::guard('staff')->check())
<div class="sidenav">
    <a href="{{ url('/staff/manage/staff') }}">Staff</a>
    <a href="{{ url('/staff/manage/client') }}">Client</a>
    <a href="{{ url('/staff/manage/seeker') }}">Applicant</a>
    <a href="{{ url('/staff/manage/job') }}">Job</a>
    <a href="{{ url('/staff/manage/skill') }}">Skill</a>
</div>
@endif

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Skill Manager</div>

                <div class="card-body">
                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                @foreach($data->toArray()[0] as $attrKey => $attribute)
                                    <th scope="col">{{ $attrKey }}</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data->toArray() as $key => $value)
                                <tr>
                                    @foreach($value as $val)
                                        <td>{{ $val }}</td>
                                    @endforeach
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
