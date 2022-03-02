@extends('layouts.app')
@section('title', 'Encore Dance Theatre | Recital')
@section('description', '')
@section('content')

    <h1 class="head py-4">Recital</h1>
    <div class="container mt-3">
        <div class="row">
            <div class="col-sm">
                <div>
                    <img src="/images/mobile-app-2022.jpg" alt="mobile app info" class="img-fluid shadow rounded">
                    <div class="d-flex justify-content-center">
                        <a href="https://play.google.com/store/apps/details?id=com.encoredancetheatre.mi" target="_blank"><img src="/images/edt-apple-store.png" alt="apple mobile app" class="m-3 img-fluid"></a>
                        <a href="https://apps.apple.com/app/id1528239603" target="_blank"><img src="/images/edt-google-play.png" alt="google mobile app" class="m-3 img-fluid"></a>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <p style="font-size: 1.5em;">
                    The opportunity to perform in a recital is an exciting, empowering and confidence-building part of the training process. This is where we love to watch our students learn about the theatre, rehearsals and teamwork while they enjoy the opportunity to showcase their skills in a professionally run production. <span style="background: #0092BC;" class="text-white font-weight-bold rounded p-1 m-1">Recitals are a wonderful way for students to showcase the results of their hard work and for family and friends to join in the pride of their achievement.</span> We love giving all students the chance to perform for their family and friends in a supportive environment and encourage even our youngest and newest performers to be involved.
                    <br><br>
                    This is without a doubt the highlight of our year and we are giddy with excitement to show you how hard our dancers have been working!
                </p>
            </div>
        </div>
        <div class="row my-5" style="font-size: 1.5em;">
            <div class="col-sm text-center my-3">
                <div class="d-flex justify-content-center" style="font-size: 3em; color: #0092bc;">
                    <ion-icon name="location-outline"></ion-icon>
                </div>
                <b><u>Location:</u></b>
                <br>
                Lauderhill Performing Arts Center
                <br>
                3800 NW 11th Pl
                <br>
                Lauderhill, FL 33311
            </div>
            <div class="col-sm text-center my-3">
                <div class="d-flex justify-content-center" style="font-size: 3em; color: #0092bc;">
                    <ion-icon name="today-outline"></ion-icon>
                </div>
                <b><u>Days / Times:</u></b>
                <br>
                Arrival Time Show #1: 10:30am
                <br>
                Arrival Time Show #2: 3:30pm
                <br>
                Show #1: Saturday, June 4th @ 11am
                <br>
                Show #2: Saturday, June 4th @ 4pm
            </div>
        </div>
    </div>

@endsection
