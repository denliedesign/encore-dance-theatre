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
            <div class="col-md-6 col-lg-4 my-3">
                <div id="usedtoberow">
                    <div id="usedtobecolsm">
                        <img src="/images/anne-bg.png" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div id="usedtobecolsm">
                        <h5 class="fw-bold mb-0 pb-0">Anne Brodsky</h5>
                        <h5 class="text-muted fw-bold">Owner/Artistic Director</h5>
                        <div style="position: relative;">
                            <p class="mb-0 mt-2 font-sm">
                                {{ str('Anne has been sharing her passion for dance and mentorship with students for over 30 years. She is a proud member of More Than Just Great DancingTM and Dance Educators of America. She began teaching for Encore Dance Theatre in 1992 and has owned it since 2012. Anne beams with pride over the many accomplishments of her students and her studio.
    ')->words(50, '...') }}
                            </p>
                            <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
                        </div>
                        <div type="button" data-toggle="modal" data-target="#AnneModal">
                            <div class="d-flex justify-content-start" id="read-more-wrap">
                                <div style="color: #0292BC;" id="read-more-text">Read More</div>
                                <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                            </div>
                        </div>
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
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 my-3">
                <div id="usedtoberow">
                    <div id="usedtobecolsm">
                        <img src="/images/deana-crop.jpg" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div id="usedtobecolsm">
                        <h5 class="fw-bold mb-0 pb-0">Deana Brickley</h5>
                        <div style="position: relative;">
                            <p class="mb-0 mt-2 font-sm">

                            {{ str('
Deana is from Orlando, Florida. She had the honor of being a New York City Radio City Music Hall Rockette for several seasons. Among her other accomplishments are: the TV show Glee, Smash, Bad Romance music video with Lady Gaga, PSA with Beyonce, performed with Jennifer Lopez at the American Music Video Awards, America’s Got Talent, and can be seen dancing with Lady Gaga in the MTV Video Awards. She has worked with prestigious artists and choreographers including assisting the Emmy award winning SYTYCD choreographer, Tessandra Chavez. She has also performed in the Equity production of Beauty and the Beast at Disney World as well as a high-kick dancer in Universal Studios.
')->words(50, '...') }}
                        </p>
                            <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
                        </div>
                            <div type="button" data-toggle="modal" data-target="#DeanaModal">
                            <div class="d-flex justify-content-start" id="read-more-wrap">
                                <div style="color: #0292BC;" id="read-more-text">Read More</div>
                                <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                            </div>
                        </div>
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
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 my-3">
                <div id="usedtoberow">
                    <div id="usedtobecolsm">
                        <img src="/images/karen.png" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div id="usedtobecolsm">
                        <h5 class="fw-bold mb-0 pb-0">Karen Cowart</h5>
                        <div style="position: relative;">
                            <p class="mb-0 mt-2 font-sm">

                            {{ str('Bio coming soon!')->words(50, '...') }}
                        </p>
                            <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
                        </div>
                            <div type="button" data-toggle="modal" data-target="#KarenModal">
                            <div class="d-flex justify-content-start" id="read-more-wrap">
                                <div style="color: #0292BC;" id="read-more-text">Read More</div>
                                <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="KarenModal" tabindex="-1" aria-labelledby="KarenModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="KarenModalLabel">Karen Cowart</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Bio coming soon!
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 my-3">
                <div id="usedtoberow">
                    <div id="usedtobecolsm">
                        <img src="/images/bella-crop.jpeg" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div id="usedtobecolsm">
                        <h5 class="fw-bold mb-0 pb-0">Bella Denton</h5>
                        <div style="position: relative;">
                            <p class="mb-0 mt-2 font-sm">

                            {{ str('
Bella Denton grew up in South Florida, and began dancing at the age of 3 training in ballet/pointe, tap, jazz, musical theatre, jazz funk and contemporary/lyrical. Right out of highschool she was accepted into Broadway Dance Center’s Professional Semester and spent 7 months in New York City training with some of the best teachers in the industry, performing, and learning the ins and outs of the professional dance world. After her time in NYC, Bella was invited and had her Choreography chosen to perform at Europe\'s top art festival: Festival Fringe in Edinburgh, Scotland. Afterwards, she moved back to South Florida and spent one season dancing on the Florida Panthers Dance Team.

Bella is currently a Miami Dolphins Cheerleader, and takes pride in dancing at all home games for the NFL community and Dolphins Fans at Hard Rock Stadium! Having teaching dance since she was 16 years old and choreographing for many years, she is immensely excited to be apart the EDT family!')->words(50, '...') }}
                        </p>
                            <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
                        </div>
                            <div type="button" data-toggle="modal" data-target="#BellaModal">
                            <div class="d-flex justify-content-start" id="read-more-wrap">
                                <div style="color: #0292BC;" id="read-more-text">Read More</div>
                                <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                            </div>
                        </div>
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
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 my-3">
                <div id="usedtoberow">
                    <div id="usedtobecolsm">
                        <img src="/images/nelly-crop.jpeg" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div id="usedtobecolsm">
                        <h5 class="fw-bold mb-0 pb-0">Nelly Gibilterra</h5>
                        <div style="position: relative;">
                            <p class="mb-0 mt-2 font-sm">

                            {{ str('
Nelly Gibilterra has been part of Encore Dance Theatre since 2019, bringing over 20 years of experience in dance, gymnastics, and studio management. Before joining Encore, she worked at All American Gymnastics in Long Island and performed with a private event company in Manhattan.

At Encore, Nelly manages daily front desk operations, collaborating with staff to create a safe, clean, and welcoming environment. Her positive energy and attention to detail help ensure a smooth experience for students and families.

Originally from New York, Nelly moved to South Florida in 2011. She also serves as Director of Field Operations for a nonprofit youth travel baseball organization in Coral Springs, supporting young athletes on and off the field.

Nelly lives in Coral Springs with her husband, Jason, and their two children, Emma and Jack. She enjoys traveling, shopping with her daughter, cheering on her son at baseball games, and spending time with family.

')->words(50, '...') }}
                        </p>
                            <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
                        </div>
                            <div type="button" data-toggle="modal" data-target="#NellyModal">
                            <div class="d-flex justify-content-start" id="read-more-wrap">
                                <div style="color: #0292BC;" id="read-more-text">Read More</div>
                                <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="NellyModal" tabindex="-1" aria-labelledby="NellyModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="NellyModalLabel">Nelly Gibilterra</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Nelly Gibilterra has been part of Encore Dance Theatre since 2019, bringing over 20 years of experience in dance, gymnastics, and studio management. Before joining Encore, she worked at All American Gymnastics in Long Island and performed with a private event company in Manhattan.
                            <br><br>
                            At Encore, Nelly manages daily front desk operations, collaborating with staff to create a safe, clean, and welcoming environment. Her positive energy and attention to detail help ensure a smooth experience for students and families.
                            <br><br>
                            Originally from New York, Nelly moved to South Florida in 2011. She also serves as Director of Field Operations for a nonprofit youth travel baseball organization in Coral Springs, supporting young athletes on and off the field.
                            <br><br>
                            Nelly lives in Coral Springs with her husband, Jason, and their two children, Emma and Jack. She enjoys traveling, shopping with her daughter, cheering on her son at baseball games, and spending time with family.
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 my-3">
                <div id="usedtoberow">
                    <div id="usedtobecolsm">
                        <img src="/images/deanna-2.jpeg" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div id="usedtobecolsm">
                        <h5 class="fw-bold mb-0 pb-0">Deanna Greist</h5>
                        <div style="position: relative;">
                            <p class="mb-0 mt-2 font-sm">

                            {{ str('
Deanna Greist grew up in South Florida and began her training at Jill Mallory Studio of Dance at the age of three. In high school, she trained at Donna Lee Studio of Dance and became an inaugural member of Expressions Dance Company where she was afforded the opportunity to work with nationally renowned choreographers, such as Rennie and Rhee Gold, Scott Fowler, and Debbie Dee. At the age of 18, Deanna became a member of The Young Americans where she benefitted from multiple national touring opportunities including working with and performing for the likes of Barbra Streisand, George Burns, and Shirley MacLaine to name a few.

                                            Deanna has been a dance educator/choreographer in South Florida for more than 30 years and has spent three of those years on faculty at Encore Dance Theatre. She is a certified Acrobatics Arts Instructor, as well as a certified Acro Dance Teacher Association Adjudicator. Deanna is also a certified judge for the Miss America Organization and enjoys judging local competitions. She is excited to be back for another successful year at Encore Dance Theatre!

')->words(50, '...') }}
                        </p>
                            <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
                        </div>
                            <div type="button" data-toggle="modal" data-target="#DeannaModal">
                            <div class="d-flex justify-content-start" id="read-more-wrap">
                                <div style="color: #0292BC;" id="read-more-text">Read More</div>
                                <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="DeannaModal" tabindex="-1" aria-labelledby="DeannaModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="DeannaModalLabel">Deanna Greist</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Deanna Greist grew up in South Florida and began her training at Jill Mallory Studio of Dance at the age of three. In high school, she trained at Donna Lee Studio of Dance and became an inaugural member of Expressions Dance Company where she was afforded the opportunity to work with nationally renowned choreographers, such as Rennie and Rhee Gold, Scott Fowler, and Debbie Dee. At the age of 18, Deanna became a member of The Young Americans where she benefitted from multiple national touring opportunities including working with and performing for the likes of Barbra Streisand, George Burns, and Shirley MacLaine to name a few.
                            <br><br>
                            Deanna has been a dance educator/choreographer in South Florida for more than 30 years and has spent three of those years on faculty at Encore Dance Theatre. She is a certified Acrobatics Arts Instructor, as well as a certified Acro Dance Teacher Association Adjudicator. Deanna is also a certified judge for the Miss America Organization and enjoys judging local competitions. She is excited to be back for another successful year at Encore Dance Theatre!

                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 my-3">
                <div id="usedtoberow">
                    <div id="usedtobecolsm">
                        <img src="/images/luz.jpg" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div id="usedtobecolsm">
                        <h5 class="fw-bold mb-0 pb-0">Luz Monica Guerrero</h5>
                        <div style="position: relative;">
                            <p class="mb-0 mt-2 font-sm">

                            {{ str('
Luz Monica is a graduate in Performing Arts, with a specialty in Ballet, graduated with a Gold Degree from the Higher Institute of Art of Havana, postgraduate in Historical Dances and Dances of Character, of Elementary and Middle level in the Superior Institute of Art of Havana. With vast experience in teaching, teaching courses in Classical Technique, Character Dances, Point Techniques and Repertoire at various levels. With pedagogical, didactic, methodological and administrative tools to guarantee the integral development of schools and dance academies; special interest in teaching, vocational guidance and planning and organization of the artistic curriculum. Co-creator and administrator of the La Luz de la Danza Foundation. With skills for work under pressure, achievement orientation and high-performance capacity in tasks of responsibility and exigency. We are thrilled to have Luz Monica on faculty.
')->words(50, '...') }}
                        </p>
                            <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
                        </div>
                            <div type="button" data-toggle="modal" data-target="#LuzModal">
                            <div class="d-flex justify-content-start" id="read-more-wrap">
                                <div style="color: #0292BC;" id="read-more-text">Read More</div>
                                <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="LuzModal" tabindex="-1" aria-labelledby="LuzModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="LuzModalLabel">Luz Monica Guerrero</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Luz Monica is a graduate in Performing Arts, with a specialty in Ballet, graduated with a Gold Degree from the Higher Institute of Art of Havana, postgraduate in Historical Dances and Dances of Character, of Elementary and Middle level in the Superior Institute of Art of Havana. With vast experience in teaching, teaching courses in Classical Technique, Character Dances, Point Techniques and Repertoire at various levels. With pedagogical, didactic, methodological and administrative tools to guarantee the integral development of schools and dance academies; special interest in teaching, vocational guidance and planning and organization of the artistic curriculum. Co-creator and administrator of the La Luz de la Danza Foundation. With skills for work under pressure, achievement orientation and high-performance capacity in tasks of responsibility and exigency. We are thrilled to have Luz Monica on faculty.
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>





            <div class="col-md-6 col-lg-4 my-3">
                <div id="usedtoberow">
                    <div id="usedtobecolsm">
                        <img src="/images/noeah.jpg" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div id="usedtobecolsm">
                        <h5 class="fw-bold mb-0 pb-0">Noeah Jacobs</h5>
                        <div style="position: relative;">
                            <p class="mb-0 mt-2 font-sm">

                            {{ str('
Noeah Jacobs is from west palm beach Florida, is 28 years old and became a professional

Hip Hop Dancer / Choreographer at the age of 16.

He’s been in movies, music videos, world tours & commercials and has a lot of knowledge and experience in the industry.

He’s worked with artist such as Chris Brown, Cardi B, Dj Khaled, Don Omar, Marc Anthony, Bad Bunny, LIL BABY, ASAP ROCKY , Ricky Martin, Ozuna, J balvin, YG, Nicky jam, Bsmyth, Rick Ross, Daddy Yankee, Fabulous, Kodak Black and many more and has also worked with brands & networks & Brands such as ROLLINGLOUD, BET NETWORK, REDBULL LIFETIME, Nissan, Adidas, Bang Energy, Spotify, Macys, FashionNova and many more!

Noeah has taught students all around the world from young dancers all the way to professionals and brings in a fun energetic atmosphere to all classes!!
')->words(50, '...') }}
                        </p>
                            <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
                        </div>
                            <div type="button" data-toggle="modal" data-target="#NoeahModal">
                            <div class="d-flex justify-content-start" id="read-more-wrap">
                                <div style="color: #0292BC;" id="read-more-text">Read More</div>
                                <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="NoeahModal" tabindex="-1" aria-labelledby="NoeahModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="NoeahModalLabel">Noeah Jacobs</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Noeah Jacobs is from west palm beach Florida, is 28 years old and became a professional
                            <br><br>
                            Hip Hop Dancer/Choreographer at the age of 16.
                            <br><br>
                            He’s been in movies, music videos, world tours & commercials and has a lot of knowledge and experience in the industry.
                            <br><br>
                            He’s worked with artist such as Chris Brown, Cardi B, Dj Khaled, Don Omar, Marc Anthony, Bad Bunny, LIL BABY, ASAP ROCKY , Ricky Martin, Ozuna, J balvin, YG, Nicky jam, Bsmyth, Rick Ross, Daddy Yankee, Fabulous, Kodak Black and many more and has also worked with brands & networks & Brands such as ROLLINGLOUD, BET NETWORK, REDBULL LIFETIME, Nissan, Adidas, Bang Energy, Spotify, Macys, FashionNova and many more!
                            <br><br>
                            Noeah has taught students all around the world from young dancers all the way to professionals and brings in a fun energetic atmosphere to all classes!!
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 my-3">
                <div id="usedtoberow">
                    <div id="usedtobecolsm">
                        <img src="/images/tori-crop.jpeg" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div id="usedtobecolsm">
                        <h5 class="fw-bold mb-0 pb-0">Tori Jacobson</h5>
                        <div style="position: relative;">
                            <p class="mb-0 mt-2 font-sm">

                            {{ str('
                                            Tori began dancing at Encore when she was three years old. She was on the competition team where she trained in ballet, tap, jazz, acro and lyrical. Tori recently graduated with her bachelors degree in business management. We are delighted that Tori has come back home to EDT!

')->words(50, '...') }}
                        </p>
                            <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
                        </div>
                            <div type="button" data-toggle="modal" data-target="#ToriModal">
                            <div class="d-flex justify-content-start" id="read-more-wrap">
                                <div style="color: #0292BC;" id="read-more-text">Read More</div>
                                <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="ToriModal" tabindex="-1" aria-labelledby="ToriModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ToriModalLabel">Tori Jacobson</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Tori began dancing at Encore when she was three years old. She was on the competition team where she trained in ballet, tap, jazz, acro and lyrical. Tori recently graduated with her bachelors degree in business management. We are delighted that Tori has come back home to EDT!

                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 my-3">
                <div id="usedtoberow">
                    <div id="usedtobecolsm">
                        <img src="/images/jordan.png" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div id="usedtobecolsm">
                        <h5 class="fw-bold mb-0 pb-0">Jordan Elizabeth Long</h5>
                        <div style="position: relative;">
                            <p class="mb-0 mt-2 font-sm">

                            {{ str('
Jordan Elizabeth Long was born in Blacksburg, Virginia. She began her ballet training with Carol Crawford Smith and continued with Terri Post at the Southwest Virginia Ballet. In high school, she trained in South Florida with Magaly Suarez.

Upon completion of high school, she was invited to join the Dutch National Ballet as a demi-soloist. In 2010 she joined the Royal Swedish Ballet, where she was promoted to soloist. During her time in Europe, her repertoire included leading roles in The Nutcracker, Swan Lake, Giselle, and The Sleeping Beauty.

Jordan has been awarded the Gold Medal at the World Ballet Competition USA, been a finalist at the Shanghai International Ballet Competition, and was awarded the Louis Gallodier Prize at the Royal Swedish Ballet. She has appeared in galas and festivals in the USA, Dominican Republic, Russia, Romania, and Hong Kong.

In 2014, Jordan joined Miami City Ballet as a Soloist, and was promoted to Principal Soloist in 2023. With MCB, her repertoire has included leading roles in George Balanchine’s The Nutcracker (Sugar Plum Fairy, Dew Drop, Hot Chocolate, Coffee), A Midsummer Night’s Dream (Titania, Hippolyta), Jewels (Emeralds principal and Rubies tall girl), Giselle (Myrtha), and Serenade (Dark Angel), among many others.

Jordan holds a bachelor’s degree in Business Administration from Liberty University and an MBA from the University of Miami. We excited to have Miss Jordan on the EDT faculty.
')->words(50, '...') }}
                        </p>
                            <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
                        </div>
                            <div type="button" data-toggle="modal" data-target="#JordanModal">
                            <div class="d-flex justify-content-start" id="read-more-wrap">
                                <div style="color: #0292BC;" id="read-more-text">Read More</div>
                                <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="JordanModal" tabindex="-1" aria-labelledby="JordanModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="JordanModalLabel">Jordan Elizabeth Long</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Jordan Elizabeth Long was born in Blacksburg, Virginia. She began her ballet training with Carol Crawford Smith and continued with Terri Post at the Southwest Virginia Ballet. In high school, she trained in South Florida with Magaly Suarez.
                            <br><br>
                            Upon completion of high school, she was invited to join the Dutch National Ballet as a demi-soloist. In 2010 she joined the Royal Swedish Ballet, where she was promoted to soloist. During her time in Europe, her repertoire included leading roles in The Nutcracker, Swan Lake, Giselle, and The Sleeping Beauty.
                            <br><br>
                            Jordan has been awarded the Gold Medal at the World Ballet Competition USA, been a finalist at the Shanghai International Ballet Competition, and was awarded the Louis Gallodier Prize at the Royal Swedish Ballet. She has appeared in galas and festivals in the USA, Dominican Republic, Russia, Romania, and Hong Kong.
                            <br><br>
                            In 2014, Jordan joined Miami City Ballet as a Soloist, and was promoted to Principal Soloist in 2023. With MCB, her repertoire has included leading roles in George Balanchine’s The Nutcracker (Sugar Plum Fairy, Dew Drop, Hot Chocolate, Coffee), A Midsummer Night’s Dream (Titania, Hippolyta), Jewels (Emeralds principal and Rubies tall girl), Giselle (Myrtha), and Serenade (Dark Angel), among many others.
                            <br><br>
                            Jordan holds a bachelor’s degree in Business Administration from Liberty University and an MBA from the University of Miami. We excited to have Miss Jordan on the EDT faculty.
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 my-3">
                <div id="usedtoberow">
                    <div id="usedtobecolsm">
                        <img src="/images/natasha-crop.jpeg" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div id="usedtobecolsm">
                        <h5 class="fw-bold mb-0 pb-0">Natasha Madrigal</h5>
                        <div style="position: relative;">
                            <p class="mb-0 mt-2 font-sm">

                            {{ str('
                                            Natasha grew up in Coral Springs, Florida. She started dancing at 4 years old and was a student at encore dance theater for 12 years. She was a part of the company team, training and competing in all dance styles. She has also had the opportunity to perform at the Miami Heat and Dolphins Halftime, Royal Caribbean Show, and Dance the Magic Disney Parade all with Encore. Natasha is currently a student at Nova Southeastern University, majoring in Entrepreneurship and minoring in dance. She has performed at NSU each semester in a variety of events. At 19 years old, she became a professional dancer for the NHL Florida Panthers. She continues to attend multiple dance workshops to better herself and proceed with her dance career in pro sports. Natasha is a proud alumni and is so excited to share her love for dance with her EDT family!

')->words(50, '...') }}
                        </p>
                            <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
                        </div>
                            <div type="button" data-toggle="modal" data-target="#NatashaModal">
                            <div class="d-flex justify-content-start" id="read-more-wrap">
                                <div style="color: #0292BC;" id="read-more-text">Read More</div>
                                <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="NatashaModal" tabindex="-1" aria-labelledby="NatashaModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="NatashaModalLabel">Natasha Madrigal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Natasha grew up in Coral Springs, Florida. She started dancing at 4 years old and was a student at encore dance theater for 12 years. She was a part of the company team, training and competing in all dance styles. She has also had the opportunity to perform at the Miami Heat and Dolphins Halftime, Royal Caribbean Show, and Dance the Magic Disney Parade all with Encore. Natasha is currently a student at Nova Southeastern University, majoring in Entrepreneurship and minoring in dance. She has performed at NSU each semester in a variety of events. At 19 years old, she became a professional dancer for the NHL Florida Panthers. She continues to attend multiple dance workshops to better herself and proceed with her dance career in pro sports. Natasha is a proud alumni and is so excited to share her love for dance with her EDT family!

                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 my-3">
                <div id="usedtoberow">
                    <div id="usedtobecolsm">
                        <img src="/images/shaelynn-4.png" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div id="usedtobecolsm">
                        <h5 class="fw-bold mb-0 pb-0">Shaelynn Padilla</h5>
                        <div style="position: relative;">
                            <p class="mb-0 mt-2 font-sm">

                            {{ str('
Shaelynn began dancing at the age of four and found her dance home at Encore just a few years later. What started as a love for musical theatre quickly expanded into a passion for jazz and, most notably, hip hop—captivated by its power, energy, and expressive freedom. As her training progressed, Shaelynn became a dedicated member of Encore’s Competitive Company, where she not only grew as a performer but also forged lifelong friendships and unforgettable memories.

Her journey came full circle when she stepped into the role of assistant teacher, discovering a true love for mentoring and inspiring younger dancers. Now a graduate, Shaelynn is thrilled to continue her dance journey as an instructor at Encore. She looks forward to giving back to the studio that shaped her and sharing her creativity, energy, and enthusiasm with the next generation of dancers.
')->words(50, '...') }}
                        </p>
                            <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
                        </div>
                            <div type="button" data-toggle="modal" data-target="#ShaelynnModal">
                            <div class="d-flex justify-content-start" id="read-more-wrap">
                                <div style="color: #0292BC;" id="read-more-text">Read More</div>
                                <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="ShaelynnModal" tabindex="-1" aria-labelledby="ShaelynnModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ShaelynnModalLabel">Shaelynn Padilla</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Shaelynn began dancing at the age of four and found her dance home at Encore just a few years later. What started as a love for musical theatre quickly expanded into a passion for jazz and, most notably, hip hop—captivated by its power, energy, and expressive freedom. As her training progressed, Shaelynn became a dedicated member of Encore’s Competitive Company, where she not only grew as a performer but also forged lifelong friendships and unforgettable memories.
                            <br><br>
                            Her journey came full circle when she stepped into the role of assistant teacher, discovering a true love for mentoring and inspiring younger dancers. Now a graduate, Shaelynn is thrilled to continue her dance journey as an instructor at Encore. She looks forward to giving back to the studio that shaped her and sharing her creativity, energy, and enthusiasm with the next generation of dancers.
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 my-3">
                <div id="usedtoberow">
                    <div id="usedtobecolsm">
                        <img src="/images/kalanie.png" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div id="usedtobecolsm">
                        <h5 class="fw-bold mb-0 pb-0">Kalanie Ramirez</h5>
                        <div style="position: relative;">
                            <p class="mb-0 mt-2 font-sm">

                            {{ str('
Kalanie began her dance journey at just two years old at Dancing Plus, where she dedicated 15 years to training in a wide range of styles, including ballet, tap, jazz, ballroom, lyrical, hip hop, and acro. Her passion for dance extended beyond the studio, as she became an active member of her high school’s arts conservatory and proudly performed with the Somerset Pantherettes dance team.

Her commitment and talent led her to the professional stage, where she successfully auditioned for the NHL Florida Panthers dance team. As part of the first group to ever perform on the ice, Kalanie had the incredible honor of celebrating a Stanley Cup championship victory and participating in the team’s championship parade.

In addition to her dance career, Kalanie is pursuing a degree in Communication Sciences and Disorders at Nova Southeastern University, with aspirations of becoming a speech-language pathologist. She also works as a special education teacher at South Florida Autism Charter School.
')->words(50, '...') }}
                        </p>
                            <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
                        </div>
                            <div type="button" data-toggle="modal" data-target="#KalanieModal">
                            <div class="d-flex justify-content-start" id="read-more-wrap">
                                <div style="color: #0292BC;" id="read-more-text">Read More</div>
                                <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="KalanieModal" tabindex="-1" aria-labelledby="KalanieModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="KalanieModalLabel">Kalanie Ramirez</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Kalanie began her dance journey at just two years old at Dancing Plus, where she dedicated 15 years to training in a wide range of styles, including ballet, tap, jazz, ballroom, lyrical, hip hop, and acro. Her passion for dance extended beyond the studio, as she became an active member of her high school’s arts conservatory and proudly performed with the Somerset Pantherettes dance team.
                            <br><br>
                            Her commitment and talent led her to the professional stage, where she successfully auditioned for the NHL Florida Panthers dance team. As part of the first group to ever perform on the ice, Kalanie had the incredible honor of celebrating a Stanley Cup championship victory and participating in the team’s championship parade.
                            <br><br>
                            In addition to her dance career, Kalanie is pursuing a degree in Communication Sciences and Disorders at Nova Southeastern University, with aspirations of becoming a speech-language pathologist. She also works as a special education teacher at South Florida Autism Charter School.
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 my-3">
                <div id="usedtoberow">
                    <div id="usedtobecolsm">
                        <img src="/images/marlee-crop.jpg" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div id="usedtobecolsm">
                        <h5 class="fw-bold mb-0 pb-0">Marlee Ramirez-Santana</h5>
                        <div style="position: relative;">
                            <p class="mb-0 mt-2 font-sm">

                            {{ str('
                                            Marlee has been a veteran of Encore Dance Theatre for 27 years. She has a Bachelors Degree in Exceptional Student Education with a Masters Degree in Educational Leadership. Marlee has a special talent to work with all levels. In her dance career she has performed with Ballet Met, The Power Rangers, and the Orange Bowl parade to name a few.

')->words(50, '...') }}
                        </p>
                            <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
                        </div>
                            <div type="button" data-toggle="modal" data-target="#MarleeModal">
                            <div class="d-flex justify-content-start" id="read-more-wrap">
                                <div style="color: #0292BC;" id="read-more-text">Read More</div>
                                <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="MarleeModal" tabindex="-1" aria-labelledby="MarleeModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="MarleeModalLabel">Marlee Ramirez-Santana</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Marlee has been a veteran of Encore Dance Theatre for 27 years. She has a Bachelors Degree in Exceptional Student Education with a Masters Degree in Educational Leadership. Marlee has a special talent to work with all levels. In her dance career she has performed with Ballet Met, The Power Rangers, and the Orange Bowl parade to name a few.

                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 my-3">
                <div id="usedtoberow">
                    <div id="usedtobecolsm">
                        <img src="/images/reyneris.png" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div id="usedtobecolsm">
                        <h5 class="fw-bold mb-0 pb-0">Reyneris Reyes</h5>
                        <div style="position: relative;">
                            <p class="mb-0 mt-2 font-sm">

                            {{ str('
Reyneris Reyes was born in Dimas-Mantua Pinar Del Rio, Cuba. He received his training at the Vocational School of Art in Pinar Del Rio and The National Ballet School in Havana. He received additional training at Cuballet summer dance program in Matanzas, Cuba, as well as with renowned teachers Ramona de Saa Bello, Berto Borges, Mabel Carillo, Adria Vélazquez, Magaly Suarez, Ana Julia Bermudez, Maria Cristina Alvarez, Josefina Mendez and others.

Reyes has danced for National Ballet of Cuba, Royal Winnipeg Ballet, Boston Ballet and he joined Miami City Ballet as a principal dancer in 2010. We are excited to have Mr. Reyes on faculty at EDT.
')->words(50, '...') }}
                        </p>
                            <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
                        </div>
                            <div type="button" data-toggle="modal" data-target="#ReynerisModal">
                            <div class="d-flex justify-content-start" id="read-more-wrap">
                                <div style="color: #0292BC;" id="read-more-text">Read More</div>
                                <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="ReynerisModal" tabindex="-1" aria-labelledby="ReynerisModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="ReynerisModalLabel">Reyneris Reyes</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Reyneris Reyes was born in Dimas-Mantua Pinar Del Rio, Cuba. He received his training at the Vocational School of Art in Pinar Del Rio and The National Ballet School in Havana. He received additional training at Cuballet summer dance program in Matanzas, Cuba, as well as with renowned teachers Ramona de Saa Bello, Berto Borges, Mabel Carillo, Adria Vélazquez, Magaly Suarez, Ana Julia Bermudez, Maria Cristina Alvarez, Josefina Mendez and others.
                            <br><br>
                            Reyes has danced for National Ballet of Cuba, Royal Winnipeg Ballet, Boston Ballet and he joined Miami City Ballet as a principal dancer in 2010. We are excited to have Mr. Reyes on faculty at EDT.
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>





            <!-- start add 10 existing -->

            <div class="col-md-6 col-lg-4 my-3">
                <div id="usedtoberow">
                    <div id="usedtobecolsm">
                        <img src="/images/staff-alana.jpg" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div id="usedtobecolsm">
                        <h5 class="fw-bold mb-0 pb-0">Alana Scheuerer</h5>
                        <div style="position: relative;">
                            <p class="mb-0 mt-2 font-sm">

                            {{ str('
                                            Alana holds an M.A. in American Dance Studies from Florida State University. Growing up as an award winning competitive dancer in South Florida, she specializes in tap. Alana helped found and run FSU’s first tap dance team, Seminole Tap Troupe, competed with student-run competitive dance team Seminole Dance Force, and served as hospitality coordinator for Dance Marathon. Alana has experience with hosting cultural stages at art festivals, producing and voicing NBC Comcast commercials, hosting live radio, and teaching dance workshops. She holds a seat on Coral Springs Public Art Committee and currently serves as the 85th Anniversary Miss Broward County, with her community service initiative of TAP: Turn up Artistic Participation. She works full time operating special events at the Museum of Discovery Science in downtown Fort Lauderdale, having worked with brands such as LEGO, Publix, and Joe DiMaggio Children’s Hospital. In March 2023, she led plans and operations for the 8,000 attendee Visit Lauderdale Science Festival. She’s excited to join the EDT Family and share her love for tap!

')->words(50, '...') }}
                        </p>
                            <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
                        </div>
                            <div type="button" data-toggle="modal" data-target="#AlanaModal">
                            <div class="d-flex justify-content-start" id="read-more-wrap">
                                <div style="color: #0292BC;" id="read-more-text">Read More</div>
                                <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="AlanaModal" tabindex="-1" aria-labelledby="AlanaModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="AlanaModalLabel">Alana Scheuerer</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Alana holds an M.A. in American Dance Studies from Florida State University. Growing up as an award winning competitive dancer in South Florida, she specializes in tap. Alana helped found and run FSU’s first tap dance team, Seminole Tap Troupe, competed with student-run competitive dance team Seminole Dance Force, and served as hospitality coordinator for Dance Marathon. Alana has experience with hosting cultural stages at art festivals, producing and voicing NBC Comcast commercials, hosting live radio, and teaching dance workshops. She holds a seat on Coral Springs Public Art Committee and currently serves as the 85th Anniversary Miss Broward County, with her community service initiative of TAP: Turn up Artistic Participation. She works full time operating special events at the Museum of Discovery Science in downtown Fort Lauderdale, having worked with brands such as LEGO, Publix, and Joe DiMaggio Children’s Hospital. In March 2023, she led plans and operations for the 8,000 attendee Visit Lauderdale Science Festival. She’s excited to join the EDT Family and share her love for tap!

                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 my-3">
                <div id="usedtoberow">
                    <div id="usedtobecolsm">
                        <img src="/images/staff-5.jpg" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div id="usedtobecolsm">
                        <h5 class="fw-bold mb-0 pb-0">Stacy Terry</h5>
                        <div style="position: relative;">
                            <p class="mb-0 mt-2 font-sm">

                            {{ str('
Bio coming soon!
')->words(50, '...') }}
                        </p>
                            <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
                        </div>
                            <div type="button" data-toggle="modal" data-target="#StacyModal">
                            <div class="d-flex justify-content-start" id="read-more-wrap">
                                <div style="color: #0292BC;" id="read-more-text">Read More</div>
                                <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="StacyModal" tabindex="-1" aria-labelledby="StacyModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="StacyModalLabel">Stacy Terry</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Bio coming soon!
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>











            <div class="col-md-6 col-lg-4 my-3">
                <div id="usedtoberow">
                    <div id="usedtobecolsm">
                        <img src="/images/hailey-crop.jpeg" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div id="usedtobecolsm">
                        <h5 class="fw-bold mb-0 pb-0">Hailey Walsh</h5>
                        <div style="position: relative;">
                            <p class="mb-0 mt-2 font-sm">

                            {{ str('
Hailey grew up in Northeast Ohio, training extensively in all styles of competitive dance. In high school, she moved to Denver, Colorado, where she joined The Silhouettes, who earned 2nd place on America’s Got Talent. Hailey later danced professionally in Hollywood and Las Vegas, performing in shows at Caesar’s Palace. Her career has taken her across the country and internationally, with performances for renowned artists like LeAnn Rimes and major brands such as Coca-Cola. After high school, Hailey attended Florida State University, where she was a proud member of the FSU Golden Girls.
')->words(50, '...') }}
                        </p>
                            <div style="background: linear-gradient(to bottom, rgba(248, 250, 252, 0) 0%, rgba(248, 250, 252, 1) 100%); height: 100%; width: 100%; position: absolute; top: 0; left: 0;"></div>
                        </div>
                            <div type="button" data-toggle="modal" data-target="#HaileyModal">
                            <div class="d-flex justify-content-start" id="read-more-wrap">
                                <div style="color: #0292BC;" id="read-more-text">Read More</div>
                                <div class="d-flex align-items-center"><ion-icon style="font-size: 20px;" name="chevron-forward"></ion-icon></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="HaileyModal" tabindex="-1" aria-labelledby="HaileyModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="HaileyModalLabel">Hailey Walsh</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Hailey grew up in Northeast Ohio, training extensively in all styles of competitive dance. In high school, she moved to Denver, Colorado, where she joined The Silhouettes, who earned 2nd place on America’s Got Talent. Hailey later danced professionally in Hollywood and Las Vegas, performing in shows at Caesar’s Palace. Her career has taken her across the country and internationally, with performances for renowned artists like LeAnn Rimes and major brands such as Coca-Cola. After high school, Hailey attended Florida State University, where she was a proud member of the FSU Golden Girls.
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- finish add 10 existing -->



        </div>
    </div>


@endsection
