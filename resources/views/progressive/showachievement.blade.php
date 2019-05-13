@extends('progressive.layout')
@section('title')
    Prestasi - {{$achievement->title}}
@endsection

@section('content')
    <div class="container">
        <div class="bottom-padding bottom-padding-mini">
            <header class="page-header">
                <div class="container">
                    <h1 class="title">{{$achievement->title}} 
                            <br>
                        <span class="badge badge-primary">{{ date('d F Y', strtotime($achievement->created_at) ) }} </span> 
                    </h1>
                    
                </div>	
            </header>
            
            <div class="portfolio">    
                
                <div class="col-sm-12 col-md-12 bottom-padding">
                    <img src="/images/{{$achievement->photo}}" alt="{{$achievement->photo}}" style="width:100%; height:auto;">
                </div>
                
            <div class="col-sm-12 col-md-12 ">
                 {!! $achievement->content !!}
            </div>

          </div>
        </div>
        
    </div>
@endsection