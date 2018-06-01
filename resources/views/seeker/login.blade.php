@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/seeker/login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="SeekerEmail" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="SeekerEmail" type="SeekerEmail" class="form-control{{ $errors->has('SeekerEmail') ? ' is-invalid' : '' }}" name="SeekerEmail" value="{{ old('SeekerEmail') }}" required autofocus>

                                @if ($errors->has('SeekerEmail'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('SeekerEmail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="SeekerPassword" class="col-md-4 col-form-label text-md-right">{{ __('password') }}</label>

                            <div class="col-md-6">
                                <input id="SeekerPassword" type="password" class="form-control{{ $errors->has('SeekerPassword') ? ' is-invalid' : '' }}" name="SeekerPassword" required>

                                @if ($errors->has('SeekerPassword'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('SeekerPassword') }}</strong>
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