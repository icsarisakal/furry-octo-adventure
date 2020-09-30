@extends('index')

@section('title', 'Covid19-Main')

@section('greeting')
    <div class="hero-v1">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mr-auto text-center text-lg-left">
                    <span class="d-block subheading">Covid-19 Awareness</span>
                    <h1 class="heading mb-3">Stay Safe. Stay Home.</h1>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel a, nulla incidunt eaque sit praesentium porro consectetur optio!</p>
                    <p class="mb-4"><a href="{{route('main.prevent')}}" class="btn btn-primary">How to prevent</a></p>



                </div>
                <div class="col-lg-6">
                    <figure class="illustration">
                        <img src="/images/illustration.png" alt="Image" class="img-fluid">
                    </figure>
                </div>
                <div class="col-lg-6"></div>
            </div>
        </div>
    </div>
@endsection
@section('stats')
    <div class="site-section stats">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-7 text-center mx-auto">
                    <h2 class="section-heading">Coronavirus Statistics</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, voluptate!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-graphic-design"></span>
              </span>
                        <strong class="d-block number" id="İyileşenler">{{$response[0]['activeCases']}}</strong>
                        <span class="label">Active Cases</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="data">
              <span class="icon text-primary">
                <span><img src="/images/flaticon/svg/tomb-2.svg" alt="" style="width: 2rem;"></span>
              </span>
                        <strong class="d-block number" id="İyileşenler">{{$response[0]['totalDeaths']}}</strong>
                        <span class="label">Deaths</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="data">
              <span class="icon text-primary">
                <span class="flaticon-startup"></span>
              </span>
                        <strong class="d-block number" id="İyileşenler">{{$response[0]['totalRecovered']}}</strong>
                        <span class="label">Recovered Case</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('protect')
    <div class="container pb-5">
        <div class="row">
            <div class="col-lg-3">
                <div class="feature-v1 d-flex align-items-center">
                    <div class="icon-wrap mr-3">
                        <span class="flaticon-protection"></span>
                    </div>
                    <div>
                        <h3>Protection</h3>
                        <span class="d-block">Lorem ipsum dolor sit.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="feature-v1 d-flex align-items-center">
                    <div class="icon-wrap mr-3">
                        <span class="flaticon-patient"></span>
                    </div>
                    <div>
                        <h3>Prevention</h3>
                        <span class="d-block">Lorem ipsum dolor sit.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="feature-v1 d-flex align-items-center">
                    <div class="icon-wrap mr-3">
                        <span class="flaticon-hand-sanitizer"></span>
                    </div>
                    <div>
                        <h3>Treatments</h3>
                        <span class="d-block">Lorem ipsum dolor sit.</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="feature-v1 d-flex align-items-center">
                    <div class="icon-wrap mr-3">
                        <span class="flaticon-virus"></span>
                    </div>
                    <div>
                        <h3>Symptoms</h3>
                        <span class="d-block">Lorem ipsum dolor sit.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('news')
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="mb-4 section-heading">News &amp; Articles</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi numquam!</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="post-entry">
                        <a href="#" class="thumb">
                            <span class="date">30 Jul, 2020</span>
                            <img src="/images/hero_1.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-meta text-center">
                            <a href="">
                                <span class="icon-user"></span>
                                <span>Admin</span>
                            </a>
                            <a href="#">
                                <span class="icon-comment"></span>
                                <span>3 Comments</span>
                            </a>
                        </div>
                        <h3><a href="#">How Coronavirus Very Contigous</a></h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="post-entry">
                        <a href="#" class="thumb">
                            <span class="date">30 Jul, 2020</span>
                            <img src="/images/hero_2.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-meta text-center">
                            <a href="">
                                <span class="icon-user"></span>
                                <span>Admin</span>
                            </a>
                            <a href="#">
                                <span class="icon-comment"></span>
                                <span>3 Comments</span>
                            </a>
                        </div>
                        <h3><a href="#">How Coronavirus Very Contigous</a></h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="post-entry">
                        <a href="#" class="thumb">
                            <span class="date">30 Jul, 2020</span>
                            <img src="/images/hero_1.jpg" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-meta text-center">
                            <a href="">
                                <span class="icon-user"></span>
                                <span>Admin</span>
                            </a>
                            <a href="#">
                                <span class="icon-comment"></span>
                                <span>3 Comments</span>
                            </a>
                        </div>
                        <h3><a href="#">How Coronavirus Very Contigous</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
