@extends('admin.layouts.layout')

@section('title', 'Categori Karyawan')

@section('content')

    {{-- Slideshow --}}
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">

            <h4>Daftar Kategori Karyawan</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <a href="{{route('employee_categories.create')}}"><button type="button" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Kategori Karyawan</button></a>

            {{-- table --}}
            <div class="table-responsive">
              <table class="table jambo_table bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title">No </th>
                    <th class="column-title">Nama</th>
                    <th class="column-title">Daftar Karyawan yang Menjabat</th>
                    <th class="column-title">Konfigurasi</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($employee_categories as $no => $employee_category)
                    <tr class="even pointer">
                        <td class=" "> {{$no + 1}} </td>
                        <td class=" ">{{$employee_category->name}} </td>
                        <td class="">
                          <a href="{{ route('employee_categories.show',['employee_category' => $employee_category->id]) }} ">
                            <button type="button" class="btn btn-info btn-xs"><i class="fa fa-folder"></i>  Lihat Data Karyawan </button>
                          </a>
                          <br/>
                        </td>
                        <td class=" ">
                          
                          <a href="{{ route( 'employee_categories.edit', ['employee_category' => $employee_category->id] ) }}">
                            <button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i>  Ubah</button>
                          </a>
                          
                          <form method="POST" action=" {{ route( 'employee_categories.destroy',['employee_category' => $employee_category->id] ) }} ">
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