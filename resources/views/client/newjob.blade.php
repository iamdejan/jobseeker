@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Add New Job') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/client/job/store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="JobID" class="col-md-4 col-form-label text-md-right">{{ __('Job ID') }}</label>

                            <div class="col-md-6">
                                <input id="JobID" type="text" class="form-control{{ $errors->has('JobID') ? ' is-invalid' : '' }}" name="JobID" value="{{ old('JobID') }}" required autofocus>

                                @if ($errors->has('JobID'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('JobID') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="JobName" class="col-md-4 col-form-label text-md-right">{{ __('Job Name') }}</label>

                            <div class="col-md-6">
                                <input id="JobName" type="text" class="form-control{{ $errors->has('JobName') ? ' is-invalid' : '' }}" name="JobName" value="{{ old('JobName') }}" required autofocus>

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
                                <input id="JobSalary" type="JobSalary" class="form-control{{ $errors->has('JobSalary') ? ' is-invalid' : '' }}" name="JobSalary" value="{{ old('JobSalary') }}" required>

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
                                <textarea id="JobDesc" type="JobDesc" class="form-control{{ $errors->has('JobDesc') ? ' is-invalid' : '' }}" name="JobDesc" required></textarea>

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
                                    {{ __('Register') }}
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
