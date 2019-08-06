@extends('admin.layouts.layout')

@section('title', 'Ekstrakurikuler')

@section('content')

    {{-- Slideshow --}}
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">

            <h4>Daftar Ekstrakurikuler</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <a href="{{route('extracurriculars.create')}}"><button type="button" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Ekstrakurikuler</button></a>

            {{-- table --}}
            <div class="table-responsive">
              {{-- <table class="table jambo_table bulk_action"> --}}
              <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title">No </th>
                    <th class="column-title">Nama Unit Kegiatan</th>
                    <th class="column-title">Kategori</th>
                    <th class="column-title">Preview Photo</th>
                    <th class="column-title">Konfigurasi</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($extracurriculars as $no => $extracurricular)
                    <tr class="even pointer">
                        <td class=" "> {{$no + 1}} </td>
                        <td class=" ">{{$extracurricular->name}} </td>
                        <td class=" ">{{$extracurricular->type}} </td>
                        <td class="">
                          {{-- extracurricular images --}}
                          @foreach ($extracurricular->extracurricular_images as $extracurricular_image)
                            <img src="/images/{{$extracurricular_image->name}}" alt="" style="max-width:7em;">
                          @endforeach
                          {{-- <a href="{{ route('extracurriculars.show',['extracurricular' => $extracurricular->id]) }} ">
                            <button type="button" class="btn btn-info btn-xs"><i class="fa fa-folder"></i>  Lihat Foto Ekstrakurikuler</button>
                          </a> --}}
                          <br/>
                        </td>
                        <td class=" ">
                          
                          <a href="{{ route( 'extracurriculars.edit', ['extracurricular' => $extracurricular->id] ) }}">
                            <button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i>  Ubah</button>
                          </a>
                          
                          <form method="POST" action=" {{ route( 'extracurriculars.destroy',['extracurricular' => $extracurricular->id] ) }} ">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>  Hapus</button>
                          </form>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            {{-- end table --}}
            
          </div>  
        </div>
      </div>
    </div>
    {{-- end Slideshow --}}
    
@endsection