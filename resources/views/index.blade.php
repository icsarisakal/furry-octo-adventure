
<!doctype html>
<html lang="en">
<head>

    <title>Covid 19 | @yield('title')</title>
    <link rel = "icon" href ="https://img.icons8.com/nolan/64/coronavirus.png" type = "image/x-icon">
    <link rel="stylesheet" href="public/css/jquery-jvectormap-2.0.1.css" type="text/css" media="screen"/>
    <script src="public/js/jquery-jvectormap-2.0.1.min.js"></script>
    <script src="public/js/jquery-jvectormap-world-mill.js"></script>
    <script src="/js/mapdata.js"></script>
    <script src="/js/worldmap.js"></script>
    <script src="https://kit.fontawesome.com/3b72f2bc78.js" crossorigin="anonymous"></script>
{{--    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>--}}
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/fonts/icomoon/style.css">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/jquery-ui.css">
    <link rel="stylesheet" href="/css/table.css">
    <link rel="stylesheet" href="/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/custom-icons.min.css">

    <link rel="stylesheet" href="/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/css/master.css">
    <link rel="stylesheet" href="/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/fonts/flaticon-covid/font/flaticon.css">

    <link rel="stylesheet" href="/css/aos.css">

    <link rel="stylesheet" href="/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
        @yield('css')
    </style>
</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">


<div id="overlayer"></div>
<div class="loader">
    <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
    </div>
</div>


<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

        <div class="container">
            <div class="row align-items-center">

                <div class="col-6 col-xl-2">
                    <div class="mb-0 site-logo"><a href="{{route('home')}}" class="mb-0">Covid19<span class="text-primary">.</span> </a></div>
                </div>

                <div class="col-12 col-md-10 d-none d-xl-block">
                    <nav class="site-navigation position-relative text-right" role="navigation">

                        <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li class="active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
{{--                            <li class="has-children">--}}
{{--                                <a href="{{route('main.prevent')}}" class="nav-link">asdadasdad</a>--}}
{{--                                <ul class="dropdown">--}}
{{--                                    <li><a href="#" class="nav-link">Stay at home</a></li>--}}
{{--                                    <li><a href="#" class="nav-link">Keep social distancing</a></li>--}}
{{--                                    <li class="has-children">--}}
{{--                                        <a href="#">More Links</a>--}}
{{--                                        <ul class="dropdown">--}}
{{--                                            <li><a href="#">Menu One</a></li>--}}
{{--                                            <li><a href="#">Menu Two</a></li>--}}
{{--                                            <li><a href="#">Menu Three</a></li>--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
{{--                                </ul>--}}
{{--                            </li>--}}
                            <li><a href="{{route('main.wiki')}}" class="nav-link">Wiki</a></li>
                            <li><a href="{{route('main.country')}}" class="nav-link">Countries</a></li>
                            <li><a href="{{route('main.prevent')}}" class="nav-link">Prevention</a></li>
                            <li><a href="{{route('main.news')}}" class="nav-link">News</a></li>
                        </ul>
                    </nav>
                </div>


                <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3 text-black"></span></a></div>

            </div>
        </div>

    </header>


    @yield('greeting')
    @yield('stats')
    @yield('info')
    @yield('spread1')
    @yield('protect')
    @yield('stayhome')
    @yield('prevent')
    @yield('symptoms')
    @yield('spread2')
    @yield('washand')
    @yield('news')

    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h2 class="footer-heading mb-4">About</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi cumque tenetur inventore veniam, hic vel ipsa necessitatibus ducimus architecto fugiat!</p>
                    <div class="my-5">
{{--                        <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>--}}
{{--                        <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>--}}
{{--                        <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>--}}
{{--                        <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>--}}
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="footer-heading mb-4">Quick Links</h2>
                            <ul class="list-unstyled">
                                <li><a href="{{route('main.prevent')}}">Prevention</a></li>
                                <li><a href="javascript:void(0)">FAQs</a></li>
                                <li><a href="{{route('main.wiki')}}">About Coronavirus</a></li>
                                <li><a href="javascript:void(0)">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h2 class="footer-heading mb-4">Helpful Link</h2>
                            <ul class="list-unstyled">
                                <li><a href="https://en.wikipedia.org/wiki/Health_professional">Healthcare Professional</a></li>
                                <li><a href="https://www.who.int/">World Health</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <h2 class="footer-heading mb-4">Resources</h2>
                            <ul class="list-unstyled">
                                <li><a href="https://www.who.int/">WHO Website</a></li>
                                <li><a href="https://www.cdc.gov/">CDC Website</a></li>
                                <li><a href="https://www.gov.uk/">Gov Website</a></li>
                                <li><a href="https://covid19.saglik.gov.tr/">TRC Website</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="border-top pt-5">
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<!-- .site-wrap -->

<script src="/js/jquery-3.3.1.min.js"></script>
<script src="/js/jquery-ui.js"></script>
<script src="/js/popper.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script src="/js/owl.carousel.min.js"></script>
<script src="/js/jquery.countdown.min.js"></script>
<script src="/js/jquery.easing.1.3.js"></script>
<script src="/js/aos.js"></script>
<script src="/js/jquery.fancybox.min.js"></script>
<script src="/js/jquery.sticky.js"></script>
<script src="/js/isotope.pkgd.min.js"></script>

<script src="/js/main.js"></script>
@yield('js')


</body>
<script type="text/javascript">


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(function(){
        var settings = {
            "async": true,
            "crossDomain": true,
            "url": "https://api.apify.com/v2/key-value-stores/SmuuI0oebnTWjRTUh/records/LATEST?disableRedirect=true",
            "method": "GET"
        }



        $.ajax(settings).done(function (response) {
            console.log(response['regionData']);
            // for (var i = 0; i < response['regionData'].length; i++) {
            //     //$("#lbl").text(response[i].country);
            //
            //     var str = "<label id='lbl'>"+response['regionData'][i].country + " Total Case: " +
            //     response['regionData'][i].totalCases+"</label><br>";
            //     $("label[id='lbls']").before(str);
            //
            // }
            var str = "<label id='lbl' style='font-size: larger'>" +response['regionData'][0].activeCases+"</label>";
            $("label[id='actv']").before(str);

            var str = "<label id='lbl' style='font-size: larger'>" +response['regionData'][0].totalRecovered+"</label>";
            $("label[id='rcvr']").before(str);
            var str = "<label id='lbl' style='font-size: larger'>" +response['regionData'][0].totalDeaths+"</label>";
            $("label[id='dths']").before(str);




        });


    });

</script>
</html>
