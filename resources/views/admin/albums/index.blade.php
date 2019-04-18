@extends('admin.layouts.layout')

@section('title', 'Album')

@section('content')

    {{-- Slideshow --}}
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">

            <h4>Daftar Album</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <a href="{{route('albums.create')}}"><button type="button" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Album</button></a>

            {{-- table --}}
            <div class="table-responsive">
              <table class="table jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title">No </th>
                    <th class="column-title">Nama</th>
                    <th class="column-title">Cover</th>
                    <th class="column-title">Foto Album</th>
                    <th class="column-title">Konfigurasi</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($albums as $no => $album)
                    <tr class="even pointer">
                        <td class=" "> {{$no + 1}} </td>
                        <td class=" ">{{$album->name}} </td>
                        <td class=" ">
                          <img src="/images/{{$album->cover}}" alt="{{$album->cover}}" style="max-width:7em;">
                        </td>
                        <td class="">
                          {{-- album images --}}
                          <a href="{{ route('albums.show',['album' => $album->id]) }} ">
                            <button type="button" class="btn btn-info btn-xs"><i class="fa fa-folder"></i>  Lihat Foto Album</button>
                          </a>
                          <br/>
                        </td>
                        <td class=" ">
                          
                          <a href="{{ route( 'albums.edit', ['album' => $album->id] ) }}">
                            <button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i>  Ubah</button>
                          </a>
                          
                          <form method="POST" action=" {{ route( 'albums.destroy',['album' => $album->id] ) }} ">
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