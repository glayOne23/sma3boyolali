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
                @foreach ($albums as $album)
                    
                    <div class="web-design col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <a href="/galeri/{{$album->id}}" class="work">
                        <img class="replace-2x" src="/images/{{$album->cover}}" alt="{{$album->cover}}" style="width:370px;height:270px">
                        <span class="shadow"></span>
                        <div class="bg-hover"></div>
                        <div class="work-title">
                            <h3 class="title">{{$album->name}} </h3>
                            <div class="description">Klik untuk melihat isi album</div>
                        </div>
                        </a>
                    </div>

                @endforeach
              
            </div>
          </div>
        </div>
        
    </div>
@endsection