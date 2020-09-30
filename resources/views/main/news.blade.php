@extends('index')

@section('greeting')
    <div class="hero-v1">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6 text-center mx-auto">
                    <span class="d-block subheading">Updates</span>
                    <h1 class="heading mb-3">Blog Posts</h1>
                    <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vel a, nulla incidunt eaque sit praesentium porro consectetur optio!</p>

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
                    <h2 class="mb-4 section-heading">Latest News &amp; Articles</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex officia quas, modi sit eligendi numquam!</p>
                </div>
            </div>

            <div class="row">
                @foreach($news as $key)
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5">
                    <div class="post-entry">
                        <a href="{{route('post.show',[$key->news_slug])}}" class="thumb">
                            <span class="date">{{$key->created_at}}</span>
                            <img src="images/news/{{$key->news_img1}}" alt="Image" class="img-fluid">
                        </a>
                        <div class="post-meta text-center">
                            <a href="{{route('post.show',[$key->news_slug])}}">
                                <span class="icon-user"></span>
                                <span>Admin</span>
                            </a>
                        </div>
                        <a href="{{route('post.show',[$key->news_slug])}}" ><h3>{{$key->news_title}}</h3></a>
                    </div>
                </div>
                @endforeach
            </div>

{{--            <div class="row">--}}
{{--                <div class="col-lg-12 text-center">--}}
{{--                    <div class="custom-pagination">--}}
{{--                        <a href="#">1</a>--}}
{{--                        <a href="#" class="active">2</a>--}}
{{--                        <a href="#">3</a>--}}
{{--                        <a href="#">4</a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection
