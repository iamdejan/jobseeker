@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/staff/register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="StaffID" class="col-md-4 col-form-label text-md-right">{{ __('Staff ID') }}</label>

                            <div class="col-md-6">
                                <input id="StaffID" type="text" class="form-control{{ $errors->has('StaffID') ? ' is-invalid' : '' }}" name="StaffID" value="{{ old('StaffID') }}" required autofocus>

                                @if ($errors->has('StaffID'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('StaffID') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="StaffName" class="col-md-4 col-form-label text-md-right">{{ __('Staff Name') }}</label>

                            <div class="col-md-6">
                                <input id="StaffName" type="text" class="form-control{{ $errors->has('StaffName') ? ' is-invalid' : '' }}" name="StaffName" value="{{ old('StaffName') }}" required autofocus>

                                @if ($errors->has('StaffName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('StaffName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="StaffPassword" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="StaffPassword" type="password" class="form-control{{ $errors->has('StaffPassword') ? ' is-invalid' : '' }}" name="StaffPassword" required>

                                @if ($errors->has('StaffPassword'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('StaffPassword') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
