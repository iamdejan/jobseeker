@extends('layouts.app')

@section('content')

<div class="sidenav">
    <a href=""><img src="<!-- url gambar -->" class="rounded mx-auto d-block" alt="Seeker Photo" style="border: 1px solid black; border-radius: 50%;"></a>
    <a href="{{ url('/seeker/home') }}">My Profile</a>
    <a href="{{ url('/seeker/jobs') }}">Job Applied</a>
</div>

<div class="container">
    <div class="row justify-content-center">
            <!-- Photo Profile Of Seeker -->
            <!-- <div class="col-sm-4">
                
                <div class="list-group" id="list-tab" role="tablist">
                  <a class="list-group-item list-group-item-action" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">My Profile</a>
                  <a class="list-group-item list-group-item-action active" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">Job Applied</a>
                </div>
            </div> -->
            <!-- Table Job Aplied By Seeker -->
        <div class="col-sm-10">
            <table class="table">
              <thead class="thead-light">
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Client Name</th>
                  <th scope="col">Job Name</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>

                @php
                $i = 1;
                @endphp

                @foreach($seeker->jobsApplied as $job)
                    <tr>
                        <th>{{ $i++ }}</th>
                        <th>{{ $job->client->ClientName }}</th>
                        <th>{{ $job->JobName }}</th>
                        <th>{{ $job->pivot->status }}</th>
                    </tr>
                @endforeach
<!-- 
                <tr>
                  <th scope="row">1</th>
                  <td>Client Name 1</td>
                  <td>Job Name 1</td>
                  <td>Status Job 1</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Client Name 2</td>
                  <td>Job Name 2</td>
                  <td>Status Job 2</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Client Name 3</td>
                  <td>Job Name 3</td>
                  <td>Status Job 3</td>
                </tr> -->
              </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
