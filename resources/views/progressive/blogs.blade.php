@extends('progressive.layout')
@section('title')
    Berita SMAN 3 Boyolali
@endsection

@section('content')
    <div class="container">
        <div class="bottom-padding bottom-padding-mini">
            <header class="page-header">
                <div class="container">
                    <h1 class="title">Berita</h1>
                </div>	
            </header>
          
          <div class="portfolio">

              @foreach ($blogs as $blog)
            <div class="row filter-elements">

                    <div class="row">
                        <div class="col-sm-12 col-md-4 bottom-padding">
                            <img src="/images/{{$blog->photo}}" alt="{{$blog->photo}}">
                        </div>
                        
                        <div class="col-sm-12 col-md-8 " style="padding:3em;">

                            <div class="title-box" style="margin-bottom:1em;">
                                <a href="/berita/{{$blog->id}} ">
                                    <h2 class="title" style="padding: 0;">{{$blog->title}}</h2>
                                </a>
                            </div>

                            <span class="label label-default">{{ date('d F Y', strtotime($blog->created_at) ) }} </span>
                            
                            {!! \Illuminate\Support\Str::words($blog->content, 50,'....')  !!}
                            <a href="/berita/{{$blog->id}}" style="color:blue">Baca selengkapnya</a>

                        </div>
                    </div>                
                @endforeach
              
            </div>
          </div>
        </div>
        
    </div>
@endsection