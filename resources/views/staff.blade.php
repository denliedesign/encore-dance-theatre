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
            <div class="col-md-6 col-lg-6 my-3">
                <div class="row">
                    <div class="col-sm">
                        <img src="/images/anne.jpg" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div class="col-sm">
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
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 my-3">
                <div class="row">
                    <div class="col-sm">
                        <img src="/images/deana.jpg" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div class="col-sm">
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
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 my-3">
                <div class="row">
                    <div class="col-sm">
                        <img src="/images/bella.jpg" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div class="col-sm">
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
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 my-3">
                <div class="row">
                    <div class="col-sm">
                        <img src="/images/karen.png" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div class="col-sm">
                        <h5 class="fw-bold mb-0 pb-0">Karen Cowart</h5>
                        <p class="mb-0 mt-2 font-sm" type="button" data-toggle="modal" data-target="#KarenModal">
                            {{ str('Bio coming soon!')->words(50, '...') }}
                        </p>
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

            <div class="col-md-6 col-lg-6 my-3">
                <div class="row">
                    <div class="col-sm">
                        <img src="/images/jordan.png" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div class="col-sm">
                        <h5 class="fw-bold mb-0 pb-0">Jordan Elizabeth Long</h5>
                        <p class="mb-0 mt-2 font-sm" type="button" data-toggle="modal" data-target="#JordanModal">
                            {{ str('
Jordan Elizabeth Long was born in Blacksburg, Virginia. She began her ballet training with Carol Crawford Smith and continued with Terri Post at the Southwest Virginia Ballet. In high school, she trained in South Florida with Magaly Suarez.

Upon completion of high school, she was invited to join the Dutch National Ballet as a demi-soloist. In 2010 she joined the Royal Swedish Ballet, where she was promoted to soloist. During her time in Europe, her repertoire included leading roles in The Nutcracker, Swan Lake, Giselle, and The Sleeping Beauty.

Jordan has been awarded the Gold Medal at the World Ballet Competition USA, been a finalist at the Shanghai International Ballet Competition, and was awarded the Louis Gallodier Prize at the Royal Swedish Ballet. She has appeared in galas and festivals in the USA, Dominican Republic, Russia, Romania, and Hong Kong.

In 2014, Jordan joined Miami City Ballet as a Soloist, and was promoted to Principal Soloist in 2023. With MCB, her repertoire has included leading roles in George Balanchine’s The Nutcracker (Sugar Plum Fairy, Dew Drop, Hot Chocolate, Coffee), A Midsummer Night’s Dream (Titania, Hippolyta), Jewels (Emeralds principal and Rubies tall girl), Giselle (Myrtha), and Serenade (Dark Angel), among many others.

Jordan holds a bachelor’s degree in Business Administration from Liberty University and an MBA from the University of Miami. We excited to have Miss Jordan on the EDT faculty.
')->words(50, '...') }}
                        </p>
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

            <div class="col-md-6 col-lg-6 my-3">
                <div class="row">
                    <div class="col-sm">
                        <img src="/images/reyneris.png" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div class="col-sm">
                        <h5 class="fw-bold mb-0 pb-0">Reyneris Reyes</h5>
                        <p class="mb-0 mt-2 font-sm" type="button" data-toggle="modal" data-target="#ReynerisModal">
                            {{ str('
Reyneris Reyes was born in Dimas-Mantua Pinar Del Rio, Cuba. He received his training at the Vocational School of Art in Pinar Del Rio and The National Ballet School in Havana. He received additional training at Cuballet summer dance program in Matanzas, Cuba, as well as with renowned teachers Ramona de Saa Bello, Berto Borges, Mabel Carillo, Adria Vélazquez, Magaly Suarez, Ana Julia Bermudez, Maria Cristina Alvarez, Josefina Mendez and others.

Reyes has danced for National Ballet of Cuba, Royal Winnipeg Ballet, Boston Ballet and he joined Miami City Ballet as a principal dancer in 2010. We are excited to have Mr. Reyes on faculty at EDT.
')->words(50, '...') }}
                        </p>
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

            <div class="col-md-6 col-lg-6 my-3">
                <div class="row">
                    <div class="col-sm">
                        <img src="/images/kalanie.png" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div class="col-sm">
                        <h5 class="fw-bold mb-0 pb-0">Kalanie Ramirez</h5>
                        <p class="mb-0 mt-2 font-sm" type="button" data-toggle="modal" data-target="#KalanieModal">
                            {{ str('
Bio coming soon!
')->words(50, '...') }}
                        </p>
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
Bio coming soon!
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-6 my-3">
                <div class="row">
                    <div class="col-sm">
                        <img src="/images/shaelynn.png" class="rounded mb-3" style="height: 425px; width: 100%; object-fit: cover; object-position: top;" alt="Instructor Name">
                    </div>
                    <div class="col-sm">
                        <h5 class="fw-bold mb-0 pb-0">Shaelynn Padilla</h5>
                        <p class="mb-0 mt-2 font-sm" type="button" data-toggle="modal" data-target="#ShaelynnModal">
                            {{ str('
Shaelynn began dancing at the age of four and found her dance home at Encore just a few years later. What started as a love for musical theatre quickly expanded into a passion for jazz and, most notably, hip hop—captivated by its power, energy, and expressive freedom. As her training progressed, Shaelynn became a dedicated member of Encore’s Competitive Company, where she not only grew as a performer but also forged lifelong friendships and unforgettable memories.

Her journey came full circle when she stepped into the role of assistant teacher, discovering a true love for mentoring and inspiring younger dancers. Now a graduate, Shaelynn is thrilled to continue her dance journey as an instructor at Encore. She looks forward to giving back to the studio that shaped her and sharing her creativity, energy, and enthusiasm with the next generation of dancers.
')->words(50, '...') }}
                        </p>
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



        </div>
    </div>


@endsection
