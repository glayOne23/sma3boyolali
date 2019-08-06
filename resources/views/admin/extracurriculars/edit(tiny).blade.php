@extends('admin.layouts.layout')

@section('title', 'Ubah Unit Kegiatan')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h4>Ubah Unit Kegiatan</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <form class="form-horizontal form-label-left" action="{{ route('extracurriculars.update',['extracurricular' => $extracurricular->id]) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  
                  {{-- nama extracurricular --}}
                  <label for="name">Nama Unit Kegiatan</label>
                  <input type="text" id="name" class="form-control {{$errors->has('name') ? 'border-red' : ''}}" name="name" placeholder="nama ekstrakurikuler..." value="{{$extracurricular->name}}">
                    @if ($errors->has('name'))
                        <p style="color:red; margin-top:1em">{{$errors->first('name')}} </p>
                    @endif
                  
                    
                  <label style="margin-top:2em;">Kategori Unit Kegiatan : </label>
                  <p>
                    <input type="radio" class="flat" name="type" value="organisasi" checked="" {{$extracurricular->type == "organisasi" ? 'checked' : ''}} /> 
                    <span style="padding-right:1em;">Organisasi</span> 
                    <input type="radio" class="flat" name="type" value="ekstrakurikuler" {{$extracurricular->type == "ekstrakurikuler" ? 'checked' : ''}} />
                    <span style="padding-right:1em;">Ekstrakurikuler</span> 
                    <input type="radio" class="flat" name="type" value="osn" {{$extracurricular->type == "osn" ? 'checked' : ''}} />
                    <span style="padding-right:1em;">OSN</span> 
                  </p>

                  {{-- deskripsi ekstrakurikuler   --}}
                  <label for="name" style="margin-top:2em;">Deskripsi Unit Kegiatan</label>  
                  
                  <textarea name="content" id="mytextarea">{{ $extracurricular->content }} </textarea>
                  
                  <br />
                  @if ($errors->has('content'))
                    <p style="color:red">{{$errors->first('content')}} </p>
                  @endif

                  
                  <div class="ln_solid"></div>  
                  
                  {{-- end deskripsi ekstrakurikuler --}}


                  <label style="margin-bottom:2em;">Daftar Foto Ekstrakurikuler</label> <br>  
                    {{-- table --}}
                    <div class="table-responsive">
                    {{-- <table class="table jambo_table bulk_action"> --}}
                      <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                      <thead>
                        <tr class="headings">
                          <th class="column-title">No </th>
                          <th class="column-title">Gambar</th>
                          <th class="column-title">Konfigurasi</th>
                        </tr>
                      </thead>
      
                      <tbody>
                        @foreach ($extracurricular->extracurricular_images as $no => $extracurricular_image)
                          <tr class="even pointer">
                            <td class=" "> {{$no + 1}} </td>
                              <td class=" ">
                                <img src="/images/{{$extracurricular_image->name}}" alt="" style="max-width:7em;"> 
                              </td>
                              <td class=" ">
                                <form></form>       
                                {{-- <form method="POST" action="/admin/extracurriculars/{{$extracurricular->id}}/images/{{$extracurricular_image->id}}"> --}}
                                <form method="POST" action="{{route('extracurricular_image', ['extracurricular' => $extracurricular->id, 'extracurricular_image' => $extracurricular_image->id ])}} ">
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
                  
                  {{-- tambah photo extracurricular   --}}
                  <label for="upload_image">Tambah Foto Ekstrakurikuler (Maksimal ukuran gambar 4 mb)</label> <br>
                  <img id="upload_image" style="max-width:9em; max-height:12em;padding-bottom:10px;">
                  <input type="file" onchange="show_image.call(this)" name="file">  
                    @if ($errors->has('file'))
                      <p style="color:red">{{$errors->first('file')}} </p>
                    @endif
                    
                  <div class="ln_solid"></div>
                  

                  <center><button type="submit" id="upload_extracurricular" class="btn btn-primary" style="margin-top:1em;"><i class="fa fa-upload"></i>  Upload</button></center>
                    
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>

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