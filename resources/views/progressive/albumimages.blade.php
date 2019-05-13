@extends('progressive.layout')
@section('title')
    Halaman Album {{$album->name}}
@endsection

@section('content')
    <div class="container">
        <div class="bottom-padding bottom-padding-mini">
            <header class="page-header">
                <h1 class="title">Galeri {{$album->name}} </h1>
            </header>
          
          <div class="portfolio">

            <div class="row filter-elements">
                
                @foreach ($album->album_images as $photo)
                    
                    <div class="bottom-padding col-sm-6 col-md-4 col-lg-4">
                        <div class="frame frame-padding frame-shadow-raised">
                        <img class="replace-2x" src="/images/{{$photo->name}}" alt="{{$photo->name}}" style="width:570px;height:260px">
                        </div>
                    </div>
                    
                @endforeach
              
            </div>
          </div>
        </div>
        
    </div>
@endsection