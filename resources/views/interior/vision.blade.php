@extends('interior.layout')
@section('title')
Visi Misi SMAN 3 Boyolali
@endsection

@section('content')
    {{-- <div class="container">
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
    </div> --}}

    <!-- Start feature Area -->
    <section class="feature-area section-gap">
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 pb-40 header-text text-center">
                    <h1 class="pb-10 text-white">Visi Misi SMAN 3 Boyolali</h1>
                    <p class="text-white">
                        Untuk meningkatkan mutu pendidikan, kami membuat visi misi seakurat mungkin
                    </p>
                </div>
            </div>							
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="single-feature">
                        <a href="#" class="title d-flex flex-row align-items-center">
                            <span class="lnr lnr-license"></span>
                            <h4>Visi</h4>
                        </a>
                        <p>
                            {!! $vision->vision !!}
                        </p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="single-feature">
                        <a href="#" class="title d-flex flex-row align-items-center">
                            <span class="lnr lnr-license"></span>
                            <h4>Misi</h4>
                        </a>
                        <p>
                            {!! $vision->mission !!}
                        </p>
                    </div>
                </div>
            </div>
        </div>	
    </section>
    <!-- End feature Area -->

@endsection