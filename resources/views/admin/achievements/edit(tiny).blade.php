@extends('admin.layouts.layout')

@section('title', 'Ubah Prestasi')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
            <h4>Ubah Prestasi</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            
            <form class="form-horizontal form-label-left" action="{{ route('achievements.update',['achievement' => $achievement->id]) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  
                  {{-- nama achievement --}}
                  <label for="name">Judul Prestasi</label>
                  <input type="text" id="title" class="form-control {{$errors->has('title') ? 'border-red' : ''}}" name="title" placeholder="judul prestasi..." value="{{$achievement->title}}" >
                  @if ($errors->has('title'))
                  <p style="color:red; margin-top:1em">{{$errors->first('title')}} </p>
                  @endif
                  
                  {{-- photo achievement   --}}
                  <label for="upload_image" style="margin-top:2em;">Foto Prestasi (Maksimal ukuran gambar 4 mb)</label> <br>
                  <img src="/images/{{$achievement->photo}}" id="upload_image" style="max-width:9em; max-height:12em;padding-bottom:10px;">
                  <input type="file" onchange="show_image.call(this)" name="file">  
                    @if ($errors->has('file'))
                      <p style="color:red">{{$errors->first('file')}} </p>
                    @endif
                    
                  {{-- Isi Berita   --}}
                  <label for="achievement" style="margin-top:2em;">Isi Prestasi</label>  
                  <textarea name="content" id="mytextarea">{{$achievement->content}}</textarea>
                  
                  <br />
                  @if ($errors->has('content'))
                    <p style="color:red">{{$errors->first('content')}} </p>
                  @endif

                  <div class="ln_solid"></div>

                  {{-- <input type="hidden" name="type" value="berita" > --}}

                  {{-- end isi berita --}}
                
                  <center>  
                    <button type="submit" id="upload_achievement" class="btn btn-primary" style="margin-top:1em;"><i class="fa fa-upload"></i>  Upload</button>  
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

  $('#upload_achievement').click(function(){
    
    $('#content').html(
        $("#editor-one").html()
    );
  });
</script>
@endsection