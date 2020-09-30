@extends('index')

@section('title', 'Covid19-Prevention')
@section('css')
@endsection
@section('greeting')
    <section class="title-hero-bg" style="background-image: url('/images/2x/title-bg-01.jpg');">
        <div class="parallax-overlay"></div>
        <div class="container">
            <div class="page-title text-center">
                <h1 class="dark-color">Prevention of Coronavirus</h1>
                <h4 class="text-uppercase mt-30 red-color">HOW TO PREVENT YOURSELF</h4>
            </div>
        </div>
    </section>
@endsection
@section('prevent')
    <div class="site-section">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-7 mx-auto text-center">
                    <span class="subheading">What you need to do</span>
                    <h2 class="mb-4 section-heading">How To Protect Yourself</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi numquam!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 ">
                    <div class="row mt-5 pt-5">
                        <div class="col-lg-6 do ">
                            <h3>You should do</h3>
                            <ul class="list-unstyled check">
                                <li>Stay at home</li>
                                <li>Wear mask</li>
                                <li>Use Sanitizer</li>
                                <li>Disinfect your home</li>
                                <li>Wash your hands</li>
                                <li>Frequent self-isolation</li>
                            </ul>
                        </div>
                        <div class="col-lg-6 dont ">
                            <h3>You should avoid</h3>
                            <ul class="list-unstyled cross">
                                <li>Avoid infected people</li>
                                <li>Avoid animals</li>
                                <li>Avoid handshaking</li>
                                <li>Aviod infected surfaces</li>
                                <li>Don't touch your face</li>
                                <li>Avoid droplets</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="/images/protect.png" alt="Image" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('spread2')
    <section id="prevention">
        <div class="container">
            <div class="row">
                <div class="col-md-6 heading-style-one box-title-two text-left">
                    <h6 class="text-uppercase text-danger font-weight-bold">How to Prevent Yourself</h6>
                    <h2><span class="font-700 text-dark">Prevention of Coronavirus</span></h2>
                    <p>You can protect yourself and help prevent spreading the virus<br> to others if you:</p>
                </div>
            </div>

            <div class="row mt-50">
                <div class="col-md-4 main-service-box-2 text-center col-sm-4">
                    <i><img class="img-responsive prevent-svg" src="/images/svg/hands-washing.svg" alt="hand-washing"></i>
                    <h4>Wash your hands frequently</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur leo a velit mattis.</p>
                    <a href="#.">Read more <i class="mdi mdi-arrow-right"></i></a>
                </div>
                <div class="col-md-4 main-service-box-2 text-center col-sm-4">
                    <i><img class="img-responsive prevent-svg" src="/images/svg/avoid-contact.svg" alt="avoid-contact"></i>
                    <h4>Avoid close contact</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur leo a velit mattis.</p>
                    <a href="#.">Read more <i class="mdi mdi-arrow-right"></i></a>
                </div>
                <div class="col-md-4 main-service-box-2 text-center col-sm-4">
                    <i><img class="img-responsive prevent-svg" src="/images/svg/cleaning-door.svg" alt="cleaning-door"></i>
                    <h4>If surfaces are dirty, clean them</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur leo a velit mattis.</p>
                    <a href="#.">Read more <i class="mdi mdi-arrow-right"></i></a>
                </div>

                <div class="col-md-4 main-service-box-2 text-center col-sm-4">
                    <i><img class="img-responsive prevent-svg" src="/images/svg/home-stay.svg" alt="home-stay"></i>
                    <h4>Stay home if you are sick,  get medical care</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur leo a velit mattis.</p>
                    <a href="#.">Read more <i class="mdi mdi-arrow-right"></i></a>
                </div>
                <div class="col-md-4 main-service-box-2 text-center col-sm-4">
                    <i><img class="img-responsive prevent-svg" src="/images/svg/mask-wearing.svg" alt="mask-wearing"></i>
                    <h4>If you are sick: You should wear a facemask</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur leo a velit mattis.</p>
                    <a href="#.">Read more <i class="mdi mdi-arrow-right"></i></a>
                </div>
                <div class="col-md-4 main-service-box-2 text-center col-sm-4">
                    <i><img class="img-responsive prevent-svg" src="/images/svg/vomiting-nausea.svg" alt="vomiting-nausea"></i>
                    <h4>Practice respiratory hygiene</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque consectetur leo a velit mattis.</p>
                    <a href="#.">Read more <i class="mdi mdi-arrow-right"></i></a>
                </div>

            </div>
        </div>
    </section>
@endsection
@section('spread1')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 heading-style-one box-title-two text-left">
                    <h6 class="red-color text-uppercase">How Coronavirus is Spread</h6>
                    <h2><span class="font-700">Transmission of (COVID-19)</span></h2>
                    <p>This version updates the 27 March publication by providing definitions of droplets by particle size and adding three relevant publications. </p>
                </div>
            </div>

            <div class="row mt-50">
                <div class="col-md-4 main-service-box text-center col-sm-4 feature-box">
                    <i class="img-responsive prevent-svg"><img style="width: 3rem;" src="/images/svg/infection-icon.svg" alt=""></i>
                    <h4>Human Contact</h4>
                    <p>Integer purus ipsum, auctor vitae posuere et, consectetur ac leo. Pellentesque sit amet risus sagittis, fermentum ligula.</p>
                </div>
                <div class="col-md-4 main-service-box text-center col-sm-4 feature-box">
                    <i><img class="img-responsive prevent-svg" src="/images/svg/earth-icon.svg" alt="" style="width: 3rem;"></i>
                    <h4>Air Transmission</h4>
                    <p>Integer purus ipsum, auctor vitae posuere et, consectetur ac leo. Pellentesque sit amet risus sagittis, fermentum ligula.</p>
                </div>
                <div class="col-md-4 main-service-box text-center col-sm-4 feature-box">
                    <i class="img-responsive prevent-svg"><img style="width: 3rem;" src="/images/svg/food-icon.svg" alt=""></i>
                    <h4>Contaminated</h4>
                    <p>Integer purus ipsum, auctor vitae posuere et, consectetur ac leo. Pellentesque sit amet risus sagittis, fermentum ligula.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('washand')
    <section class="light-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-6 heading-style-one box-title">
                    <h6 class="default-color text-uppercase">How to wash your hands</h6>
                    <h2><span class="font-700">Why do I need wash hand</span></h2>
                    <p>Protect yourself and others against infections</p>
                </div>
            </div>

            <div class="row mt-30">
                <div class="col-md-2 text-center col-sm-4">
                    <div class="box-wrap">
                        <span>1</span>
                        <div class="img-wrp"><img class="img-responsive" src="/images/svg/step-1.svg" alt="step-1"></div>
                        <h4>Apply soap</h4>
                    </div>
                </div>

                <div class="col-md-2 main-service-box-3 text-center col-sm-4">
                    <div class="box-wrap">
                        <span>2</span>
                        <div class="img-wrp"><img class="img-responsive" src="/images/svg/step-2.svg" alt="step-2"></div>
                        <h4>Rub Hands</h4>
                    </div>
                </div>

                <div class="col-md-2 main-service-box-3 text-center col-sm-4">
                    <div class="box-wrap">
                        <span>3</span>
                        <div class="img-wrp"><img class="img-responsive" src="/images/svg/step-3.svg" alt="step-3"></div>
                        <h4>Between Fingers</h4>
                    </div>
                </div>

                <div class="col-md-2 main-service-box-3 text-center col-sm-4">
                    <div class="box-wrap">
                        <span>4</span>
                        <div class="img-wrp"><img class="img-responsive" src="/images/svg/step-4.svg" alt="step-4"></div>
                        <h4>Back to Hands</h4>
                    </div>
                </div>

                <div class="col-md-2 main-service-box-3 text-center col-sm-4">
                    <div class="box-wrap">
                        <span>5</span>
                        <div class="img-wrp"><img class="img-responsive" src="/images/svg/step-5.svg" alt="step-5"></div>
                        <h4>Clean Thumbs</h4>
                    </div>
                </div>

                <div class="col-md-2 main-service-box-3 text-center col-sm-4">
                    <div class="box-wrap">
                        <span>6</span>
                        <div class="img-wrp"><img class="img-responsive" src="/images/svg/step-6.svg" alt="step-6"></div>
                        <h4>Use Towel</h4>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
