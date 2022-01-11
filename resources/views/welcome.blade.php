@extends('layouts.app')
@section('content')

    <!-- Modal -->
    <div id="summerModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-encore text-white text-uppercase">
                    <h4 class="modal-title font-weight-bold" style="text-shadow: 1px 1px 2px black;">Register for Fall 2021 Now</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="/fall"><img src="/images/fall-popup.jpg" alt="" class="img-fluid"></a>
                </div>
{{--                <div class="model-footer d-flex justify-content-center align-items-center mb-3">--}}
{{--                    <p class="mr-3 mb-0">Can't Wait Till Fall?</p>--}}
{{--                    <a href="/summer"><button type="button" class="btn btn-lg bg-encore-blue text-white">See Our Summer Offerings!</button></a>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>

    <video class="head-video" src="images/edt-promo-2.mov" autoplay="" muted="" controls="" loop="">
    </video>

    <div id="vision-head">
{{--        <div class="d-flex align-items-center justify-content-center py-4" style="background: #16171c;">--}}
{{--            <div class="row container">--}}
{{--                <div class="col-sm d-flex justify-content-end align-items-center m-0 p-0">--}}
{{--                    <h1 class="text-white text-center text-uppercase">In-Person Classes & Virtual Classes Available</h1>--}}
{{--                </div>--}}
{{--                <div class="col-sm d-flex justify-content-center">--}}
{{--                    <img src="/images/new-day-recital.png" alt="a new day recital logo" style="height: 200px; width: auto;">--}}
{{--                </div>--}}
{{--                <div class="col-sm d-flex justify-content-start align-items-center m-0 p-0">--}}
{{--                    <a href="https://sites.google.com/view/edtrecital2021/home" target="_blank">--}}
{{--                        <h1 class="text-white text-center text-uppercase">Please click here for all recital 2021 information!</h1>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row p-0 m-0">--}}
{{--            <div class="col-sm p-0 m-0">--}}
{{--                <img src="/images/edt-mobile.png" alt="girl holding up encore dance mobile app" class="img-fluid">--}}
{{--            </div>--}}
{{--            <div class="col-sm p-0 m-0 d-flex justify-content-center align-items-center">--}}
{{--                <div>--}}
{{--                    <a href="https://play.google.com/store/apps/details?id=com.encoredancetheatre.mi" target="_blank"><img src="/images/edt-google-play.png" alt="google play store" class="img-fluid d-block my-4"></a>--}}
{{--                    <a href="https://apps.apple.com/app/id1528239603" target="_blank"><img src="/images/edt-apple-store.png" alt="apple store" class="img-fluid d-block my-4"></a>--}}
{{--                    <img src="/images/edt-mobile-code.jpg" alt="encore mobile app qr code" class="img-fluid d-block my-4">--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </div>

    <div id="next-steps-section">
        <div class="container py-5">
            <h1 class="text-uppercase text-center text-white">Take the first step to dance with us enroll today!</h1>
            <div class="row">
                <div class="col-sm next-step shadow m-2 py-4">
                    <p class="txt-encore">Ready To Leap In?</p>
                    <a href="https://app.thestudiodirector.com/encoredancetheatreofs/portal.sd?page=Login" target="_blank" class="btn-opacity"><div class="shadow btn btn-lg btn-encore btn-family">&#10097; Enroll today!</div></a>
                </div>
                <div class="col-sm next-step shadow m-2 py-4">
                    <p class="txt-encore">Want To Give It A Try?</p>
                    <div>
                        {{--                    <button type="button" class="shadow btn btn-lg btn-blue btn-family btn-opacity" data-bs-toggle="modal" data-bs-target="#exampleModal">&#10097; Schedule A Trial!</button>--}}
                        <a href="/#tryit" class="btn-opacity"><div class="shadow btn btn-lg btn-encore btn-family">&#10097; Schedule A Trial!</div></a>

                    </div>
                </div>
                <div class="col-sm next-step shadow m-2 py-4">
                    <p class="txt-encore">Still Have Questions?</p>
                    <a href="/contact" class="btn-opacity"><div class="shadow btn btn-lg btn-encore btn-family">&#10097; Contact Us!</div></a>
                </div>
            </div>
            <div class="d-flex justify-content-center pt-3">
                <div class="row">
                    <img src="/images/recital-scan.jpg" class="img-fluid rounded" alt="">
                </div>
            </div>
        </div>
    </div>

    <div class="bg-dark">
        <div class="container">
            <div class="row py-5">
                <div class="col-md-7 text-center d-flex align-items-center">
                    <div>
                        <h1 class="text-uppercase">We Have Built a Reputation for Excellence in Dance Instruction</h1>
                        <p style="font-size: 1.25em; line-height: 2.5;">
                            Encore Dance Theatre has been welcoming dance enthusiasts of all ages and skill levels for more than 30 combined years. From your child’s first class to their graduation performance, EDT has a class for everyone! We offer training from beginners of all ages through pre-professional levels. But, EDT is More Than Just Great Dancing®! Our dancers go beyond technique to develop important life skills, learning to be respectful, confident and conscientious young people who share their gifts and talents with the community.
                        </p>
                        <button class="btn btn-lg btn-outline-primary mb-2">Welcome to<br><span id="encore-btn">Encore</span><br>Dance Theatre</button>
                    </div>
                </div>
                <div class="col-md-5 text-center" id="tryit">
                    <div id="trial-img">
                        <img src="images/CharleeTutus.png" alt="" class="img-fluid">
                    </div>
                    <h5 class="modal-title mt-2" id="trymodalLabel">Your First Class FREE</h5>
                    <small class="text-muted">Limited availability. For a short time only.</small>
                    <div class="modal-body text-left mx-2">
                        @include('trial.form')
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row tri-wrap mx-0 px-0">
        <div class="col-sm p-0 tri-overlay">
                <img src="images/mission.jpg" alt="" class="img-fluid">
                <p class="tri-txt">Mission</p>
                <div class="tri-plus" type="button" data-toggle="collapse" data-target="#collapseMission" aria-expanded="false" aria-controls="collapseMission">
                    <ion-icon name="add-circle-outline"></ion-icon>
                </div>
                <div class="collapse" id="collapseMission">
                    <button class="btn btn-primary"><a href="/mission">Learn More</a></button>
                </div>
        </div>
        <div class="col-sm p-0 tri-overlay">
            <img src="images/values.jpg" alt="" class="img-fluid">
            <p class="tri-txt">Values</p>
            <div class="tri-plus" type="button" data-toggle="collapse" data-target="#collapseValues" aria-expanded="false" aria-controls="collapseValues">
                <ion-icon name="add-circle-outline"></ion-icon>
            </div>
            <div class="collapse" id="collapseValues">
                <button class="btn btn-primary"><a href="/mission#values">Learn More</a></button>
            </div>
        </div>
        <div class="col-sm p-0 tri-overlay">
            <img src="images/expertise.jpg" alt="" class="img-fluid">
            <p class="tri-txt">Expertise</p>
            <div class="tri-plus" type="button" data-toggle="collapse" data-target="#collapseExpertise" aria-expanded="false" aria-controls="collapseExpertise">
                <ion-icon name="add-circle-outline"></ion-icon>
            </div>
            <div class="collapse" id="collapseExpertise">
                <button class="btn btn-primary"><a href="/staff">Learn More</a></button>
            </div>
        </div>
    </div>

    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/Community.jpg" class="d-block w-100" alt="...">
                <div class="carousel-text">
                    <h5>give back to our community</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/familyfirst.JPG" class="d-block w-100" alt="...">
                <div class="carousel-text">
                    <h5>family first</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/encouragecreativity.JPG" class="d-block w-100" alt="...">
                <div class="carousel-text">
                    <h5>encourage creativity</h5>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/Lessons.jpg" class="d-block w-100" alt="...">
                <div class="carousel-text">
                    <h5>dance lessons teach life lessons</h5>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="text-white d-none d-md-block">
        <div class="row m-0 c-0">
            <div class="col-6 bg-light-gray pl-5 py-5">
                <div class="container">
                    <h1 class="text-uppercase text-center">edt is a safer studio</h1>
                    <p class="text-center">EDT focuses on a hierarchy of measures to create a Safer Studio&trade; environment beginning with requiring students and staff who are ill to stay home, followed by frequent hand cleansing and good hygiene practices, amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.</p>
                    <div class="d-flex justify-content-center">
                        <img src="/images/safer-studio-logo.png" alt="" style="max-height: 200px;">
                    </div>
                </div>
            </div>
            <div class="col-6 bg-mdu-gray py-5">
                <div class="container">
                    <video width="100%" height="auto" poster="/images/safer-studio-poster-image.jpg" controls>
                        <source src="/images/edt-covid.MP4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
{{--                    <div class="row">--}}
{{--                        <div class="col-sm">--}}
{{--                            <h1 class="text-uppercase">studio&trade;</h1>--}}
{{--                            <p class="font-weight-bold">EDT is Youth Protection Advocates in Dance&reg; Certified!</p>--}}
{{--                            <p>--}}
{{--                                <ion-icon name="checkmark"></ion-icon> Background checked and CPR certified teachers--}}
{{--                                <br><ion-icon name="checkmark"></ion-icon> Safety Studio&trade; Policy--}}
{{--                                <br><ion-icon name="checkmark"></ion-icon> Teacher training & proven curriculum--}}
{{--                                <br><ion-icon name="checkmark"></ion-icon> A focus on safety & wellness for every student--}}
{{--                                <br><ion-icon name="checkmark"></ion-icon> Secured facilities--}}
{{--                                <br><ion-icon name="checkmark"></ion-icon> T. V. Monitors to view classes--}}
{{--                                <br><ion-icon name="checkmark"></ion-icon> Professional sprung floors--}}
{{--                                <br><ion-icon name="checkmark"></ion-icon> Social media safety practices--}}
{{--                            </p>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm d-flex align-items-center justify-content-center">--}}
{{--                            <img src="/images/ypad-logo-rotate.png" alt="" class="img-fluid">--}}
{{--                        </div>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>

    <div class="py-5 p-2 text-white d-block d-md-none bg-mdu-gray text-white" style="background: #657380 !important;">
        <h2 class="text-uppercase">edt is a safer studio&trade;</h2>
        <p>EDT focuses on a hierarchy of measures to create a Safer Studio&trade; environment beginning with requiring
            students and staff who are ill to stay home, followed by frequent hand cleansing and good hygiene practices,
            amplified cleaning, and making curricular and facility adaptations to minimizing contact and mingling.</p>
        <div class="d-flex justify-content-center pb-2">
            <img src="/images/safer-studio-logo.png" alt="" style="max-height: 250px;">
        </div>
{{--        <p class="font-weight-bold">EDT is Youth Protection Advocates in Dance&reg; Certified!</p>--}}
{{--        <p>--}}
{{--            <ion-icon name="checkmark"></ion-icon>--}}
{{--            Background checked and CPR certified teachers--}}
{{--            <br>--}}
{{--            <ion-icon name="checkmark"></ion-icon>--}}
{{--            Safety Studio&trade; Policy--}}
{{--            <br>--}}
{{--            <ion-icon name="checkmark"></ion-icon>--}}
{{--            Teacher training & proven curriculum--}}
{{--            <br>--}}
{{--            <ion-icon name="checkmark"></ion-icon>--}}
{{--            A focus on safety & wellness for every student--}}
{{--            <br>--}}
{{--            <ion-icon name="checkmark"></ion-icon>--}}
{{--            Secured facilities--}}
{{--            <br>--}}
{{--            <ion-icon name="checkmark"></ion-icon>--}}
{{--            T. V. Monitors to view classes--}}
{{--            <br>--}}
{{--            <ion-icon name="checkmark"></ion-icon>--}}
{{--            Professional sprung floors--}}
{{--            <br>--}}
{{--            <ion-icon name="checkmark"></ion-icon>--}}
{{--            Social media safety practices--}}
{{--        </p>--}}
{{--        <div class="d-flex justify-content-center">--}}
{{--            <img src="/images/ypad-logo-rotate.png" alt="" style="height: 150px;">--}}
{{--        </div>--}}
        <div class="d-flex justify-content-center py-5">
            <div class="container">
                <video width="100%" height="auto" poster="/images/safer-studio-poster-image.jpg" controls>
                    <source src="/images/edt-covid.MP4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>


    <div id="carouselTestimonial" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselTestimonial" data-slide-to="0" class="active"></li>
            <li data-target="#carouselTestimonial" data-slide-to="1"></li>
            <li data-target="#carouselTestimonial" data-slide-to="2"></li>
            <li data-target="#carouselTestimonial" data-slide-to="3"></li>
            <li data-target="#carouselTestimonial" data-slide-to="4"></li>
            <li data-target="#carouselTestimonial" data-slide-to="5"></li>
            <li data-target="#carouselTestimonial" data-slide-to="6"></li>
            <li data-target="#carouselTestimonial" data-slide-to="7"></li>
            <li data-target="#carouselTestimonial" data-slide-to="8"></li>
            <li data-target="#carouselTestimonial" data-slide-to="9"></li>
            <li data-target="#carouselTestimonial" data-slide-to="10"></li>
        </ol>
        <div class="carousel-inner container">
            <div class="carousel-item active">
                <q>Encore Dance Theatre is a top-notch studio where students build self-confidence, integrity and a technical knowledge in dance! Each family becomes a part of the Encore family and is welcomed by a friendly and knowledgeable staff! It is the place to be for dance classes!</q><p>Misty Lown</p>
            </div>
            <div class="carousel-item">
                <q>Just the best</q><p>Chastity Rivera</p>
            </div>
            <div class="carousel-item">
                <q>Encore is one of the best studios to be a part of! We have a team of parents, students and teachers that know how to act right, they provide age appropriate music for the kids and they have a ton of talent that comes out of that studio past and present. So proud to be part of such an amazing dance team.</q><p>Tina Filippelli</p>
            </div>
            <div class="carousel-item">
                <q>Encore is the best dance studio in Florida.</q><p>Patricia Marie</p>
            </div>
            <div class="carousel-item">
                <q>Much more than dance if you ask me! encore is about integrity, commitment, dedication and passion! it's my daughters home away from home.</q><p>Karen Cerna</p>
            </div>
            <div class="carousel-item">
                <q>This is my first year at encore and I love it with every dancer I felt the love in their hearts on stage. Thanks for a great year.</q><p>Alexandra Dastinot</p>
            </div>
            <div class="carousel-item">
                <q>I am very happy with Encore Dance Studio, my granddaughter is doing what she love to do dance since she was 2 1/2 with the help of Mrs Ann and her amazing staff!! Thank you!!!</q><p>Edna Budet</p>
            </div>
            <div class="carousel-item">
                <q>Our story with this amazing studio started back in 2010 when my daughter was only 2 years old. Mrs. Anne Brodsky the actual owner did a trial class for my daughter, since she was under age for the classes they had back then. She was able to start doing combo classes and the adventure begins. My daughter was hard to handle, hyper and distracted but still Mrs. Anne had the patience and love to keep teaching her every Saturday morning. I need to mention that we move to Doral and we used to travel every Saturday just for my daughter dance classes. I can’t be more grateful. My daughter has already 6 years of dancing at Encore. That is her passion and Encore Dance Theater is our second home. It’s like this is a big family and it has been my best decision ever.</q><p>Patricia Arias</p>
            </div>
            <div class="carousel-item">
                <q>I couldn't be happier with Encore my daughter started dancing there at 3 and we are on our 6th year. She takes 4 classes a week tap hip hop acro and jazz its a loving and caring environment. She absolutely loves it. Mrs. Anne and her family are amazing the studio is a second home to all the kids who attend</q><p>Angelique Quintero</p>
            </div>
            <div class="carousel-item">
                <q>Encore dance is our second home. My kids have been their for the past 8 years. It's like family there. I don't live around the corner but I would drive from Boca to go there because of the friendly atmosphere and amazing work. They treat your kids like their own. If your looking for that perfect studio for your kids. No need to look any further. Come in a try a class you won't be disappointed.</q><p>Susan Vidarte</p>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselTestimonial" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselTestimonial" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <section class="insta-section">
        <div class="photobanner"><a href="https://www.instagram.com/edtdance/" target="_blank">
                <img class="first-img" src="images/gram14.jpg" alt="dancers">
                <img src="images/gram6.jpg" alt="dancers">
                <img src="images/gram2.jpg" alt="dancers">
                <img src="images/gram3.jpg" alt="dancers">
                <img src="images/gram4.jpg" alt="dancers">
                <img src="images/gram7.jpg" alt="dancers">
                <img src="images/gram5.jpg" alt="dancers">
                <img src="images/gram9.jpg" alt="dancers">
                <img src="images/gram8.jpg" alt="dancers">
                <img src="images/gram10.jpg" alt="dancers">
                <img src="images/gram11.jpg" alt="dancers">
                <img src="images/gram12.jpg" alt="dancers">
                <img src="images/gram14.jpg" alt="dancers">
            </a></div>
    </section>

    <div class="partners d-none d-md-block">
        <div class="row d-flex align-items-center px-0 mx-0">
            <div class="col img-fluid"><a><img src="images/partner-mtjgd.png" style="width: 100%;"></a></div>
            <div class="col img-fluid"><a><img src="images/partner-sou.png" style="width: 100%;"></a></div>
            <div class="col img-fluid"><a><img src="images/partner3.png" style="width: 100%;"></a></div>
            <div class="col img-fluid"><a><img src="images/partner1.png" style="width: 100%;"></a></div>
            <div class="col img-fluid"><a><img src="images/partner4.png" style="width: 100%;"></a></div>
            <div class="col img-fluid"><a><img src="images/partner5.png" style="width: 100%;"></a></div>
            <div class="col img-fluid"><a><img src="images/partner7.png" style="width: 100%;"></a></div>
            <div class="col img-fluid"><a href="https://www.travelingtutus.org/" target="_blank"><img src="images/partner8.png" style="width: 100%;" alt=""></a></div>
            <div class="col img-fluid"><a href="https://www.ypadnow.com/" target="_blank"><img src="images/ypad.png" style="width: 100%;" alt=""></a></div>
        </div>
    </div>
    <div class="partners d-md-none">
        <div class="row row-cols-3 d-flex align-items-center">
            <div class="col img-fluid"><a><img src="images/partner-mtjgd.png" style="width: 100%;"></a></div>
            <div class="col img-fluid"><a><img src="images/partner-sou.png" style="width: 100%;"></a></div>
            <div class="col img-fluid"><a><img src="images/partner3.png" style="width: 100%;"></a></div>
            <div class="col img-fluid"><a><img src="images/partner1.png" style="width: 100%;"></a></div>
            <div class="col img-fluid"><a><img src="images/partner4.png" style="width: 100%;"></a></div>
            <div class="col img-fluid"><a><img src="images/partner5.png" style="width: 100%;"></a></div>
            <div class="col img-fluid"><a><img src="images/partner7.png" style="width: 100%;"></a></div>
            <div class="col img-fluid"><a href="https://www.travelingtutus.org/" target="_blank"><img src="images/partner8.png" style="width: 100%;" alt=""></a></div>
            <div class="col img-fluid"><a href="https://www.ypadnow.com/" target="_blank"><img src="images/ypad.png" style="width: 100%;" alt=""></a></div>
        </div>
    </div>

@endsection
