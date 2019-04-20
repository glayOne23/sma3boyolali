@extends('admin.layouts.layout')

@section('title', 'Tambah Kategori Karyawan')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h4>Tambah Kategori Karyawan</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <form class="form-horizontal form-label-left" action="{{ route('employee_categories.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  
                  {{-- nama kategori karyawan --}}
                  <label for="name">Nama Kategori</label>
                  <input type="text" id="name" class="form-control {{$errors->has('name') ? 'border-red' : ''}}" name="name" placeholder="nama kategori karyawan...">
                    @if ($errors->has('name'))
                        <p style="color:red; margin-top:1em">{{$errors->first('name')}} </p>
                    @endif
                  
                  <button type="submit" class="btn btn-primary" style="margin-top:1em;">Upload</button>  
                    
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
@endsection