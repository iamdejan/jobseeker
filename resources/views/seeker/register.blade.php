@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/seeker/register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="fName" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fName" type="text" class="form-control{{ $errors->has('fName') ? ' is-invalid' : '' }}" name="fName" value="{{ old('fName') }}" required autofocus>

                                @if ($errors->has('fName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('fName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="lName" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lName" type="text" class="form-control{{ $errors->has('lName') ? ' is-invalid' : '' }}" name="lName" value="{{ old('lName') }}" required autofocus>

                                @if ($errors->has('lName'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="SeekerPhone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="SeekerPhone" type="SeekerPhone" class="form-control{{ $errors->has('SeekerPhone') ? ' is-invalid' : '' }}" name="SeekerPhone" required>

                                @if ($errors->has('SeekerPhone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('SeekerPhone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="SeekerEmail" class="col-md-4 col-form-label text-md-right">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="SeekerEmail" type="SeekerEmail" class="form-control{{ $errors->has('SeekerEmail') ? ' is-invalid' : '' }}" name="SeekerEmail" value="{{ old('SeekerEmail') }}" required>

                                @if ($errors->has('SeekerEmail'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('SeekerEmail') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="SeekerAddress" class="col-md-4 col-form-label text-md-right">{{ __('Seeker Address') }}</label>

                            <div class="col-md-6">
                                <textarea id="SeekerAddress" type="SeekerAddress" class="form-control{{ $errors->has('SeekerAddress') ? ' is-invalid' : '' }}" name="SeekerAddress" required></textarea>

                                @if ($errors->has('SeekerAddress'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('SeekerAddress') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="SeekerGender" class="col-md-4 col-form-label text-md-right">{{ __('Seeker Gender') }}</label>

                            <div class="col-md-6">
                                
                                <select id="SeekerGender" name="SeekerGender">
                                    <option>Choose...</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>

                                @if ($errors->has('SeekerGender'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('SeekerGender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="SeekerPassword" class="col-md-4 col-form-label text-md-right">{{ __('Seeker Password') }}</label>

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
