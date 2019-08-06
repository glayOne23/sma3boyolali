@extends('progressive.layout')
@section('title')
    Link Terkait
@endsection

@section('content')
    <div class="container">
        <div class="bottom-padding bottom-padding-mini">
            <header class="page-header">
                <h1 class="title">Link Terkait</h1>
            </header>
        </div>


        @foreach ($links as $link)    
            <div class="col-sm-3 col-md-3 employee graphic-designer">
                <div class="default">
                <div class="image">
                    <img class="replace-2x" src="/images/{{$link->image}}" alt="" title="" width="270" height="270" style="width:270px;height:150px;" >
                </div>
                <div class="description">
                    <div class="vertical">
                    <h3 class="name">{{$link->title}}</h3>
                    <a href="{{$link->link}}"><div class="role">{{$link->link}}</div></a> 
                    </div>
                </div>
                </div>
            </div><!-- .employee -->
        @endforeach

    </div>
@endsection