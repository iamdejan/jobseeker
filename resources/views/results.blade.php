@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Results</div>

                <div class="card-body">
                    <table class="table table-stripped" width="90%">
                        <thead>
                            <tr>
                                <th scope="col">Job ID</th>
                                <th scope="col">Job Name</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jobs as $job)
                                <tr>
                                    <th>{{ $job->JobID }}</th>
                                    <th>{{ $job->JobName }}</th>
                                    <th>
                                        @if(Auth::guard("seeker")->check())
                                            {{ $job->JobSalary }}
                                        @else
                                            <a href="{{ url('/seeker/login') }}">Login to see salary</a>
                                        @endif
                                    </th>
                                    <th>{{ $job->JobDescription }}</th>
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
