@extends('admin.layouts.layout')

@section('title', 'Halaman Utama')

@section('content')

    {{-- Slideshow --}}
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">

            <h4>Isi Home</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <a href="{{route('homes.create')}}"><button type="button" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Isi</button></a>

            {{-- table --}}
            <div class="table-responsive">
              <table class="table jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title">No </th>
                    <th class="column-title">Nama</th>
                    {{-- <th class="column-title">Konfigurasi</th> --}}
                    <th class="bulk-actions" colspan="7">
                      <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                    </th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($homes as $no => $home)
                    <tr class="even pointer">
                        <td class=" "> {{$no + 1}} </td>
                        <td class=" ">{{$home->name}} </td>
                        {{-- <td class=" ">
                          
                          <a href="{{ route( 'homes.edit', ['home' => $home->id] ) }}">
                            <button type="button" class="btn btn-success btn-xs">Ubah</button>
                          </a>
                          
                          <form method="POST" action=" {{ route( 'homes.destroy',['home' => $home->id] ) }} ">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-xs">Hapus</button>
                          </form>
                        </td> --}}
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