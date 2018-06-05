@extends('layouts.app')

@section('content')

<div class="sidenav">
    <a href="{{ url('/client/home') }}">My Profile</a>
    <a href="{{ url('/client/jobs') }}">Job Management</a>
    <a href="{{ url('/client/seekers') }}">View Applicants</a>
    <a href="{{ url('/client/job/new') }}">Add New Job</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Add New Job') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/client/edits/job/' . $job->JobID) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="JobName" class="col-md-4 col-form-label text-md-right">{{ __('Job Name') }}</label>

                            <div class="col-md-6">
                                <input id="JobName" type="text" class="form-control{{ $errors->has('JobName') ? ' is-invalid' : '' }}" name="JobName" value="{{ $job->JobName }}" required autofocus>

                                @if ($errors->has('JobName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('JobName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="JobSalary" class="col-md-4 col-form-label text-md-right">{{ __('Job Salary') }}</label>

                            <div class="col-md-6">
                                <input id="JobSalary" type="JobSalary" class="form-control{{ $errors->has('JobSalary') ? ' is-invalid' : '' }}" name="JobSalary" value="{{ $job->JobSalary }}" required>

                                @if ($errors->has('JobSalary'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('JobSalary') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="JobDesc" class="col-md-4 col-form-label text-md-right">{{ __('Job Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="JobDesc" type="JobDesc" class="form-control{{ $errors->has('JobDesc') ? ' is-invalid' : '' }}" name="JobDesc" required>{{ $job->JobDescription }}</textarea>

                                @if ($errors->has('JobDesc'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('JobDesc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Apply') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
