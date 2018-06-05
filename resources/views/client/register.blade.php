@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/client/register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="ClientNPWP" class="col-md-4 col-form-label text-md-right">{{ __('Client NPWP') }}</label>

                            <div class="col-md-6">
                                <input id="ClientNPWP" type="text" class="form-control{{ $errors->has('ClientNPWP') ? ' is-invalid' : '' }}" name="ClientNPWP" value="{{ old('ClientNPWP') }}" required autofocus>

                                @if ($errors->has('ClientNPWP'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ClientNPWP') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ClientName" class="col-md-4 col-form-label text-md-right">{{ __('Client Name') }}</label>

                            <div class="col-md-6">
                                <input id="ClientName" type="text" class="form-control{{ $errors->has('ClientName') ? ' is-invalid' : '' }}" name="ClientName" value="{{ old('ClientName') }}" required autofocus>

                                @if ($errors->has('ClientName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ClientName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ClientEmail" class="col-md-4 col-form-label text-md-right">{{ __('Client Email') }}</label>

                            <div class="col-md-6">
                                <input id="ClientEmail" type="ClientEmail" class="form-control{{ $errors->has('ClientEmail') ? ' is-invalid' : '' }}" name="ClientEmail" value="{{ old('ClientEmail') }}" required>

                                @if ($errors->has('ClientEmail'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ClientEmail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ClientAddress" class="col-md-4 col-form-label text-md-right">{{ __('Client Address') }}</label>

                            <div class="col-md-6">
                                <textarea id="ClientAddress" type="ClientAddress" class="form-control{{ $errors->has('ClientAddress') ? ' is-invalid' : '' }}" name="ClientAddress" required></textarea>

                                @if ($errors->has('ClientAddress'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ClientAddress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ClientPhone" class="col-md-4 col-form-label text-md-right">{{ __('Client Phone') }}</label>

                            <div class="col-md-6">
                                <input id="ClientPhone" type="ClientPhone" class="form-control{{ $errors->has('ClientPhone') ? ' is-invalid' : '' }}" name="ClientPhone" required>

                                @if ($errors->has('ClientPhone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ClientPhone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ClientDesc" class="col-md-4 col-form-label text-md-right">{{ __('Client Description') }}</label>

                            <div class="col-md-6">
                                <textarea id="ClientDesc" type="ClientDesc" class="form-control{{ $errors->has('ClientDesc') ? ' is-invalid' : '' }}" name="ClientDesc" required></textarea>

                                @if ($errors->has('ClientDesc'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ClientDesc') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ClientPassword" class="col-md-4 col-form-label text-md-right">{{ __('Client Password') }}</label>

                            <div class="col-md-6">
                                <input id="ClientPassword" type="ClientPassword" class="form-control{{ $errors->has('ClientPassword') ? ' is-invalid' : '' }}" name="ClientPassword" required>

                                @if ($errors->has('ClientPassword'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('ClientPassword') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="ClientAddress" class="form-control" name="password_confirmation" required>
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
