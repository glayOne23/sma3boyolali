@extends('admin.layouts.layout')

@section('title', 'Tambah Berita')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
            <h4>Buat Berita</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            
            <form class="form-horizontal form-label-left" action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  
                  {{-- nama blog --}}
                  <label for="name">Judul Berita</label>
                  <input type="text" id="title" class="form-control {{$errors->has('title') ? 'border-red' : ''}}" name="title" placeholder="judul berita...">
                  @if ($errors->has('title'))
                  <p style="color:red; margin-top:1em">{{$errors->first('title')}} </p>
                  @endif
                  
                  {{-- photo blog   --}}
                  <label for="upload_image" style="margin-top:2em;">Foto Berita (Maksimal ukuran gambar 4 mb)</label> <br>
                  <img id="upload_image" style="max-width:9em; max-height:12em;padding-bottom:10px;">
                  <input type="file" onchange="show_image.call(this)" name="file">  
                    @if ($errors->has('file'))
                      <p style="color:red">{{$errors->first('file')}} </p>
                    @endif
                    
                  {{-- Isi Berita   --}}
                  
                  <label for="blog" style="margin-top:2em;">Isi Berita</label>  

                  <textarea name="content" id="mytextarea"></textarea>
                  
                  <br />
                  @if ($errors->has('content'))
                    <p style="color:red">{{$errors->first('content')}} </p>
                  @endif

                  <div class="ln_solid"></div>

                  
                  {{-- end isi berita --}}
                  
                  {{-- type berita atau prestasi --}}
                  <input type="hidden" name="type" value="berita" >
                
                  <center>  
                    <button type="submit" id="upload_blog" class="btn btn-primary" style="margin-top:1em;"><i class="fa fa-upload"></i>  Upload</button>  
                  </center>  
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