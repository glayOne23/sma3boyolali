@extends('interior.layout')
@section('title')
{{$ekstrakurikuler->name}}
@endsection

@section('bgutama')
/images/bg3.jpg
@endsection

@section('body')
    class="blog-page"
@endsection

@section('content')
        <!-- start banner Area -->
    <section class="banner-area relative" id="home">	
        <div class="overlay overlay-bg"></div>
        <div class="container">				
            <div class="row d-flex align-items-center justify-content-center">
                <div class="about-content col-lg-12">
                    <h1 class="text-white">
                            {{$ekstrakurikuler->name}}				
                    </h1>	
                    <p class="text-white link-nav"><a href="/">Home </a> <span class="lnr lnr-arrow-right"></span><a href="/ekstrakurikuler/{{$ekstrakurikuler->id}}">{{$ekstrakurikuler->name}} </a></p>
                </div>	
            </div>
        </div>
    </section>
    <!-- End banner Area -->
    
    <!-- Start post-content Area -->
    <section class="post-content-area mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 posts-list">

                    <div class="single-post row">
                        <div class="col-lg-12 col-md-12 ">
                            <div class="feature-img">
                                {{-- <img class="img-fluid rounded" src="/images/{{$ekstrakurikuler->photo}}" alt="{{$ekstrakurikuler->photo}}"> --}}
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @foreach ($ekstrakurikuler->extracurricular_images as $i => $extracurricular_image)     
                                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="{{ ($i) ? '' : ' active' }}"></li>
                                            {{-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
                                        @endforeach
                                    </ol>
                                    <div class="carousel-inner">
                                        @foreach ($ekstrakurikuler->extracurricular_images as $i => $extracurricular_image)     
                                        <div class="carousel-item {{ ($i) ? '' : ' active' }}">
                                            <img class="d-block w-100" src="/images/{{$extracurricular_image->name}}" alt="{{$extracurricular_image->name}}">
                                        </div>
                                        @endforeach
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                            <a class="posts-title" href="/berita/{{$ekstrakurikuler->id}}"> <h3>{{$ekstrakurikuler->title}}</h3></a>
                            <p class="date col-lg-12 col-md-12 col-6"><span class="lnr lnr-calendar-full"></span> {{ date('d F Y', strtotime($ekstrakurikuler->created_at) ) }}</p>
                            <p class="excert">
                                    {!! $ekstrakurikuler->content !!}
                            </p>
                        </div>
                    </div>                    										
                                
                </div>

            </div>
        </div>	
    </section>
    <!-- End post-content Area -->
@endsection