@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Add New Skill') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/staff/skill/new') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="skill_id" class="col-md-4 col-form-label text-md-right">{{ __('Skill ID') }}</label>

                            <div class="col-md-6">
                                <input id="skill_id" type="text" class="form-control{{ $errors->has('skill_id') ? ' is-invalid' : '' }}" name="skill_id" value="{{ old('skill_id') }}" required autofocus>

                                @if ($errors->has('skill_id'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('skill_id') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="skill_name" class="col-md-4 col-form-label text-md-right">{{ __('Skill Name') }}</label>

                            <div class="col-md-6">
                                <input id="skill_name" type="skill_name" class="form-control{{ $errors->has('skill_name') ? ' is-invalid' : '' }}" name="skill_name" value="{{ old('skill_name') }}" required>

                                @if ($errors->has('skill_name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('skill_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
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
