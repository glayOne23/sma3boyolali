{{-- {{dd($ekstrakurikuler->id)}} --}}
@extends('progressive.layout')
@section('title')
{{$ekstrakurikuler->name}}
@endsection

@section('content')
    <div class="container">
        <div class="bottom-padding bottom-padding-mini">
            <header class="page-header">
                <div class="container">
                    <h1 class="title">{{$ekstrakurikuler->name}} 
                            <br>
                        <span class="badge badge-primary">{{ date('d F Y', strtotime($ekstrakurikuler->created_at) ) }} </span> 
                    </h1>
                    
                </div>	
            </header>

            
            
            <div class="portfolio">    
                
                <div class="col-sm-12 col-md-12 bottom-padding">

                    <div class="slider rs-slider load">
                        <div class="tp-banner-container">
                            <div class="rs_slider tp-banner" data-version="5.0.7">
                                <ul>
                                    @foreach ($ekstrakurikuler->extracurricular_images as $extracurricular_image)    
                                        <li data-delay="7000" data-transition="fade" data-slotamount="7" data-masterspeed="1000">                                            
                                            <img class="replace-2x" src="/images/{{$extracurricular_image->name}} " alt="" data-bgfit="cover" data-bgposition="center top" data-bgrepeat="no-repeat">
                                        </li>
                                    @endforeach
                                </ul>
                            </div>        
                        </div>    
                    </div>
                </div>
                
            <div class="col-sm-12 col-md-12 ">
                 {!! $ekstrakurikuler->content !!}
            </div>

          </div>
        </div>
        
    </div>
@endsection