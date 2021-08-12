<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description', "From your child’s first class to their graduation performance. EDT has a class for everyone!")">
    <meta property="og:url" content="https://www.encoredancetheatre.com">
    <meta property="og:title" content="Dance Classes | Sunrise, FL">
    <meta property="og:description" content="More than just great dancing! At EDT, we offer one of the most complete dance instruction programs in Florida and work with students of all ages and abilities.">
    <meta property="og:image" content="https://encoredancetheatre.com/images/Community.jpg">

    <meta name="twitter:card" content="summary_large_image">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Encore Dance Theatre')</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-143810937-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-143810937-1');
    </script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans|Lato|Oswald:200,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

<div class="accordion" id="accordionExample">
    <div class="card">
        <div class="card-header text-center bg-danger" id="headingOne">
            <h2 class="mb-0">
                <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    EDT Covid-19 Policies for 2021 Winter Session
                </button>
            </h2>
        </div>

        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">

                <ul>
                    <span class="font-weight-bold text-primary"><u>GENERAL GUIDELINES</u></span>
                    <li> Please enter using main front doors for all arrivals. A staff member will be outside to greet your student and help them to
                        their class. At this time, we ask that parents wait in their cars or outside during classes to maintain social distancing.
                    </li>
                    <li> Students will be released using the side door located in the front of the building.
                    </li>
                    <li> Parents will be asked to wait outside for kids to be released. A staff member will be outside to ensure your dancer gets
                        back to you safely
                    </li>
                    <li> Please limit parent drop off to one person whenever possible. Sibling visitors cannot be accommodated during this time.
                    </li>
                    <li> At the end of class, parents must be by the door to receive their child. Students cannot walk across
                        the parking lot to go to their parents for safety reasons. Please do not be late to pick up your child.
                    </li>
                    <li> Social distancing (6 feet apart) will be observed throughout the studios, hallways, walkways, parking lots, etc.
                    </li>
                    <li> All lobby waiting areas, breakroom, student study areas, lockers, will be closed. Parents are welcome to wait in the
                        parking lot in their cars. Students under the age of 5 will be the exception if necessary.
                    </li>
                    <li> Dancers who have a break between classes must exit the building. They will need to wait outside and maintain social
                        distancing or they can wait in their car. All students outside must be supervised by a parent.
                    </li>
                    <li> No food will be allowed in the studio.
                    </li>
                    <li> Dancers should not enter the building until 5 minutes before their class time. They may wait in their car outside upon
                        arrival.
                    </li>
                    <li> Dancers need to arrive to the studio in their dance clothes. There will be NO changing allowed in the bathrooms.
                    </li>
                    <li> Upon arrive students will put their street shoes in a cubbie. All hip-hop sneakers must come in a zip-loc bag and cleaned
                        at home before using in the studio. Street shoes will not be allowed in the classrooms unless brought separately and
                        cleaned. All other dance shoes should be in their “small” bag. Do not bring any unnecessary items to the studio.
                    </li>
                    <li> Upon entering the classroom, students will place their dance bags and water bottles (bags should only have essential
                        items) on a designated spot in the room. Dancers will be directed to stand in the middle of a 6x6 grid box. Drink breaks
                        will be directed by the teacher.
                    </li>
                    <li> We have installed all new UV HVAC filters throughout the facility to improve the air quality and reduce contamination.
                        Intakes and returns will be cleaned regularly.
                    </li>
                    <li> A Company has been hired to “fog” (sanitize) the studio for viruses
                    </li>
                    <li> Every room has an hospital grade air purifier in them.
                    </li>
                    <li> All employees and dancers will have their temperature taken upon arrival.
                    </li>
                    <li> Families with high-risk family members should consider participating in dance classes through our virtual platform.
                        <br><br><span class="font-weight-bold text-primary"><u>HYGIENE</u></span>
                    </li>
                    <li> We have increased our cleaning frequencies and will have an additional “Sparkle Squad” on hand to assist with increased
                        sanitation procedures.
                    </li>
                    <li> Employees will wash hands and/or sanitize before and after each class.
                    </li>
                    <li> All visitors, guests, and staff all wear masks while in the building. EDT will provide appropriate face
                        coverings for all staff members. Dancers will wear face coverings while: Waiting for classes, entering
                        the studio, taking class, exiting the studio and while using common areas such as hallways, traveling to
                        and from the class, or restroom breaks.
                    </li>
                    <li> If necessary, while dancers are in their personal spaces exercising, removal of face coverings for their
                        safety will be permitted but must be immediately put back on when feeling better.

                    </li>
                    <li> Hand sanitizing stations will be available outside of all entrances, outside of every classroom, and inside the classrooms.
                        Students will be encouraged to wash hands and/or sanitize before and after classes.
                    </li>
                    <li> All new handwashing posters and “stop the spread” posters will be clearly posted within bathrooms.
                        <br><br><span class="font-weight-bold text-primary"><u>WELLNESS</u></span>
                    </li>
                    <li> In addition to our outstanding rigorous safety and wellness training, all teachers and staff members will receive regular and
                        continuing safety training as it relates to preventing community spread of COVID-19.
                    </li>
                    <li> Any staff member or student showing signs of sickness will be sent home.
                    </li>
                    <li> Please do not attend classes if you have fever or respiratory symptoms or live in a household with someone exhibiting fever
                        or respiratory symptoms.
                    </li>
                    <li> Please do not attend classes if you have tested positive for COVID-19 in the last 14 days.
                    </li>
                    <li> Please do not attend classes for 14 days following a visit to an area where there is “widespread sustained community spread”
                        of COVID-19.
                    </li>
                    <li> Parents must conduct their own health assessment of their dancer prior to arriving at EDT. This included taking temperature
                        and discussing all COVID-19 symptoms. Dancers may NOT enter the facility if they are exhibiting any symptoms or have been
                        exposed to COVID-19.
                        <br><br><span class="text-primary font-weight-bold"><u>CLASSROOMS</u></span>
                    </li>
                    <li> Class sizes have been modified to reflect a 6-foot social distancing pattern and floors will have
                        markers to help students maintain boundaries as much as possible.
                    </li>
                    <li> Upon entering, teachers/assistants will wash their hands and/or use hand sanitizer.
                    </li>
                    <li> Please bring clearly labeled water bottles. Drinking fountains will be not be available.
                    </li>
                    <li> Dancers will bring all dance bags into the studio for changing shoes. Lockers will be closed. Bathrooms will be available for
                        toileting only, but not for changing clothes.
                    </li>
                    <li> The use of all handheld props will be discontinued.
                    </li>
                    <li> Classrooms will refrain from hand-holding, high fives, “ballerina hugs”, fist bumps, stickers,
                        and stamps.
                    </li>
                    <li> Classrooms will have staggered dismissal (10-5 minutes) to allow for student transitions.
                        <br><br><span class="font-weight-bold text-primary"><u>BATHROOM USE</u></span>
                    </li>
                    <li> We encourage all students to use the restroom at home before coming to class.
                    </li>
                    <li> Bathrooms will be cleaned hourly.
                    </li>
                    <li> Bathroom facility use will be limited to the front two unisex bathrooms for this term.</li>
                    <br>
                    <span style="font-family: 'Dancing Script', cursive; font-size: 1.5em;">We are excited to be back in the studio and we appreciate your help to keep our EDT family
                    safe and healthy!</span>
                </ul>



            </div>
        </div>
    </div>
</div>

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
    <img src="/images/yellow.png" alt="yellow smiley face" style="height: 45px; width: auto;">
    <a class="navbar-brand" href="/"><img src="images/Encore-Logo.png" class="ml-5" alt=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-around" id="navbarNavDropdown" style="font-size: 1.2em;">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item active dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    About Us
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/mission">About Us</a>
                    <a class="dropdown-item" href="/staff">Our Faculty</a>
                    <a class="dropdown-item" href="/mission#facility">Our Facility</a>
                </div>
            </li>
            <li class="nav-item active dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Classes
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/dance-class">Classes</a>
{{--                    <a class="dropdown-item" href="/dancily">Dancily Online</a>--}}
                    <a class="dropdown-item" href="/wear">What to Wear</a>
                    <a class="dropdown-item" href="/prices">Prices & Policies</a>
                </div>
            </li>
{{--            <li class="nav-item active">--}}
{{--                <a class="nav-link" href="https://sites.google.com/view/edtrecital2021/home" target="_blank">Recital</a>--}}
{{--            </li>--}}
            <li class="nav-item active">
                <a class="nav-link" href="/fall">Fall</a>
            </li>
{{--            <li class="nav-item active">--}}
{{--                <a class="nav-link" href="/summer">Summer</a>--}}
{{--            </li>--}}
            <li class="nav-item active dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Teams
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/teams">All Stars Team</a>
                    <a class="dropdown-item" href="/teams#competitive">Elite Team</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="https://app.thestudiodirector.com/encoredancetheatreofs/portal.sd?page=Login" target="_blank">Register</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/contact">Contact Us</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/news">News</a>
            </li>
        </ul>
    </div>
</nav>

@if(session()->has('message'))
    <div class="alert alert-success" role="alert">
        <strong>Success</strong> {{ session()->get('message') }}
    </div>
@endif

    @yield('content')

<section id="footer">
    <div class="footer">
        <div class="copyright"><sup>&#169</sup> 2012-2021, Encore Dance Theatre<br>
            <a href="https://denliedesign.com" target="_blank">Dance Website Design by Denlie Design</a></div>
        <div id="socials">
            <a href="https://www.facebook.com/EDTDANCE/?fref=ts" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="https://twitter.com/EDTDANCE" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a>
            <a href="https://www.youtube.com/channel/UCTL_pIg-COHIwDR9BkiSoJQ" target="_blank"><ion-icon name="logo-youtube"></ion-icon></a>
            <a href="https://www.instagram.com/edtdance/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/gsap.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollToPlugin.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.1/ScrollTrigger.min.js" defer></script>
<script src="/js/script.js" defer></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

<script>
    AOS.init({
        duration: 1200,
    });
</script>

<script>
    $(document).ready(function(){
        $("#summerModal").modal('show');
    });
</script>

</body>
</html>
