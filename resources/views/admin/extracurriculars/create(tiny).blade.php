@extends('admin.layouts.layout')

@section('title', 'Tambah Unit Kegiatan')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h4>Tambah Unit Kegiatan</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <form class="form-horizontal form-label-left" action="{{ route('extracurriculars.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  
                  {{-- nama extracurricular --}}
                  <label for="name">Nama Unit Kegiatan</label>
                  <input type="text" id="name" class="form-control {{$errors->has('name') ? 'border-red' : ''}}" name="name" placeholder="nama ekstrakurikuler...">
                    @if ($errors->has('name'))
                        <p style="color:red; margin-top:1em">{{$errors->first('name')}} </p>
                    @endif

                    <label style="margin-top:2em;">Kategori Unit Kegiatan : </label>
                    <p>
                      <input type="radio" class="flat" name="type" value="organisasi" checked="" required /> 
                      <span style="padding-right:1em;">Organisasi</span> 
                      <input type="radio" class="flat" name="type" value="ekstrakurikuler"/>
                      <span style="padding-right:1em;">Ekstrakurikuler</span> 
                      <input type="radio" class="flat" name="type" value="osn"/>
                      <span style="padding-right:1em;">OSN</span> 
                    </p>
                  
                  {{-- deskripsi ekstrakurikuler   --}}
                  <label for="name" style="margin-top:2em;">Deskripsi Unit Kegiatan</label>  
                  <textarea name="content" id="mytextarea"></textarea>
                  
                  <br />
                  @if ($errors->has('content'))
                    <p style="color:red">{{$errors->first('content')}} </p>
                  @endif

                  <div class="ln_solid"></div>

                  {{-- end deskripsi ekstrakurikuler --}}
                    
                  {{-- photo extracurricular   --}}
                  <label for="upload_image" style="margin-top:2em;">Foto Ekstrakurikuler (Maksimal ukuran gambar 4 mb)</label> <br>
                  <img id="upload_image" style="max-width:9em; max-height:12em;padding-bottom:10px;">
                  <input type="file" onchange="show_image.call(this)" name="file">  
                    @if ($errors->has('file'))
                      <p style="color:red">{{$errors->first('file')}} </p>
                    @endif

                  <button type="submit" id="upload_extracurricular" class="btn btn-primary" style="margin-top:1em;"><i class="fa fa-upload"></i>  Upload</button>  
                    
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