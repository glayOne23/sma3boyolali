@extends('admin.layouts.layout')

@section('title', 'Daftar User')

@section('content')

    {{-- Slideshow --}}
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">

            <h4>Daftar User</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <a href="{{route('users.create')}}"><button type="button" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah User</button></a>

            {{-- table --}}
            <div class="table-responsive">
              {{-- <table class="table jambo_table bulk_action"> --}}
              <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title">No </th>
                    <th class="column-title">Nama</th>
                    <th class="column-title">Foto user</th>
                    <th class="column-title">Konfigurasi</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($users as $no => $user)
                    <tr class="even pointer">
                        <td class=" "> {{$no + 1}} </td>
                        <td class=" ">{{$user->name}} </td>
                        <td class=" ">
                          <img src="/images/{{$user->photo}}" alt="{{$user->photo}}" style="max-width:7em;">
                        </td>
                        
                        <td class=" ">
                          
                          <a href="{{ route( 'users.edit', ['user' => $user->id] ) }}">
                            <button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i>  Ubah</button>
                          </a>
                          
                          <form method="POST" action=" {{ route( 'users.destroy',['user' => $user->id] ) }} ">
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