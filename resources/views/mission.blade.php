@extends('layouts.app')
@section('title', 'Encore Dance Theatre | Mission')
@section('description', '')
@section('content')

    <div class="team-bg-wrap d-none d-md-block">
        <div class="choose-bg"></div>
    </div>
    <img src="/images/about-edt.jpg" alt="group of dancers smiling" class="d-block d-md-none img-fluid">

    <h1 class="head py-4">Why Choose Encore?</h1>
    <div class="container">
        <div class="d-flex justify-content-center pt-4">
            <video width="100%" height="auto" poster="/images/parent-interview-poster-image.jpg" controls>
                <source src="/images/edt-parent-interviews.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        <p class="text-center py-4" style="font-size: 1.25em">
            Encore is a place where kids of all ages learn to dance and perform. This is a studio where creativity, individuality and self-expression is encouraged and has a community of teachers, students and families who are passionate about performing arts. Our goal is to create a positive and happy experience for all of our students. We strive to nurture and develop talent, celebrate the achievements of all students and inspire a love and appreciation of all styles of dance and the arts. We are committed to providing a safe and positive environment in which all students can feel empowered, comfortable and free to express themselves.
        </p>
    </div>

    <div class="bg-dark">
        <div class="container">
            <div class="row py-4">
                <div class="col-sm-7 d-flex align-items-center mb-2">
                    <video class="mission-video" src="images/twinkle.mov" autoplay="" muted="" loop="" controls="" style="width: 100%;">
                    </video>
                </div>
                <div class="col-sm-5">
                    <img src="images/twinkle-logo.png" alt="" style="width: 70%; height: auto; display: block; margin: 0 auto;">
                    <p style="font-size: 16px; line-height: 2em;">
                        We love this program and are finding it to be a well-rounded, effective program for teaching technique to young dancers in a fun, accessible way!
                        <br><br>
                        It gives the studio more cohesiveness as dancers start out young and travel up in level as well as age. The program takes techniques and concepts that kids can grasp and makes them easy to learn.
                        <br><br>
                        It’s fun, age appropriate activities, music, & combos. It has a good schedule and the breakdowns work great.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="team-bg-wrap d-none d-md-block">
        <div class="mission-bg"></div>
    </div>
    <img src="/images/mission-statement.jpg" alt="two baby dancers hugging" class="d-block d-md-none img-fluid">

    <h1 class="head py-4">Mission Statement</h1>
    <div class="container">
        <p class="text-center py-4" style="font-size: 1.25em">
            Our main objective is to assist each student to reach his or her own potential and to experience enjoyment through dance. For over 30 combined years Encore Dance Theatre has provided the very best in dance education in our community. Our goal is to provide a fun, energetic and positive environment and we encourage each student to be the best they can be.
        </p>
    </div>

    <div id="values" class="d-flex justify-content-center">
        <div class="container">
            <img src="images/edt-culture.jpg" alt="encore list of values" class="img-fluid">
        </div>
    </div>

    <h1 class="head py-4" id="facility">Facility</h1>
    <div class="bg-dark py-4">
    <div class="container">
        <div class="kid-class-row row">
            <div class="kid-class-col col-sm">
                <div class="kid-class-item row d-flex align-items-center">
                    <div class="col-3 kid-class-check"><div name="checkmark" class="checkmarked">&#10003;</div></div>
                    <div class="col-9 kid-class-txt"><p>4 Professional Studios</p></div>
                </div>
                <div class="kid-class-item row d-flex align-items-center">
                    <div class="col-3 kid-class-check"><div data-aos-delay="600" name="checkmark" class="checkmarked">&#10003;</div></div>
                    <div class="col-9 kid-class-txt"><p>Suspended Marley Dance Floors</p></div>
                </div>
                <div class="kid-class-item row d-flex align-items-center">
                    <div class="col-3 kid-class-check"><div data-aos-delay="1200" name="checkmark" class="checkmarked">&#10003;</div></div>
                    <div class="col-9 kid-class-txt"><p>Private Dressing Room</p></div>
                </div>
            </div>
            <div class="kid-class-col col-sm">
                <div class="kid-class-item row d-flex align-items-center">
                    <div class="col-3 kid-class-check"><div data-aos-delay="200" name="checkmark" class="checkmarked">&#10003;</div></div>
                    <div class="col-9 kid-class-txt"><p>Study Area</p></div>
                </div>
                <div class="kid-class-item row d-flex align-items-center">
                    <div class="col-3 kid-class-check"><div data-aos-delay="800" name="checkmark" class="checkmarked">&#10003;</div></div>
                    <div class="col-9 kid-class-txt"><p>Spacious Lobby</p></div>
                </div>
                <div class="kid-class-item row d-flex align-items-center">
                    <div class="col-3 kid-class-check"><div data-aos-delay="1400" name="checkmark" class="checkmarked">&#10003;</div></div>
                    <div class="col-9 kid-class-txt"><p>Eleve Dancewear Boutique</p></div>
                </div>
            </div>
            <div class="kid-class-col col-sm">
                <div class="kid-class-item row d-flex align-items-center">
                    <div class="col-3 kid-class-check"><div data-aos-delay="400" name="checkmark" class="checkmarked">&#10003;</div></div>
                    <div class="col-9 kid-class-txt"><p>Family Friendly</p></div>
                </div>
                <div class="kid-class-item row d-flex align-items-center">
                    <div class="col-3 kid-class-check"><div data-aos-delay="1000" name="checkmark" class="checkmarked">&#10003;</div></div>
                    <div class="col-9 kid-class-txt"><p>T.V. Monitors</p></div>
                </div>
                <div class="kid-class-item row d-flex align-items-center">
                    <div class="col-3 kid-class-check"><div data-aos-delay="1600" name="checkmark" class="checkmarked">&#10003;</div></div>
                    <div class="col-9 kid-class-txt"><p>Break Room</p></div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <iframe src="https://www.google.com/maps/embed?pb=!4v1564153226826!6m8!1m7!1sCAoSK0FGMVFpcFBmcmVGWFhfZnBTNGh1SVFIWGVDMjRVQzFULUZfeUUxTEhhSkU.!2m2!1d26.170434017849!2d-80.29748460741!3f317.23907659428306!4f-4.19281839230932!5f0.7820865974627469" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>

@endsection
