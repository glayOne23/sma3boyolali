@extends('admin.layouts.layout')

@section('title', 'Prestasi')

@section('content')

    {{-- Slideshow --}}
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">

            <h4>Daftar Prestasi</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <a href="{{route('achievements.create')}}"><button type="button" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Prestasi</button></a>

            {{-- table --}}
            <div class="table-responsive">
              {{-- <table class="table jambo_table bulk_action"> --}}
              <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title">No </th>
                    <th class="column-title">Judul Prestasi</th>
                    <th class="column-title">Photo</th>
                    <th class="column-title">Konfigurasi</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($achievements as $no => $achievement)
                    <tr class="even pointer">
                        <td class=" "> {{$no + 1}} </td>
                        <td class=" ">{{$achievement->title}} </td>
                        <td class="">
                          {{-- achievement images --}}                          
                            <img src="/images/{{$achievement->photo}}" alt="" style="max-width:7em;">          
                          <br/>
                        </td>
                        <td class=" ">
                          
                          <a href="{{ route( 'achievements.edit', ['achievement' => $achievement->id] ) }}">
                            <button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i>  Ubah</button>
                          </a>
                          
                          <form method="POST" action=" {{ route( 'achievements.destroy',['achievement' => $achievement->id] ) }} ">
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