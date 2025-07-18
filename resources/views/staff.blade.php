@extends('layouts.app')
@section('title', 'Encore Dance Theatre | Faculty')
@section('description', '')
@section('content')

    <div class="container">
{{--        <h1 class="head-white py-4">Our Faculty</h1>--}}
{{--        <div class="d-flex justify-content-center pb-4">--}}
{{--            <video width="100%" height="auto" poster="/images/staff-interviews-poster-image.jpg" controls>--}}
{{--                <source src="/images/edt-staff-interviews.mp4" type="video/mp4">--}}
{{--                Your browser does not support the video tag.--}}
{{--            </video>--}}
{{--        </div>--}}
    </div>

    <h1 class="head-white py-4">Our Faculty</h1>

    <div class="container py-5">
        <div class="row gy-4 poppins">
            <div class="col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-md">
                        <img src="/images/anne.jpg" class="img-fluid rounded mb-3" alt="Instructor Name">
                    </div>
                    <div class="col-md">
                        <h5 class="fw-bold mb-0 pb-0">Anne Brodsky</h5>
                        <h5 class="text-muted fw-bold">Owner/Artistic Director</h5>
                        <p class="mb-0 mt-2 font-sm" type="button" data-toggle="modal" data-target="#AnneModal">
                            {{ str('Anne has been sharing her passion for dance and mentorship with students for over 30 years. She is a proud member of More Than Just Great DancingTM and Dance Educators of America. She began teaching for Encore Dance Theatre in 1992 and has owned it since 2012. Anne beams with pride over the many accomplishments of her students and her studio.
')->words(50, '...') }}
                        </p>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="AnneModal" tabindex="-1" aria-labelledby="AnneModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="AnneModalLabel">Anne Brodsky</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Anne has been sharing her passion for dance and mentorship with students for over 30 years. She is a proud member of More Than Just Great DancingTM and Dance Educators of America. She began teaching for Encore Dance Theatre in 1992 and has owned it since 2012. Anne beams with pride over the many accomplishments of her students and her studio.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-md">
                        <img src="/images/deana.jpg" class="img-fluid rounded mb-3" alt="Instructor Name">
                    </div>
                    <div class="col-md">
                        <h5 class="fw-bold mb-0 pb-0">Deana Brickley</h5>
                        <p class="mb-0 mt-2 font-sm" type="button" data-toggle="modal" data-target="#DeanaModal">
                            {{ str('
Deana is from Orlando, Florida. She had the honor of being a New York City Radio City Music Hall Rockette for several seasons. Among her other accomplishments are: the TV show Glee, Smash, Bad Romance music video with Lady Gaga, PSA with Beyonce, performed with Jennifer Lopez at the American Music Video Awards, America’s Got Talent, and can be seen dancing with Lady Gaga in the MTV Video Awards. She has worked with prestigious artists and choreographers including assisting the Emmy award winning SYTYCD choreographer, Tessandra Chavez. She has also performed in the Equity production of Beauty and the Beast at Disney World as well as a high-kick dancer in Universal Studios.
')->words(50, '...') }}
                        </p>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="DeanaModal" tabindex="-1" aria-labelledby="DeanaModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="DeanaModalLabel">Deana Brickley</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Deana is from Orlando, Florida. She had the honor of being a New York City Radio City Music Hall Rockette for several seasons. Among her other accomplishments are: the TV show Glee, Smash, Bad Romance music video with Lady Gaga, PSA with Beyonce, performed with Jennifer Lopez at the American Music Video Awards, America’s Got Talent, and can be seen dancing with Lady Gaga in the MTV Video Awards. She has worked with prestigious artists and choreographers including assisting the Emmy award winning SYTYCD choreographer, Tessandra Chavez. She has also performed in the Equity production of Beauty and the Beast at Disney World as well as a high-kick dancer in Universal Studios.
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-md">
                        <img src="/images/bella-denton.jpg" class="img-fluid rounded mb-3" alt="Instructor Name">
                    </div>
                    <div class="col-md">
                        <h5 class="fw-bold mb-0 pb-0">Bella Denton</h5>
                        <p class="mb-0 mt-2 font-sm" type="button" data-toggle="modal" data-target="#BellaModal">
                            {{ str('
Bella Denton grew up in South Florida, and began dancing at the age of 3 training in ballet/pointe, tap, jazz, musical theatre, jazz funk and contemporary/lyrical. Right out of highschool she was accepted into Broadway Dance Center’s Professional Semester and spent 7 months in New York City training with some of the best teachers in the industry, performing, and learning the ins and outs of the professional dance world. After her time in NYC, Bella was invited and had her Choreography chosen to perform at Europe\'s top art festival: Festival Fringe in Edinburgh, Scotland. Afterwards, she moved back to South Florida and spent one season dancing on the Florida Panthers Dance Team.

Bella is currently a Miami Dolphins Cheerleader, and takes pride in dancing at all home games for the NFL community and Dolphins Fans at Hard Rock Stadium! Having teaching dance since she was 16 years old and choreographing for many years, she is immensely excited to be apart the EDT family!')->words(50, '...') }}
                        </p>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="BellaModal" tabindex="-1" aria-labelledby="BellaModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="BellaModalLabel">Bella Denton</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Bella Denton grew up in South Florida, and began dancing at the age of 3 training in ballet/pointe, tap, jazz, musical theatre, jazz funk and contemporary/lyrical. Right out of highschool she was accepted into Broadway Dance Center’s Professional Semester and spent 7 months in New York City training with some of the best teachers in the industry, performing, and learning the ins and outs of the professional dance world. After her time in NYC, Bella was invited and had her Choreography chosen to perform at Europe's top art festival: Festival Fringe in Edinburgh, Scotland. Afterwards, she moved back to South Florida and spent one season dancing on the Florida Panthers Dance Team.
                            <br><br>
                            Bella is currently a Miami Dolphins Cheerleader, and takes pride in dancing at all home games for the NFL community and Dolphins Fans at Hard Rock Stadium! Having teaching dance since she was 16 years old and choreographing for many years, she is immensely excited to be apart the EDT family!
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>








        </div>
    </div>


@endsection
