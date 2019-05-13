@extends('progressive.layout')
@section('title')
Visi Misi SMAN 3 Boyolali
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="content-block bottom-padding frame-shadow-raised">
                    <div class="title-box text-center">
                        <h1 class="title no-top-padding">Visi</h1>
                    </div>
                    <p>{!! $vision->vision !!}</p>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-12 col-md-12">
                <div class="content-block bottom-padding frame-shadow-raised">
                    <div class="title-box text-center">
                        <h1 class="title no-top-padding">Misi</h1>
                    </div>
                    <p>{!! $vision->mission !!}</p>
                </div>
            </div>
		</div>
    </div>
@endsection