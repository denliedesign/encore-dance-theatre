@extends('layouts.app')
@section('title', 'Encore Dance Theatre | Dancily Online')
@section('description', '')
@section('content')

    <h1 class="head py-4">Dancily Online</h1>
    <div class="container mt-3">
        <div class="d-flex justify-content-center">
            <img src="/images/dancily-logo.jpeg" alt="dancily online dance class logo" class="img-fluid">
        </div>
        <div class="row">
            <div class="col-sm d-flex align-items-center">
                <div>
                    <p>
                        Encore in partnership with Twinkle Star Dance is introducing Dancily our brand-new, dance-at-home weekly themed dance class! Dancers ages 2-7 and 5-10 will enjoy having a creative dance outlet safe at home, plus they will have fun with our new weekly themes, choreography, printable crafts, and connecting with friends.
                        <br><br>Our Dancily membership is $79 a month and includes:
                    </p>
                    <ul>
                        <li>Access to ALL Dancily classes available for your child’s age group-up to 6 classes per week!</li>
                        <li>Dress up and search for props from home</li>
                        <li>Interactive and engaging</li>
                        <li>Printable coloring sheets and activities</li>
                    </ul>
                </div>
            </div>
            <div class="col-sm d-flex justify-content-center">
                <img src="/images/dancily.jpg" alt="young girl dancer holding teddy bear" class="img-fluid">
            </div>
        </div>

        <a href="https://app.thestudiodirector.com/encoredancetheatreofs/portal.sd?page=Login" target="_blank" style="text-decoration: none;"><button class="btn btn-lg btn-pink my-4 text-white" style="margin: 0 auto; display: block;">Register for Dancily now!</button></a>

    </div>

@endsection
