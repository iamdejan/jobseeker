@extends('layouts.app')

@section('content')

<div class="sidenav">
    <a href=""><img src="#" class="rounded mx-auto d-block" alt="Seeker Photo" style="border: 1px solid black; border-radius: 50%;"></a>
    <a href="{{ url('/seeker/home') }}">My Profile</a>
    <a href="{{ url('/seeker/jobs') }}">Job Applied</a>
</div>

<div class="container">
    <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card">
                    <div class="card-header">
                        <h3>{{ $job->JobName }}</h3>
                    </div>

                    <div class="card-body">
                        @if(DB::table('applyqueue')->where('SeekerID', Auth::guard('seeker')->user()->SeekerID)
                                                   ->where('JobID', $job->JobID)->first() == null)
                            Salary: Rp {{ $job->JobSalary }}<br><br>
                            Description:<br>
                            {{ $job->JobDescription }}<br>
                            <br>
                            Skills needed:<br>
                            @foreach($job->skills as $skill)
                                - {{ $skill->SkillName }}<br>
                            @endforeach
                            <br>
                            Client: {{ $job->client->ClientName }}<br><br>

                            <form method="POST" action="{{ url('/seeker/apply/' . $job->JobID) }}">
                                @csrf
                                Why do you want this job?<br>
                                <textarea name="description"></textarea><br>

                                <button type="submit" class="btn btn-success">Apply!</a>
                            </form>
                        @else
                            You already apply!
                        @endif
                    </dic>
                </div>

            </div>
        <!-- </div> -->
        
    </div>
</div>
@endsection
