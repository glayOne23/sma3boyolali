@extends('progressive.layout')
@section('title')
    Berita - {{$blog->title}}
@endsection

@section('content')
    <div class="container">
        <div class="bottom-padding bottom-padding-mini">
            <header class="page-header">
                <div class="container">
                    <h1 class="title">{{$blog->title}} 
                            <br>
                        <span class="badge badge-primary">{{ date('d F Y', strtotime($blog->created_at) ) }} </span> 
                    </h1>
                    
                </div>	
            </header>
            
            <div class="portfolio">    
                
                <div class="col-sm-12 col-md-12 bottom-padding">
                    <img src="/images/{{$blog->photo}}" alt="{{$blog->photo}}" style="width:100%; height:auto;">
                </div>
                
            <div class="col-sm-12 col-md-12 ">
                 {!! $blog->content !!}
            </div>

          </div>
        </div>
        
    </div>
@endsection