@extends('interior.layout')
@section('title')
{{$history->name}}
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
                        Sejarah SMAN 3 Boyolali				
                    </h1>	
                    <p class="text-white link-nav"><a href="/">Home </a>  <span class="lnr lnr-arrow-right"></span><a href="/sejarah">Sejarah </a></p>
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
                                {{-- <img class="img-fluid rounded" src="/images/{{$history->photo}}" alt="{{$history->photo}}"> --}}
                                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        @foreach ($history->home_images as $i => $history_image)    
                                            <li data-target="#carouselExampleIndicators" data-slide-to="{{$i}}" class="{{ ($i) ? '' : ' active' }}"></li>
                                            {{-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> --}}
                                        @endforeach
                                    </ol>
                                    <div class="carousel-inner">
                                        @foreach ($history->home_images as $i => $history_image)    
                                        <div class="carousel-item {{ ($i) ? '' : ' active' }}">
                                            <img class="d-block w-100" src="/images/{{$history_image->name}}" alt="{{$history_image->name}}">
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
                            <a class="posts-title" href="/berita/{{$history->id}}"> <h3>{{$history->title}}</h3></a>
                            <p class="date col-lg-12 col-md-12 col-6"><span class="lnr lnr-calendar-full"></span> {{ date('d F Y', strtotime($history->created_at) ) }}</p>
                            <p class="excert">
                                    {!! $history->content !!}
                            </p>
                        </div>
                    </div>                    										
                                
                </div>

            </div>
        </div>	
    </section>
    <!-- End post-content Area -->
@endsection