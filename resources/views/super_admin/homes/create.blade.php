@extends('admin.layouts.layout')

@section('title', 'Buat Untuk Isi Home')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h4>Tambah untuk Home</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <form class="form-horizontal form-label-left" method="POST" action="{{route('homes.store')}}">
              @csrf
              <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  <input type="text" class="form-control {{$errors->has('name') ? 'border-red' : ''}}" name="name" placeholder="Isi Home">
                    @if ($errors->has('name'))
                        <p style="color:red; margin-top:1em">{{$errors->first('name')}} </p>
                    @endif

                  <button type="submit" class="btn btn-primary" style="margin-top:1em;">Tambah</button>  
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection