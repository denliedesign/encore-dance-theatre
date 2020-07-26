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

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body>

{{--<div class="accordion" id="accordionExample">--}}
{{--    <div class="card">--}}
{{--        <div class="card-header text-center bg-danger" id="headingOne">--}}
{{--            <h2 class="mb-0">--}}
{{--                <button class="btn btn-link text-white" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">--}}
{{--                    COVID-19 Update--}}
{{--                </button>--}}
{{--            </h2>--}}
{{--        </div>--}}

{{--        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">--}}
{{--            <div class="card-body">--}}
{{--                Dear EDT Families,--}}
{{--                <br><br>--}}
{{--                At Encore Dance Theatre the health and safety of our faculty, students and their families are our most important priority.--}}
{{--                <br><br>--}}
{{--                As COVID-19 continues to spread and affect many parts of the U.S. we have been closely monitoring local conditions. After consulting colleagues and leaders in the industry, we have determined that it is in the best interest of our faculty and families to temporarily suspend all classes.--}}
{{--                <br><br>--}}
{{--                Effective Monday, March 16th the studio will be closed at least until Sunday, March 29th to help slow the spread of COVID-19. The dance season will still go on! We will continue to try to provide a sense of normalcy for this challenging time even if it is through virtual channels. Please continue to check your emails for exciting digital messages from your child’s dance teachers.--}}
{{--                <br><br>--}}
{{--                We will be staying in touch, sending recital music and videos for practice, and also sending mini lessons to our families so that you can enjoy and practice dance at home. We are working hard to keep our teachers working and students engaged during this time. Our faculty is working hard to serve you the best that we can!--}}
{{--                <br><br>--}}
{{--                In the meantime recital dates remain unchanged. We will continue to monitor the situation, and will update you accordingly.--}}
{{--                <br><br>--}}
{{--                Thank you for taking the appropriate steps with us the lessen the risk to our community as much as possible. We greatly appreciate your support.--}}
{{--                <br><br>--}}
{{--                Teamwork makes the dream work!--}}
{{--                <br><br>--}}
{{--                In partnership,<br>--}}
{{--                Ms. Anne and the EDT faculty--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}

<nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
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
                    <a class="dropdown-item" href="/wear">What to Wear</a>
                </div>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="https://sites.google.com/a/edtfl.com/encore-recital-2019/home" target="_blank">Recital</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/summer">Summer</a>
            </li>
            <li class="nav-item active dropdown">
                <a class="nav-link" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Teams
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="/teams">Performance Teams</a>
                    <a class="dropdown-item" href="/teams#competitive">Competitive Teams</a>
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
        <div class="copyright"><sup>&#169</sup> 2012-2020, Encore Dance Theatre<br>
            <a href="https://denliedesign.com" target="_blank">Dance Studio Websites by Denlie Design</a></div>
        <div id="socials">
            <a href="https://www.facebook.com/EDTDANCE/?fref=ts" target="_blank"><ion-icon name="logo-facebook"></ion-icon></a>
            <a href="https://twitter.com/EDTDANCE" target="_blank"><ion-icon name="logo-twitter"></ion-icon></a>
            <a href="https://www.youtube.com/channel/UCTL_pIg-COHIwDR9BkiSoJQ" target="_blank"><ion-icon name="logo-youtube"></ion-icon></a>
            <a href="https://www.instagram.com/edtdance/" target="_blank"><ion-icon name="logo-instagram"></ion-icon></a>
        </div>
    </div>
</section>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

<script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

<script>
    AOS.init({
        duration: 1200,
    });
</script>

{{--<script>--}}
{{--    $(document).ready(function(){--}}
{{--        $("#summerModal").modal('show');--}}
{{--    });--}}
{{--</script>--}}

</body>
</html>
