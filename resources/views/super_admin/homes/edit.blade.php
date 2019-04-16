@extends('admin.layouts.layout')

@section('title', 'Ubah untuk Isi Home')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h4>Ubah untuk Home</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <form class="form-horizontal form-label-left" action="{{ route('homes.update',['home' => $home->id]) }}" method="POST">
              @csrf
              @method('PUT')

              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                    <input type="text" class="form-control {{$errors->has('name') ? 'border-red' : ''}}" name="name" value="{{$home->name}} ">
                      @if ($errors->has('name'))
                          <p style="color:red; margin-top:1em">{{$errors->first('name')}} </p>
                      @endif
  
                    <button type="submit" class="btn btn-primary" style="margin-top:1em;">Tambah</button>  
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection