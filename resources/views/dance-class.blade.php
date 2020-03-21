@extends('layouts.app')
@section('title', 'Encore Dance Theatre | Dance Classes')
@section('description', '')
@section('content')

    <h1 class="head py-4">Classes</h1>
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 m-5">
        <div class="col mb-4">
            <div class="accordion" id="classesAccordion">
                <div class="card">
                    <img src="images/ballet.jpg" alt="">
                    <div class="card-header" id="classesDown">
                        <h5 class="mb-0 text-center">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseBallet" aria-expanded="true" aria-controls="collapseOne">
                                Ballet
                            </button>
                        </h5>
                    </div>

                    <div id="collapseBallet" class="collapse" aria-labelledby="classesDown" data-parent="#classesAccordion">
                        <div class="card-body">
                            Ballet is a type of performance dance that originated in the Italian Renaissance courts of the 15th century. It’s a classical dance form demanding grace and precision and employing formalized steps and gestures set in intricate, flowing patterns to create expression through movement. Ballet is the foundation for all forms of dance. It is where students learn technique, usage of the feet, and how to develop strength, balance, and quality of movement.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="accordion" id="classesAccordion">
                <div class="card">
                    <img src="images/tap.jpg" alt="">
                    <div class="card-header" id="classesDown">
                        <h5 class="mb-0 text-center">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTap" aria-expanded="true" aria-controls="collapseOne">
                                Tap
                            </button>
                        </h5>
                    </div>

                    <div id="collapseTap" class="collapse" aria-labelledby="classesDown" data-parent="#classesAccordion">
                        <div class="card-body">
                            Tap dance is a form of dance characterized by using the sound of one’s tap shoes hitting the floor as a percussive instrument. As such, it is also commonly considered to be a form of music.

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="accordion" id="classesAccordion">
                <div class="card">
                    <img src="images/twinkle.jpg" alt="">
                    <div class="card-header" id="classesDown">
                        <h5 class="mb-0 text-center">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseTwinkle" aria-expanded="true" aria-controls="collapseOne">
                                <span id="twinkle-small-txt">Twinkle Star/Combo Classes</span>
                            </button>
                        </h5>
                    </div>

                    <div id="collapseTwinkle" class="collapse" aria-labelledby="classesDown" data-parent="#classesAccordion">
                        <div class="card-body">
                            Twinkle Star Dance is an age specific class containing ballet, tap,Hop-Hop and/or jazz/creative movement. The purpose of the class is to introduce young dancers to the different styles of dance and inspire movement and creativity within a positive environment. Dancers also learn basic steps and terminology in all styles. For example, all dancers will learn what a “plie” is and how to demonstrate one. The use of fun, age appropriate music engages the young dancers’ minds and bodies. The use of props such as maracas for the “freeze dance” makes the end of class the most fun!
                            <br><br>
                            ***Placement Notes: For the Twinkle Star DanceTM 3-4 class, students must be at least 3 years old on the first day of the dance season. For Twinkle Star DanceTM 4-5 students must be at least 4 years old on the first day of the dance season.
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="accordion" id="classesAccordion">
                <div class="card">
                    <img src="images/contemporary.jpg" alt="">
                    <div class="card-header" id="classesDown">
                        <h5 class="mb-0 text-center">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseContemporary" aria-expanded="true" aria-controls="collapseOne">
                                Contemporary
                            </button>
                        </h5>
                    </div>

                    <div id="collapseContemporary" class="collapse" aria-labelledby="classesDown" data-parent="#classesAccordion">
                        <div class="card-body">
                            Contemporary dance is based on modern technique but the movements are smaller, faster, and angular in appearance and are executed with many movements to fewer counts of music. The use of space is sparse. The movement is more internal, showing the dancers’ strength, control, and quickness of movements. There is intent to interpret the music or words that accompany the dancer.

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="accordion" id="classesAccordion">
                <div class="card">
                    <img src="images/jazz.jpg" alt="">
                    <div class="card-header" id="classesDown">
                        <h5 class="mb-0 text-center">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseJazz" aria-expanded="true" aria-controls="collapseOne">
                                Jazz
                            </button>
                        </h5>
                    </div>

                    <div id="collapseJazz" class="collapse" aria-labelledby="classesDown" data-parent="#classesAccordion">
                        <div class="card-body">
                            Jazz dancing is a form of dance that showcases a dancer’s individual style and originality. Every jazz dancer interprets and executes moves and steps in their own way. This type of dancing is energetic and fun, consisting of unique moves, intricate footwork, big leaps and quick turns. To excel in jazz, dancers need a strong background in ballet as it helps with grace and balance.

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="accordion" id="classesAccordion">
                <div class="card">
                    <img src="images/HipHop.jpg" alt="">
                    <div class="card-header" id="classesDown">
                        <h5 class="mb-0 text-center">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseHipHop" aria-expanded="true" aria-controls="collapseOne">
                                Hip-Hop
                            </button>
                        </h5>
                    </div>

                    <div id="collapseHipHop" class="collapse" aria-labelledby="classesDown" data-parent="#classesAccordion">
                        <div class="card-body">
                            Hip-hop dance refers to street dance styles primarily performed to hip-hop music or that have evolved as part of hip-hop culture. It includes a wide range of styles primarily breaking, locking, and popping which were created in the 1970s and made popular by dance crews in the United States.

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="accordion" id="classesAccordion">
                <div class="card">
                    <img src="images/acro.jpg" alt="">
                    <div class="card-header" id="classesDown">
                        <h5 class="mb-0 text-center">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseAcro" aria-expanded="true" aria-controls="collapseOne">
                                Acro
                            </button>
                        </h5>
                    </div>

                    <div id="collapseAcro" class="collapse" aria-labelledby="classesDown" data-parent="#classesAccordion">
                        <div class="card-body">
                            Classes consist of floor and Tumble skill development.

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="accordion" id="classesAccordion">
                <div class="card">
                    <img src="images/MusicalTheatre.jpg" alt="">
                    <div class="card-header" id="classesDown">
                        <h5 class="mb-0 text-center">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseMusical" aria-expanded="true" aria-controls="collapseOne">
                                Musical Theatre
                            </button>
                        </h5>
                    </div>

                    <div id="collapseMusical" class="collapse" aria-labelledby="classesDown" data-parent="#classesAccordion">
                        <div class="card-body">
                            A form of theatre that combines songs, spoken dialogue, acting, and dance.

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="accordion" id="classesAccordion">
                <div class="card">
                    <img src="images/lyrical.jpg" alt="">
                    <div class="card-header" id="classesDown">
                        <h5 class="mb-0 text-center">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseLyrical" aria-expanded="true" aria-controls="collapseOne">
                                Lyrical
                            </button>
                        </h5>
                    </div>

                    <div id="collapseLyrical" class="collapse" aria-labelledby="classesDown" data-parent="#classesAccordion">
                        <div class="card-body">
                            Lyrical dance is a dance style that combines elements of ballet, modern, and Jazz dance techniques. It is commonly set to popular music.

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="accordion" id="classesAccordion">
                <div class="card">
                    <img src="images/pointe.jpg" alt="">
                    <div class="card-header" id="classesDown">
                        <h5 class="mb-0 text-center">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapsePointe" aria-expanded="true" aria-controls="collapseOne">
                                Pointe
                            </button>
                        </h5>
                    </div>

                    <div id="collapsePointe" class="collapse" aria-labelledby="classesDown" data-parent="#classesAccordion">
                        <div class="card-body">
                            Pointe technique is the part of classical ballet technique that concerns pointe work, in which a ballet dancer supports all body weight on the tips of fully extended feet. For Advanced Students: Must be around eleven years of age and have had at least 3-4 years of ballet.

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="accordion" id="classesAccordion">
                <div class="card">
                    <img src="images/modern.jpg" alt="">
                    <div class="card-header" id="classesDown">
                        <h5 class="mb-0 text-center">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseModern" aria-expanded="true" aria-controls="collapseOne">
                                Modern
                            </button>
                        </h5>
                    </div>

                    <div id="collapseModern" class="collapse" aria-labelledby="classesDown" data-parent="#classesAccordion">
                        <div class="card-body">
                            Modern dance is a dance style that centers on a dancer’s own interpretations instead of structured steps, as in traditional ballet dancing. Modern dancers reject the limitations of classical ballet and favor movements derived from the expression of their inner feelings.

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col mb-4">
            <div class="accordion" id="classesAccordion">
                <div class="card">
                    <img src="images/flamenco.jpg" alt="">
                    <div class="card-header" id="classesDown">
                        <h5 class="mb-0 text-center">
                            <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseFlamenco" aria-expanded="true" aria-controls="collapseOne">
                                Flamenco
                            </button>
                        </h5>
                    </div>

                    <div id="collapseFlamenco" class="collapse" aria-labelledby="classesDown" data-parent="#classesAccordion">
                        <div class="card-body">
                            Flamenco dance is a highly-expressive, Spanish dance form. The flamenco is a dance characterized by hand clapping, percussive footwork, and intricate hand, arm and body movements.

                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
