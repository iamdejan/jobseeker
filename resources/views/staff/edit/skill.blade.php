@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update Skill') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('/staff/skill/edit/' . $skill->SkillID) }}">
                        @csrf

                        <div class="form-group row">
                            <label for="skill_name" class="col-md-4 col-form-label text-md-right">{{ __('Skill Name') }}</label>

                            <div class="col-md-6">
                                <input id="skill_name" type="skill_name" class="form-control{{ $errors->has('skill_name') ? ' is-invalid' : '' }}" name="skill_name" value="{{ $skill->SkillName }}" required>

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
                                    {{ __('Update') }}
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
