@extends('index')

@section('title', 'Covid19-Wiki')
@section('greeting')
    <section class="title-hero-bg" style="background-image: url('/images/2x/home-bg-2.jpg');">
        <div class="parallax-overlay"></div>
        <div class="container">
            <div class="page-title text-center">
                <h1 class="dark-color">Coronavirus (COVID-19)</h1>
                <h4 class="text-uppercase mt-30 yellow-color">ABOUT THE DISEASE</h4>
            </div>
        </div>
    </section>
@endsection
@section('info')
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <figure class="img-play-vid">
                        <img src="/images/hero_1.jpg" alt="Image" class="img-fluid">
                        <div class="absolute-block d-flex">
                            <span class="text">Watch the Video</span>
                            <a href="https://www.youtube.com/watch?v=9pVy8sRC440" data-fancybox class="btn-play">
                                <span class="icon-play"></span>
                            </a>
                        </div>
                    </figure>
                </div>
                <div class="col-lg-5 ml-auto">
                    <h2 class="mb-4 section-heading">What is Coronavirus?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi numquam!</p>
                    <ul class="list-check list-unstyled mb-5">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipisicing elit</li>
                        <li>Unde doloremque</li>
                    </ul>
                    <p><a href="#" class="btn btn-primary">Learn more</a></p>
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

@section('stayhome')
    <div class="site-section bg-primary-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">

                    <div class="row">
                        <div class="col-6 col-lg-6 mt-lg-5">
                            <div class="media-v1 bg-1">
                                <div class="icon-wrap">
                                    <span class="flaticon-stay-at-home"></span>
                                </div>
                                <div class="body">
                                    <h3>Stay at home</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                                </div>
                            </div>

                            <div class="media-v1 bg-1">
                                <div class="icon-wrap">
                                    <span class="flaticon-patient"></span>
                                </div>
                                <div class="body">
                                    <h3>Wear facemask</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-6">
                            <div class="media-v1 bg-1">
                                <div class="icon-wrap">
                                    <span class="flaticon-social-distancing"></span>
                                </div>
                                <div class="body">
                                    <h3>Keep social distancing</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                                </div>
                            </div>

                            <div class="media-v1 bg-1">
                                <div class="icon-wrap">
                                    <span class="flaticon-hand-washing"></span>
                                </div>
                                <div class="body">
                                    <h3>Wash your hands</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio, debitis!</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 ml-auto">
                    <h2 class="section-heading mb-4">How to Prevent Coronavirus?</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis doloribus consequatur fugit voluptatum ex rerum perspiciatis cupiditate, esse hic!</p>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, error!</p>

                    <ul class="list-check list-unstyled mb-5">
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Consectetur adipisicing elit</li>
                        <li>Unde doloremque</li>
                    </ul>

                    <p><a href="#" class="btn btn-primary">Read more about prevention</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('symptoms')
    <div class="site-section bg-primary-light">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-7 mx-auto text-center">
                    <h2 class="mb-4 section-heading">Symptoms of Coronavirus</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi numquam!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-4">
                    <div class="symptom d-flex">
                        <div class="img">
                            <img src="/images/symptom_high-fever.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="text">
                            <h3>High Fever</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nostrum ipsum repellendus animi modi iure provident, cupiditate perferendis voluptatem!</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="symptom d-flex">
                        <div class="img">
                            <img src="/images/symptom_cough.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="text">
                            <h3>Cough</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla ullam illo laborum repellendus vel esse dolor, sunt exercitationem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div class="symptom d-flex">
                        <div class="img">
                            <img src="/images/symptom_sore-troath.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="text">
                            <h3>Sore Troath</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum esse voluptatum, vel inventore at! Ullam, libero reiciendis amet?</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 mb-4">
                    <div class="symptom d-flex">
                        <div class="img">
                            <img src="/images/symptom_headache.png" alt="Image" class="img-fluid">
                        </div>
                        <div class="text">
                            <h3>Headache</h3>
                            <p> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus autem voluptatem ratione veniam rerum qui quibusdam reprehenderit quis.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-md-center">
                <div class="col-lg-10">
                    <div class="note row">

                        <div class="col-lg-8 mb-4 mb-lg-0"><strong>Stay at home and call your doctor:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium, eaque.</div>
                        <div class="col-lg-4 text-lg-right">
                            <a href="#" class="btn btn-primary"><span class="icon-phone mr-2 mt-3"></span>Help line</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
