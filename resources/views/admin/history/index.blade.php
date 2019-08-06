@extends('admin.layouts.layout')

@section('title', 'Sejarah')

@section('content')

    {{-- History --}}
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">

            <h4>Sejarah Sekolah</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <label for="" style="margin-bottom:1em;">Foto Sejarah</label>
        
            {{-- table --}}
            <div class="table-responsive">
              {{-- <table class="table jambo_table bulk_action"> --}}
              <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                <thead>
                  <tr class="headings">
                    <th class="column-title">No </th>
                    <th class="column-title">Foto-foto Sejarah</th>
                    <th class="column-title">Konfigurasi</th>
                  </tr>
                </thead>

                <tbody>
                  @foreach ($history->home_images as $no => $history_image)
                    <tr class="even pointer">
                        <td class=" "> {{$no + 1}} </td>
                        <td class=" ">
                          <img src="/images/{{$history_image->name}}" alt="" style="max-width:7em;"> 
                        </td>
    
                        <td class=" ">
                                            
                          <form method="POST" action="/admin/history/images/{{$history_image->id}}">
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

            <div class="ln_solid"></div>                  
            <form action="/admin/history" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              {{-- tambah photo history --}}
              <label for="upload_image">Tambah Foto Sejarah (Maksimal ukuran gambar 4 mb)</label> <br>
              <img id="upload_image" style="max-width:9em; max-height:12em;padding-bottom:10px;">
              <input type="file" onchange="show_image.call(this)" name="file">  
              @if ($errors->has('file'))
                <p style="color:red">{{$errors->first('file')}} </p>
                @endif
                {{-- end tambah photo history   --}}
                <div class="ln_solid"></div>
                
                  {{-- ubah deskripsi sejarah  --}}
              <label for="name">Deskripsi Sejarah</label>  
              
              <textarea name="content" id="mytextarea">{!! $history->content !!}</textarea>
              
              <br />
              @if ($errors->has('content'))
              <p style="color:red">{{$errors->first('content')}} </p>
              @endif
              
              {{-- end deskripsi sejarah --}}
              
              <div class="ln_solid"></div>  
              
              <center>
                <button type="submit" id="upload_history" class="btn btn-primary" style="margin-top:1em;"><i class="fa fa-upload"></i>  Upload</button>
              </center>

            </form>
  
          </div>  
        </div>
      </div>
    </div>
    {{-- end History --}}
    
<script>
    //show images
    function show_image(){
      if (this.files && this.files[0]){
        var obj = new FileReader();
        obj.onload = function(data){
          var image = document.getElementById('upload_image');
          image.src = data.target.result;
          image.style.display = "block";
        }
        obj.readAsDataURL(this.files[0]);
      }
    }
  </script>    
@endsection