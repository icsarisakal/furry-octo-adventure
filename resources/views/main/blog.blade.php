@extends('index')

@section('title')
    {{$news->news_title}}
@endsection

@section('greeting')
    <div class="hero-v1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center mx-auto">
                    <span class="d-block subheading">{{$news->created_at}}, by <a href="javascript:void(0)" style="cursor:context-menu">Admin</a> in <a href="javascript:void(0)" style="cursor:context-menu">COVID19</a></span>
                    <h1 class="heading mb-3">{{$news->news_title}}</h1>
                </div>

            </div>
        </div>
    </div>
@endsection
@section('news')
    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 blog-content" >
                    <div class="row">
                        <div class="col-lg-6 center-layout">
                            <figure><img src="/images/news/{{$news->news_img1}}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                                <figcaption>{{$news->news_img1_url}}</figcaption></figure>
                        </div>
                        <div class="col-lg-6 center-layout">
                            <figure><img src="/images/news/{{$news->news_img2}}" alt="Free Website Template by Free-Template.co" class="img-fluid">
                                <figcaption>{{$news->news_img2_url}}</figcaption></figure>
                        </div>

                    </div>
                    <div>
                        <p>
                            {!!$news->news_content!!}
                        </p>
                    </div>

                </div>
                <div class="col-md-4 sidebar">
                    <div class="sidebar-box">
                        <div class="categories">
                            <h3>Categories</h3>
                            <li><a href="#">Creatives <span>(12)</span></a></li>
                            <li><a href="#">News <span>(22)</span></a></li>
                            <li><a href="#">Design <span>(37)</span></a></li>
                            <li><a href="#">HTML <span>(42)</span></a></li>
                            <li><a href="#">Web Development <span>(14)</span></a></li>
                        </div>
                    </div>
                    <div class="sidebar-box">
                        <img src="https://dummyimage.com/275x300/000/fff.png" alt="Image placeholder" class="img-fluid mb-4">
                        <h3>About The Author</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                        <p><a href="#" class="btn btn-primary btn-sm">Read More</a></p>
                    </div>

                    <div class="sidebar-box">
                        <h3>Paragraph</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
