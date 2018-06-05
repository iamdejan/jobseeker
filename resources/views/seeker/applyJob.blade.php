@extends('layouts.app')

@section('content')

<div class="sidenav">
    <a href="{{ url('/seeker/home') }}">My Profile</a>
    <a href="{{ url('/seeker/jobs') }}">Job Applied</a>
</div>

<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <!-- Photo Profile Of Client/Employer -->
            <div class="col-sm-4">
                <img src="<!-- url gambar -->" class="rounded mx-auto d-block" alt="Seeker Photo" style="border: 1px solid black; border-radius: 50%;">
                <!-- Brief Description of the Company -->
                <ul class="list-group">
                  <li class="list-group-item">
                    Client Name: 

                  </li>
                  <li class="list-group-item">
                    bla bla bla

                  </li>
                  <li class="list-group-item">
                    bla bla bla

                  </li>
                  <li class="list-group-item">
                    bla bla bla

                  </li>
                  <li class="list-group-item">
                    bla bla bla

                  </li>
                </ul>
            </div>
            <!-- Job Description -->
            <div class="col-sm-8">
                <h3>Job Title</h3><br><br>

                <h4>Job Description</h4><br>
                <p>Deskripsi jobnya</p><br>
                
                <h4>Your Cover Letter</h4>
                <p>tempat buat ngetik cover letter kita</p>
                <button>Submit Cover Letter</button>
            </div>
        </div>
    </div>
</div>
@endsection
