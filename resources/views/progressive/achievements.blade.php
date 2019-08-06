@extends('progressive.layout')
@section('title')
    Prestasi SMAN 3 Boyolali
@endsection

@section('content')
    <div class="container">
        <div class="bottom-padding bottom-padding-mini">
            <header class="page-header">
                <div class="container">
                    <h1 class="title">Prestasi</h1>
                </div>	
            </header>
          
          <div class="portfolio">

              @foreach ($achievements as $achievement)
            <div class="row filter-elements">

                    <div class="row">
                        <div class="col-sm-12 col-md-4 bottom-padding">
                            <img src="/images/{{$achievement->photo}}" alt="{{$achievement->photo}}">
                        </div>
                        
                        <div class="col-sm-12 col-md-8 " style="padding:3em;">

                            <div class="title-box" style="margin-bottom:1em;">
                                <a href="/berita/{{$achievement->id}} ">
                                    <h2 class="title" style="padding: 0;">{{$achievement->title}}</h2>
                                </a>
                            </div>

                            <span class="label label-default">{{ date('d F Y', strtotime($achievement->created_at) ) }} </span>
                            <br>
                            {!! \Illuminate\Support\Str::words($achievement->content, 40,'....')  !!}
                            {{-- {{ \Illuminate\Support\Str::words($achievement->content, 50,'....')  }} --}}
                            <a href="/berita/{{$achievement->id}}" style="color:blue">Baca selengkapnya</a>

                        </div>
                    </div>                
                @endforeach
              
            </div>
          </div>
        </div>
        
    </div>
@endsection