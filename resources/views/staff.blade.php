@extends('layouts.app')
@section('title', 'Encore Dance Theatre | Faculty')
@section('description', '')
@section('content')

    <h1 class="head-white py-4">Owner/Artistic Director</h1>
    <div class="bg-dark">
        <div class="container">
            <div class="row py-4 master-faculty-col" id="anne-brodsky">
                <div class="col-sm-5 d-flex justify-content-center justify-content-sm-end">
                    <div class="headshot-anne">
                        <img src="images/anne.jpg" alt="">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="accordion faculty-bio" id="accordionExample">
                        <div class="card">
                            <div class="card-header faculty-card-header" id="headingOne">
                                <h2 class="mb-0 d-flex justify-content-center">
                                    <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseAnne" aria-expanded="true" aria-controls="collapseOne">
                                        Anne Brodsky
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseAnne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body faculty-bio-txt">
                                    Anne has been sharing her passion for dance and mentorship with students for over 30 years. She is a proud member of More Than Just Great DancingTM and Dance Educators of America. She began teaching for Encore Dance Theatre in 1992 and has owned it since 2012. Anne beams with pride over the many accomplishments of her students and her studio.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-1"></div>
            </div>
        </div>
    </div>
    <h1 class="head-white py-4">Our Faculty</h1>
    <div class="bg-dark">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">

                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="images/deana.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseDeana" aria-expanded="true" aria-controls="collapseOne">
                                                Deana Brickley
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseDeana" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Deana is from Orlando, Florida. She had the honor of being a New York City Radio City Music Hall Rockette for several seasons. Among her other accomplishments are: the TV show Glee, Smash, Bad Romance music video with Lady Gaga, PSA with Beyonce, performed with Jennifer Lopez at the American Music Video Awards, America’s Got Talent, and can be seen dancing with Lady Gaga in the MTV Video Awards. She has worked with prestigious artists and choreographers including assisting the Emmy award winning SYTYCD choreographer, Tessandra Chavez. She has also performed in the Equity production of Beauty and the Beast at Disney World as well as a high-kick dancer in Universal Studios.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="images/rebekah.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseRebekah" aria-expanded="true" aria-controls="collapseOne">
                                                Rebekah Brodsky
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseRebekah" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Rebekah has been dancing at Encore Dance Theatre since the age of 2. She has been competing and performing for the past 12 years and has received multiple overall awards. In 2016-2017 she was an asssitant for the dance convention Intrigue and had the opportunity to choreograph, asssit and learn from some of the industries best instructors. Summer of 2018 she was accepted to the prestigious Alvin Ailey program in NYC. This year she was awarded for her choreography and is excited to share her love of dance with Encore’s students this season.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="images/bailee-2.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseBailee" aria-expanded="true" aria-controls="collapseOne">
                                                Bailee Cudmore
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseBailee" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Bailee began her ballet studies at the age of 3 under the instruction of Dana Williams of Ballet Elite Dance Studio in South Florida. She moved away to further her training at the School of Pennsylvania in 2015, and the Miami City Ballet School in 2016 under the direction of renown principle ballerina Arantxa Ochoa. She now both teaches and dances professionally in South Florida, and is a certified fitness trainer under AFAA in “Tendu Toning.” Modern, contemporary, jazz, and musical theater have been integral parts of Bailee’s background and training as well.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="images/german.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseGerman" aria-expanded="true" aria-controls="collapseOne">
                                                German Dager
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseGerman" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            German’s studies in classical ballet, jazz and modern dance were completed at Les Grands Ballet Canadiense in Montreal, York University in Toronto, and University of North Carolina School of the Arts. German danced professionally with Boston Ballet, Ballet de Montreal, Ballet Florida and was a guest dancer with Compañia Colombiana de Ballet. Mr. Dager has been teaching and coaching dancers since 1986. He is a certified classical ballet teacher by examination.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="images/coming-soon.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button"
                                                    data-toggle="collapse" data-target="#collapseDelatorre"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                Melissa Delatorre
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseDelatorre" class="collapse" aria-labelledby="headingOne"
                                         data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Bio coming soon!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="images/nelly.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseNelly" aria-expanded="true" aria-controls="collapseOne">
                                                Nelly Gibilterra
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseNelly" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Bio coming soon!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="images/coming-soon.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseAlicia" aria-expanded="true" aria-controls="collapseOne">
                                                Alicia Goytizolo
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseAlicia" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Bio coming soon!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="images/luz.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseLuz" aria-expanded="true" aria-controls="collapseOne">
                                                Luz Monica Guerrero
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseLuz" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Bio coming soon.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="images/deanna-2.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseDeanna" aria-expanded="true" aria-controls="collapseOne">
                                                Deanna Greist
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseDeanna" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Bio coming soon!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="images/cindy.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseCindy" aria-expanded="true" aria-controls="collapseOne">
                                                Cindy Grossman
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseCindy" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Cindy Dale Grossman studied Classical Ballet and Modern Dance at the American Ballet Theatre and the Alvin Ailey American Dance Theater, in New York. Ms. Grossman performed with the American Ballet Theatre, the Ballet Nacional de Cuba, and the Stuttgart Ballet, at Lincoln Center and other venues in New York, Washington D.C., and Chicago. She was a soloist with the Richmond Ballet Company. Her passion is to train and inspire young dancers in Classical Ballet and Modern technique, and share her love of Dance.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


{{--                <div class="col-sm master-faculty-col">--}}
{{--                    <div class="row py-4">--}}
{{--                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">--}}
{{--                            <div class="headshot">--}}
{{--                                <img src="images/kayla.jpg" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-8">--}}
{{--                            <div class="accordion faculty-bio" id="accordionExample">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header faculty-card-header" id="headingOne">--}}
{{--                                        <h2 class="mb-0 d-flex justify-content-center">--}}
{{--                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseKayla" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                                Kayla Letendre--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}

{{--                                    <div id="collapseKayla" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                                        <div class="card-body faculty-bio-txt">--}}
{{--                                            Kayla started dancing at 2 years old at Encore training in ballet, tap, modern, jazz, musical theatre, and hip hop and danced on the competition team until she graduated. From 2009-2015 Kayla was a professional cheerleader for the Florida Panthers becoming captain her final year with the team. She eventually made her way back to teach at Encore, her second home! She is also currently the Marketing & Membership Coordinator at Parkland Golf & Country Club as well as a nanny. Kayla loves working with children and sharing her passion for dance with them!--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="images/tori.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseTori" aria-expanded="true" aria-controls="collapseOne">
                                                Tori Muller
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseTori" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Tori began dancing at Encore when she was three years old. She was on the competition team where she trained in ballet, tap, jazz, acro and lyrical. Tori recently graduated with her bachelors degree in business management. We are delighted that Tori has come back home to EDT!

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="images/priya.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapsePriya" aria-expanded="true" aria-controls="collapseOne">
                                                Priya Nair
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapsePriya" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Priya Nair has been a part of the Encore family for 16 years. She has been training here since she was three years old and has attended various dance conventions and competitions throughout her dance career. Priya has danced at the Miami heat pre-show as well as in a Dance the Magic Disney Parade. She participated in the Imagination choreography competition and was awarded 1st runner up. She loves being able to share her love for dance with all her students.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="images/darlyn-perez.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseDarlyn" aria-expanded="true" aria-controls="collapseOne">
                                                Darlyn Perez
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseDarlyn" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Bio coming soon!
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="images/marlee.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseMarlee" aria-expanded="true" aria-controls="collapseOne">
                                                Marlee Ramirez-Santana
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseMarlee" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Marlee has been a veteran of Encore Dance Theatre for 27 years. She has a Bachelors Degree in Exceptional Student Education with a Masters Degree in Educational Leadership. Marlee has a special talent to work with all levels. In her dance career she has performed with Ballet Met, The Power Rangers, and the Orange Bowl parade to name a few.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="images/molly.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseMolly" aria-expanded="true" aria-controls="collapseOne">
                                                Molly Roller
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseMolly" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Molly Roller has been dancing for over 30 years, training in Southern California under Louis McKay, Anatoly Sisman, Tonnie Sammartano, Judith Sharp, and Xavier Hicks to name a few. She was invited to perform in multiple bowl games, featured in American Cheerleader magazine, and recognized with numerous awards at the national level. As an instructor and choreographer for over 15 years, Molly has worked with numerous studios as well as high school, collegiate, and professional teams from coast to coast. She is a member of the National Dance Education Organization and currently moonlights as an instructor and audition judge for the Miami Dolphins Cheerleaders.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 class="head-white py-4">Guest Artists</h1>
    <div class="bg-dark">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-colslg-2">
                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="images/kevin.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseKevin" aria-expanded="true" aria-controls="collapseOne">
                                                Kevin Aubin
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseKevin" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Kevin Aubin is an Alumni of Encore Dance Theatre. At age 15, he moved to NYC to attend the School of American Ballet. Kevin has performed throughout Europe, Japan and the United States. He has danced on Broadway with the companies of Wicked, Hot Feet, Spiderman: Turn Off the Dark , European tour of West Side Story; as well as originating the role of Paulo in the award winning New York Festival Production of Common Grounds Off-Broadway. You can see Kevin in the Golden Globe nominated film Across the Universe and in Old Dogs. Kevin as had the opportunity to perform on the Today Show, Dancing with the Stars, as a lead in a National Truth anti-smoking commercial, Comedy Central, and as a model for DKNY, Teen Magazine, and has graced the covers of New York Magazine and Time Out NY. Kevin is the owner/artistic director of Intrigue Dance Intensive.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="images/shawna.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseShawna" aria-expanded="true" aria-controls="collapseOne">
                                                Shawna Hall-Bowden
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseShawna" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Shawna’s experience spans over 25 years. Miss Shawna has successfully studied in New York at Dance Theater of Harlem, Alvin Ailey American Dance Theater and Martha Graham Dance School just to name a few. Miss Shawna studied various styles of modern dance such as Horton technique, Graham, Limon, and Dunham technique. Miss Shawna has chose to teach Horton technique in South Florida, and was taught by Marie Forsythe educator of Horton technique.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="images/heydi.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseHeydi" aria-expanded="true" aria-controls="collapseOne">
                                                Heydi Pinero
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseHeydi" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Heydi graduated with honors from the National School of Ballet in Havana, Cuba and became a “Character and Ballet Instructor” at The Havana’s National School of the Arts. Heydi danced for the National Spanish Ballet of Havana where they combined classical ballet with Flamenco Dance. She has danced in productions such as La Fille Mal Gardee, Bayadera, Coppelia, The Nutcraker , Divertimento(modern), AIDA (Full Production) with the Florida Grand Opera in Miami, Florida, and performed The Witches of Salem with the “Ballet Flamenco La Rosa. Performed for three years at the “Raue Center for the Arts” as a guest artist with “The Berkshire Ballet Theatre” in Chicago.

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
