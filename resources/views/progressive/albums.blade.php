@extends('progressive.layout')
@section('title')
    Halaman album
@endsection

@section('content')
    <div class="container">
        <div class="bottom-padding bottom-padding-mini">
            {{-- <header class="page-header text-center">
                <div class="container">
                    <h1 class="title">Galeri</h1>
                </div>	
            </header> --}}
          
          <div class="portfolio">

            <div class="row filter-elements">
                <div class="row">
                    @foreach ($albums as $album)
                    <div class="col-lg-6">
                        <div class="single-gallery">
                            <div class="content">
                                <a href="/galeri/{{$album->id}}">
                                    <div class="content-overlay"></div>
                                        <img class="content-image img-fluid d-block mx-auto rounded" src="/images/{{$album->cover}}" alt="{{$album->cover}}">
                                    <div class="content-details fadeIn-bottom">
                                    <h3 class="content-title mx-auto">{{$album->name}}</h3>
                                    <a href="/galeri/{{$album->id}}" class="primary-btn text-uppercase mt-20">Klik untuk lihat Isi Album</a>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
              
            </div>
          </div>
        </div>
        
    </div>
@endsection