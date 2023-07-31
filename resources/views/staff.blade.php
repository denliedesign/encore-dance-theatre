@extends('layouts.app')
@section('title', 'Encore Dance Theatre | Faculty')
@section('description', '')
@section('content')

    <div class="container">
        <h1 class="head-white py-4">Our Faculty</h1>
        <div class="d-flex justify-content-center pb-4">
            <video width="100%" height="auto" poster="/images/staff-interviews-poster-image.jpg" controls>
                <source src="/images/edt-staff-interviews.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>

    <h1 class="head-white py-4">Owner/Artistic Director</h1>
    <div class="bg-dark">
        <div class="container">
            <div class="row py-4 master-faculty-col" id="anne-brodsky">
                <div class="col-sm-5 d-flex justify-content-center justify-content-sm-end">
                    <div class="headshot-anne">
                        <img src="/images/anne.jpg" alt="">
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
    <div class="bg-dark pb-5">
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-2">

                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="/images/deana.jpg" alt="">
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
{{--                <div class="col-sm master-faculty-col">--}}
{{--                    <div class="row py-4">--}}
{{--                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">--}}
{{--                            <div class="headshot">--}}
{{--                                <img src="/images/rebekah.jpg" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-8">--}}
{{--                            <div class="accordion faculty-bio" id="accordionExample">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header faculty-card-header" id="headingOne">--}}
{{--                                        <h2 class="mb-0 d-flex justify-content-center">--}}
{{--                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseRebekah" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                                Rebekah Brodsky--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}

{{--                                    <div id="collapseRebekah" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                                        <div class="card-body faculty-bio-txt">--}}
{{--                                            Rebekah has been dancing at Encore Dance Theatre since the age of 2. She has been competing and performing for the past 12 years and has received multiple overall awards. In 2016-2017 she was an asssitant for the dance convention Intrigue and had the opportunity to choreograph, asssit and learn from some of the industries best instructors. Summer of 2018 she was accepted to the prestigious Alvin Ailey program in NYC. This year she was awarded for her choreography and is excited to share her love of dance with Encore’s students this season.--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <div class="col-sm master-faculty-col">--}}
{{--                    <div class="row py-4">--}}
{{--                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">--}}
{{--                            <div class="headshot">--}}
{{--                                <img src="/images/bailee-2.jpeg" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-8">--}}
{{--                            <div class="accordion faculty-bio" id="accordionExample">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header faculty-card-header" id="headingOne">--}}
{{--                                        <h2 class="mb-0 d-flex justify-content-center">--}}
{{--                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseBailee" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                                Bailee Cudmore--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}

{{--                                    <div id="collapseBailee" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                                        <div class="card-body faculty-bio-txt">--}}
{{--                                            Bailee began her ballet studies at the age of 3 under the instruction of Dana Williams of Ballet Elite Dance Studio in South Florida. She moved away to further her training at the School of Pennsylvania in 2015, and the Miami City Ballet School in 2016 under the direction of renown principle ballerina Arantxa Ochoa. She now both teaches and dances professionally in South Florida, and is a certified fitness trainer under AFAA in “Tendu Toning.” Modern, contemporary, jazz, and musical theater have been integral parts of Bailee’s background and training as well.--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm master-faculty-col">--}}
{{--                    <div class="row py-4">--}}
{{--                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">--}}
{{--                            <div class="headshot">--}}
{{--                                <img src="/images/german.jpg" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-8">--}}
{{--                            <div class="accordion faculty-bio" id="accordionExample">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header faculty-card-header" id="headingOne">--}}
{{--                                        <h2 class="mb-0 d-flex justify-content-center">--}}
{{--                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseGerman" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                                German Dager--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}

{{--                                    <div id="collapseGerman" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                                        <div class="card-body faculty-bio-txt">--}}
{{--                                            German’s studies in classical ballet, jazz and modern dance were completed at Les Grands Ballet Canadiense in Montreal, York University in Toronto, and University of North Carolina School of the Arts. German danced professionally with Boston Ballet, Ballet de Montreal, Ballet Florida and was a guest dancer with Compañia Colombiana de Ballet. Mr. Dager has been teaching and coaching dancers since 1986. He is a certified classical ballet teacher by examination.--}}

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
                                <img src="/images/christa.jpeg" alt="headshot">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button"
                                                    data-toggle="collapse" data-target="#collapseChrista"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                Christa Carpani
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseChrista" class="collapse" aria-labelledby="headingOne"
                                         data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
Bio coming soon
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
                                <img src="/images/melissa-delatorre.png" alt="melissa headshot">
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
                                            Melissa Delatorre started her dance journey at 5 years old right here at Encore Dance Theatre! Growing up, she won awards with her competitive team and performed at local and state events at places like Disney World and Universal Studios.  While at the University of Florida she fell in love with teaching and choreographing, and continues to develop her dance education through opportunities such as Dance Teacher Summit in NYC and Ballet Austin in Texas.  Being able to watch dancers grow and have fun is what she loves most. Melissa is proud to have been teaching in South Florida since 2011 and looks forward to sharing her passion with all of the students this season!
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
                                <img src="/images/nelly.jpg" alt="">
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

{{--                <div class="col-sm master-faculty-col">--}}
{{--                    <div class="row py-4">--}}
{{--                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">--}}
{{--                            <div class="headshot">--}}
{{--                                <img src="/images/alicia.jpg" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-8">--}}
{{--                            <div class="accordion faculty-bio" id="accordionExample">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header faculty-card-header" id="headingOne">--}}
{{--                                        <h2 class="mb-0 d-flex justify-content-center">--}}
{{--                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseAlicia" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                                Alicia Goytizolo--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}

{{--                                    <div id="collapseAlicia" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                                        <div class="card-body faculty-bio-txt">--}}
{{--                                            Alicia studied classical ballet under respected former ballerina Magda Auñon. In 2015, she was invited to study at the Ellison Ballet professional training program in New York. Shortly after graduating from the program, Alicia stayed in New York and went on to dance professionally. She now teaches ballet and contemporary to a variety of ages and levels across south florida, and is finishing her degrees in criminal justice and psychology.--}}
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
                                <img src="/images/luz.jpg" alt="">
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
                                            Luz Monica is a graduate in Performing Arts, with a specialty in Ballet, graduated with a Gold Degree from the Higher Institute of Art of Havana, postgraduate in Historical Dances and Dances of Character, of Elementary and Middle level in the Superior Institute of Art of Havana. With vast experience in teaching, teaching courses in Classical Technique, Character Dances, Point Techniques and Repertoire at various levels. With pedagogical, didactic, methodological and administrative tools to guarantee the integral development of schools and dance academies; special interest in teaching, vocational guidance and planning and organization of the artistic curriculum. Co-creator and administrator of the La Luz de la Danza Foundation. With skills for work under pressure, achievement orientation and high-performance capacity in tasks of responsibility and exigency. We are thrilled to have Luz Monica on faculty.
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
                                <img src="/images/deanna-2.jpeg" alt="">
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
                                            Deanna Greist grew up in South Florida and began her training at Jill Mallory Studio of Dance at the age of three. In high school, she trained at Donna Lee Studio of Dance and became an inaugural member of Expressions Dance Company where she was afforded the opportunity to work with nationally renowned choreographers, such as Rennie and Rhee Gold, Scott Fowler, and Debbie Dee. At the age of 18, Deanna became a member of The Young Americans where she benefitted from multiple national touring opportunities including working with and performing for the likes of Barbra Streisand, George Burns, and Shirley MacLaine to name a few.
                                            <br><br>
                                            Deanna has been a dance educator/choreographer in South Florida for more than 30 years and has spent three of those years on faculty at Encore Dance Theatre. She is a certified Acrobatics Arts Instructor, as well as a certified Acro Dance Teacher Association Adjudicator. Deanna is also a certified judge for the Miss America Organization and enjoys judging local competitions. She is excited to be back for another successful year at Encore Dance Theatre!
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
{{--                                <img src="/images/cindy.jpg" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-8">--}}
{{--                            <div class="accordion faculty-bio" id="accordionExample">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header faculty-card-header" id="headingOne">--}}
{{--                                        <h2 class="mb-0 d-flex justify-content-center">--}}
{{--                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseCindy" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                                Cindy Grossman--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}

{{--                                    <div id="collapseCindy" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                                        <div class="card-body faculty-bio-txt">--}}
{{--                                            Cindy Dale Grossman studied Classical Ballet and Modern Dance at the American Ballet Theatre and the Alvin Ailey American Dance Theater, in New York. Ms. Grossman performed with the American Ballet Theatre, the Ballet Nacional de Cuba, and the Stuttgart Ballet, at Lincoln Center and other venues in New York, Washington D.C., and Chicago. She was a soloist with the Richmond Ballet Company. Her passion is to train and inspire young dancers in Classical Ballet and Modern technique, and share her love of Dance.--}}

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
                                <img src="/images/staff-5.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseTerry" aria-expanded="true" aria-controls="collapseOne">
                                                Stacy Harding Terry
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseTerry" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
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
                                <img src="/images/noeah.jpg" alt="headshot" style="transform: scale(1.65);">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button"
                                                    data-toggle="collapse" data-target="#collapseNoeah"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                Noeah Jacobs
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseNoeah" class="collapse" aria-labelledby="headingOne"
                                         data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Bio coming soon
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
                                <img src="/images/staff-4.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingA">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseLanzi" aria-expanded="true" aria-controls="collapseA">
                                                Nicole Lanzi
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseLanzi" class="collapse" aria-labelledby="headingA" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Nicole Lanzi has been dancing since the age of four, with training in multiple genres of dance including ballet, character, tap, and jazz. At the age of 10 she began her focus on classical ballet, receiving training from prestigious teachers such as Magda Aunon and Vladimir Issaev. During her years of Vaganova training under Vladimir Issaev’s pre-professional division, Nicole excelled in Vaganova Ballet Examinations in levels Intermediate I, Intermediate II, Pre-Advanced, and Advanced. In 2018, she joined Fort Lauderdale Youth Ballet to continue her training under artistic director German Dager.
                                            <br><br>
                                            Over the years, Nicole has performed in a variety of ballets, including Coppélia, Don Quixote, Firebird, La Bayadère, Le Corsaire, and The Nutcracker, as well as having the privilege to perform in productions alongside Arts Ballet Theatre of Florida’s Professional Company. In 2015, she was invited and attended the international Danseakademi City Ballet Festival in Copenhagen, Denmark with Arts Ballet Theatre of Florida.
                                            <br><br>
                                            Nicole is currently attending Nova Southeastern University with a major in Exercise and Sports Science and the hopes of becoming a physical therapist specializing in sports and dance medicine. As a ballet teacher, Nicole aims to incorporate her learning of kinesiology and biomechanics into her classes so her students can enhance the use of their body to their greatest potential while preventing any sorts of injuries. She is excited to join the EDT family this year!
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
                                <img src="/images/staff-3.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingB">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseLuper" aria-expanded="true" aria-controls="collapseB">
                                                Ysabella Lupercio
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseLuper" class="collapse" aria-labelledby="headingB" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Ysabella Lupercio grew up in Jacksonville, Florida training in a multitude of dance styles since she was 3. She is currently a third year student at Nova Southeastern University, majoring in dance and business management with a minor in technical theatre. She is so excited to be joining the EDT family!

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
                                <img src="/images/staff-2.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseMadrigal" aria-expanded="true" aria-controls="collapseMadrigal">
                                                Natasha Madrigal
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseMadrigal" class="collapse" aria-labelledby="headingMadrigal" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Natasha grew up in Coral Springs, Florida. She started dancing at 4 years old and was a student at encore dance theater for 12 years. She was a part of the company team, training and competing in all dance styles. She has also had the opportunity to perform at the Miami Heat and Dolphins Halftime, Royal Caribbean Show, and Dance the Magic Disney Parade all with Encore. Natasha is currently a student at Nova Southeastern University, majoring in Entrepreneurship and minoring in dance. She has performed at NSU each semester in a variety of events. At 19 years old, she became a professional dancer for the NHL Florida Panthers. She continues to attend multiple dance workshops to better herself and proceed with her dance career in pro sports. Natasha is a proud alumni and is so excited to share her love for dance with her EDT family!

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
{{--                                <img src="/images/olivia-marquis.jpeg" alt="headshot" style="transform: scale(1.4)">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-8">--}}
{{--                            <div class="accordion faculty-bio" id="accordionExample">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header faculty-card-header" id="headingOne">--}}
{{--                                        <h2 class="mb-0 d-flex justify-content-center">--}}
{{--                                                    <button class="btn btn-link" style="height: 84px;" type="button"--}}
{{--                                                    data-toggle="collapse" data-target="#collapseOlivia"--}}
{{--                                                    aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                                Olivia Marquis--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}

{{--                                    <div id="collapseOlivia" class="collapse" aria-labelledby="headingOne"--}}
{{--                                         data-parent="#accordionExample">--}}
{{--                                        <div class="card-body faculty-bio-txt">--}}
{{--                                            Olivia has an extensive background in all styles of dance. She recently graduated from Florida Atlantic University with a degree in Communication Studies. Olivia was a student athlete throughout college and was a member of the fau dance team. Olivia competed at NDA and even placed 5th in the nation with her team. She is very excited to switch gears to teaching this year with Encore. She is excited to share her passion for dance with her students.--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--                <div class="col-sm master-faculty-col">--}}
{{--                    <div class="row py-4">--}}
{{--                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">--}}
{{--                            <div class="headshot">--}}
{{--                                <img src="/images/victoria.png" alt="headshot">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-8">--}}
{{--                            <div class="accordion faculty-bio" id="accordionExample">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header faculty-card-header" id="headingOne">--}}
{{--                                        <h2 class="mb-0 d-flex justify-content-center">--}}
{{--                                            <button class="btn btn-link" style="height: 84px;" type="button"--}}
{{--                                                    data-toggle="collapse" data-target="#collapseVictoria"--}}
{{--                                                    aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                                Victoria Mondelli--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}

{{--                                    <div id="collapseVictoria" class="collapse" aria-labelledby="headingOne"--}}
{{--                                         data-parent="#accordionExample">--}}
{{--                                        <div class="card-body faculty-bio-txt">--}}
{{--                                            Tori has danced since she was three years old, training at Dance Theatre of Parkland. She was in her studio's company, where she was able to perform at Miami Heat and Miami Dolphins Halftime shows.She was on the Marjory Stoneman Douglas competitive color guard team in High School where they placed 5th overall in the world. She has over 15 years of dance training in styles such as ballet, hip hop, jazz, lyrical, contemporary, etc. Tori is beyond grateful to be a part of Encore Dance Theater this season, being able to teach and share her passion for dance with such hardworking and talented students is so rewarding!--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--                <div class="col-sm master-faculty-col">--}}
{{--                    <div class="row py-4">--}}
{{--                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">--}}
{{--                            <div class="headshot">--}}
{{--                                <img src="/images/kayla.jpg" alt="">--}}
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
                                <img src="/images/tori.jpg" alt="">
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

{{--                <div class="col-sm master-faculty-col">--}}
{{--                    <div class="row py-4">--}}
{{--                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">--}}
{{--                            <div class="headshot">--}}
{{--                                <img src="/images/priya.jpg" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-8">--}}
{{--                            <div class="accordion faculty-bio" id="accordionExample">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header faculty-card-header" id="headingOne">--}}
{{--                                        <h2 class="mb-0 d-flex justify-content-center">--}}
{{--                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapsePriya" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                                Priya Nair--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}

{{--                                    <div id="collapsePriya" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                                        <div class="card-body faculty-bio-txt">--}}
{{--                                            Priya Nair has been a part of the Encore family for 16 years. She has been training here since she was three years old and has attended various dance conventions and competitions throughout her dance career. Priya has danced at the Miami heat pre-show as well as in a Dance the Magic Disney Parade. She participated in the Imagination choreography competition and was awarded 1st runner up. She loves being able to share her love for dance with all her students.--}}

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
                                <img src="/images/darlyn-perez.jpg" alt="">
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
                                <img src="/images/marlee.jpg" alt="">
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

{{--                <div class="col-sm master-faculty-col">--}}
{{--                    <div class="row py-4">--}}
{{--                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">--}}
{{--                            <div class="headshot">--}}
{{--                                <img src="/images/molly.jpg" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-8">--}}
{{--                            <div class="accordion faculty-bio" id="accordionExample">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header faculty-card-header" id="headingOne">--}}
{{--                                        <h2 class="mb-0 d-flex justify-content-center">--}}
{{--                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseMolly" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                                Molly Roller--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}

{{--                                    <div id="collapseMolly" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                                        <div class="card-body faculty-bio-txt">--}}
{{--                                            Molly Roller has been dancing for over 30 years, training in Southern California under Louis McKay, Anatoly Sisman, Tonnie Sammartano, Judith Sharp, and Xavier Hicks to name a few. She was invited to perform in multiple bowl games, featured in American Cheerleader magazine, and recognized with numerous awards at the national level. As an instructor and choreographer for over 15 years, Molly has worked with numerous studios as well as high school, collegiate, and professional teams from coast to coast. She is a member of the National Dance Education Organization and currently moonlights as an instructor and audition judge for the Miami Dolphins Cheerleaders.--}}

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
                                <img src="/images/rosario.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseRosario" aria-expanded="true" aria-controls="collapseOne">
                                                Rosario Suarez
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseRosario" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Regarded in Cuba as the greatest and most popular ballerina of her generation, Rosario Suarez was universally known for the profound artistry, versatility, and innovation with which she performed ballet repertoire. Among her many achievements, Rosario won the gold medal at the International Ballet Competition in Varna, Bulgaria in 1970. Over a remarkable twenty- seven year career with the National Ballet of Cuba, she performed principal roles in over 50 countries, to worldwide critical acclaim. In 1991, the Cuban Ministry of Culture recognized and celebrated her artistic achievements.
                                            <br><br>
                                            Born in Havana, Rosario began her ballet training at the Province Ballet School, then continuing her studies at the National School of the Arts, with teachers Joaquin Banegas, Fernando Alonso and Alicia Alonso. When Rosario was only fifteen years old, Fernando Alonso, the director of the National Ballet of Cuba, invited Rosario to join the Company, thus launching her nearly three-decade professional career, which included a fifteen-year tenure as Principal dancer. Rosario was also a principal dancer of Ballet Theater of Havana, under the direction of Caridad Martinez.
                                            <br><br>
                                            Rosario’s performances in Coppelia, Swan Lake and Giselle have brought her the highest acclaim. However, her roles in works by Cuban choreographers, such as Tarde en la Siesta and Rara Avis, were performances that have also been said to have set the standard for future generations of dancers.
                                            <br><br>
                                            Rosario’s interpretation of The Sylphide and The Scotsman at the International Cervantine Festival in Guanajuato and Giselle, at a historic performance at the Teatro Albeniz in Madrid, brought roaring audiences to their feet. At that time, Rosario established herself as an artist in Spain, participating in a number of festivals and teaching throughout the city. In 2000, at the debut of Anna Pavlova: Diálogos del Alma, within the setting of the Dance Festival of Madrid, she performed the famous Death of the Swan by Fokine. While in Spain, she worked at the Conservatory Real in Madrid alongside Virgina Valero, as well as with Victor Ullate, Goyo Montero, Juan Carlos Santa Maria, Raul Cardenes and Ramon Oller, and many others.
                                            <br><br>
                                            Rosario’s career brought her to Miami, where she was on faculty at New World School of the Arts, under the direction of Daniel Lewis. She then established her own company, Ballet Rosario Suarez, and an affiliated dance academy dedicated to the preservation of the Cuban Style of Ballet. In 2002, she created her first choreographic work, Cecilia Valdes with great success. Her final performance took place in Miami in 2010, as the star of the ballet theater production “La Ultima Funcion,” based on a poem by Abilio Estevez and directed by Lilian Vega. In 2012, Rosario was named one of the top 100 Latinos in Miami with the greatest cultural impact.
                                            <br><br>
                                            Rosario's career also took the form of film appearances, as she was featured in a documentary directed by Marisol Trujillo, Mujer Ante el Espejo, inspired by the experience of maternity of ballerinas; a short for the School of Cinematography, Two Gladys For You, directed by Aaron Yelin; a documentary about Pablo Neruda, and Stolen Verses, by Orlando Rojas. She appeared extensively, via modern interviews and archival performance footage, in a documentary of her own life, directed by Orlando Rojas, Queen of Thursdays, which won the award of Best Documentary at the Miami Film Festival.
                                            <br><br>
                                            Rosario is recognized as a versatile interpreter who builds her characters around expressive musicality. Her constant search for freedom throughout the course of her career has inspired her work, and she is an artist and performer who has reached critical acclaim, winning over the hearts of audiences all over the world. In 2008, Rosario joined the Miami Conservatory/Thomas Armour Youth Ballet, where she trained future generations in her role as Ballet Mistress. She continues to travel and tour as a teacher and coach for students internationally. Behind Rosario’s fame, experience, and technique is an unbridled passion to affect change in her students and help them unearth their full artistic potential. She is excited to work with the students at Encore and be a part of the faculty this season!
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
                                <img src="/images/heydi.jpeg" alt="">
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


                <div class="col-sm master-faculty-col">
                    <div class="row py-4">
                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">
                            <div class="headshot">
                                <img src="/images/sabrina.jpeg" alt="headshot">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button"
                                                    data-toggle="collapse" data-target="#collapseSabrina"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                Sabrina Wakat
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseSabrina" class="collapse" aria-labelledby="headingOne"
                                         data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Sabrina has been a student at Encore Dance Theatre since the age of 8 years old. Since then she has taken every genre of dance Encore has to offer. Sabrina’s love of dance was apparent and she was quickly invited onto our competition team. She is a current member of our elite competition team and has won many accolades. Sabrina has trained under many master teachers. She has been through our teacher training program, teaching alongside Ms. Marlee Ramirez for the past 4 years and is now a teacher for Encore. She is loving, caring, smart and kind. Sabrina loves teaching and working with children of all ages but especially loves the little ones. In her free time she is also an ice skating instructor. We are so proud of Sabrina and the work she has put into becoming an amazing instructor. She is so excited to teach and bring her love of dance to her EDT students.
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
                                <img src="/images/staff-1.jpeg" alt="">
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="accordion faculty-bio" id="accordionExample">
                                <div class="card">
                                    <div class="card-header faculty-card-header" id="headingOne">
                                        <h2 class="mb-0 d-flex justify-content-center">
                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseWalsh" aria-expanded="true" aria-controls="collapseOne">
                                                Hailey Walsh
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseWalsh" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                                        <div class="card-body faculty-bio-txt">
                                            Bio coming soon!
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

{{--    <h1 class="head-white py-4">Guest Artists</h1>--}}
{{--    <div class="bg-dark">--}}
{{--        <div class="container">--}}
{{--            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-colslg-2">--}}
{{--                <div class="col-sm master-faculty-col">--}}
{{--                    <div class="row py-4">--}}
{{--                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">--}}
{{--                            <div class="headshot">--}}
{{--                                <img src="/images/kevin.jpg" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-8">--}}
{{--                            <div class="accordion faculty-bio" id="accordionExample">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header faculty-card-header" id="headingOne">--}}
{{--                                        <h2 class="mb-0 d-flex justify-content-center">--}}
{{--                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseKevin" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                                Kevin Aubin--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}

{{--                                    <div id="collapseKevin" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                                        <div class="card-body faculty-bio-txt">--}}
{{--                                            Kevin Aubin is an Alumni of Encore Dance Theatre. At age 15, he moved to NYC to attend the School of American Ballet. Kevin has performed throughout Europe, Japan and the United States. He has danced on Broadway with the companies of Wicked, Hot Feet, Spiderman: Turn Off the Dark , European tour of West Side Story; as well as originating the role of Paulo in the award winning New York Festival Production of Common Grounds Off-Broadway. You can see Kevin in the Golden Globe nominated film Across the Universe and in Old Dogs. Kevin as had the opportunity to perform on the Today Show, Dancing with the Stars, as a lead in a National Truth anti-smoking commercial, Comedy Central, and as a model for DKNY, Teen Magazine, and has graced the covers of New York Magazine and Time Out NY. Kevin is the owner/artistic director of Intrigue Dance Intensive.--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-sm master-faculty-col">--}}
{{--                    <div class="row py-4">--}}
{{--                        <div class="col-sm-4 d-flex justify-content-sm-end justify-content-center">--}}
{{--                            <div class="headshot">--}}
{{--                                <img src="/images/shawna.jpg" alt="">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-sm-8">--}}
{{--                            <div class="accordion faculty-bio" id="accordionExample">--}}
{{--                                <div class="card">--}}
{{--                                    <div class="card-header faculty-card-header" id="headingOne">--}}
{{--                                        <h2 class="mb-0 d-flex justify-content-center">--}}
{{--                                            <button class="btn btn-link" style="height: 84px;" type="button" data-toggle="collapse" data-target="#collapseShawna" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                                                Shawna Hall-Bowden--}}
{{--                                            </button>--}}
{{--                                        </h2>--}}
{{--                                    </div>--}}

{{--                                    <div id="collapseShawna" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--                                        <div class="card-body faculty-bio-txt">--}}
{{--                                            Shawna’s experience spans over 25 years. Miss Shawna has successfully studied in New York at Dance Theater of Harlem, Alvin Ailey American Dance Theater and Martha Graham Dance School just to name a few. Miss Shawna studied various styles of modern dance such as Horton technique, Graham, Limon, and Dunham technique. Miss Shawna has chose to teach Horton technique in South Florida, and was taught by Marie Forsythe educator of Horton technique.--}}

{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

@endsection
