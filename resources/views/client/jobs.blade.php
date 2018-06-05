@extends('layouts.app')

@section('content')

<div class="sidenav">
    <a href="{{ url('/client/home') }}">My Profile</a>
    <a href="{{ url('/client/jobs') }}">Job Management</a>
    <a href="{{ url('/client/seekers') }}">View Applicants</a>
    <a href="{{ url('/client/jobs/new') }}">Add New Job</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Skill Manager</div>

                <div class="card-body">
                    <a href="{{ url('client/job/new') }}" class="btn btn-success">Add new job</a> 
                    <table class="table table-stripped" width="90%">
                        <thead>
                            <tr>
                                <th scope="col">Job ID</th>
                                <th scope="col">Job Name</th>
                                <th scope="col">Salary</th>
                                <th scope="col">Description</th>
                                <th scope="col">Action</th>


                            </tr>
                        </thead>
                        <tbody>
                            @foreach($jobs as $job)
                                <tr>
                                    <th>{{ $job->JobID }}</th>
                                    <th>{{ $job->JobName }}</th>
                                    <th>{{ $job->JobSalary }}</th>
                                    <th>{{ $job->JobDescription }}</th>
                                    <th>
                                        <a href="#" class="btn btn-secondary">Edit</a>
                                        <a href="{{ url('/client/deletes/job/' . $job->JobID) }}" class="btn btn-danger">Delete</a>
                                    </th>
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
