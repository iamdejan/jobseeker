@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/staff/login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="StaffID" class="col-sm-4 col-form-label text-md-right">{{ __('Staff ID') }}</label>

                            <div class="col-md-6">
                                <input id="StaffID" type="StaffID" class="form-control{{ $errors->has('StaffID') ? ' is-invalid' : '' }}" name="StaffID" value="{{ old('StaffID') }}" required autofocus>

                                @if ($errors->has('StaffID'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('StaffID') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="StaffPassword" class="col-md-4 col-form-label text-md-right">{{ __('password') }}</label>

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
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
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