@extends('admin.layouts.layout')

@section('title', 'Link Website')

@section('content')

    {{-- Slideshow --}}
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">

            <h4>Daftar Link Webiste</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <a href="{{route('related_links.create')}}"><button type="button" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Link Webiste</button></a>

            {{-- table --}}
            <div class="table-responsive">
              {{-- <table class="table jambo_table bulk_action"> --}}
              <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title">No </th>
                    <th class="column-title">Nama Link Webiste</th>
                    <th class="column-title">Link Webiste</th>
                    <th class="column-title">Photo</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($related_links as $no => $related_link)
                    <tr class="even pointer">
                        <td class=" "> {{$no + 1}} </td>
                        <td class=" ">{{$related_link->title}} </td>
                        <td class=" ">{{$related_link->link}} </td>
                        <td class="">
                          {{-- related_link images --}}                          
                            <img src="/images/{{$related_link->image}}" alt="" style="max-width:7em;">          
                          <br/>
                        </td>
                        <td class=" ">
                          
                          <a href="{{ route( 'related_links.edit', ['related_link' => $related_link->id] ) }}">
                            <button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i>  Ubah</button>
                          </a>
                          
                          <form method="POST" action=" {{ route( 'related_links.destroy',['related_link' => $related_link->id] ) }} ">
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