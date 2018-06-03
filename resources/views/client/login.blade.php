@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/client/login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="ClientEmail" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Klien') }}</label>

                            <div class="col-md-6">
                                <input id="ClientEmail" type="ClientEmail" class="form-control{{ $errors->has('ClientEmail') ? ' is-invalid' : '' }}" name="ClientEmail" value="{{ old('ClientEmail') }}" required autofocus>

                                @if ($errors->has('ClientEmail'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ClientEmail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ClientPassword" class="col-md-4 col-form-label text-md-right">{{ __('password') }}</label>

                            <div class="col-md-6">
                                <input id="ClientPassword" type="password" class="form-control{{ $errors->has('ClientPassword') ? ' is-invalid' : '' }}" name="ClientPassword" required>

                                @if ($errors->has('ClientPassword'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ClientPassword') }}</strong>
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
                            <div class="col-md-10 offset-md-4">
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