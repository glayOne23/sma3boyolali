@extends('admin.layouts.layout')

@section('title', 'Ubah Album')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h4>Ubah Album</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <form class="form-horizontal form-label-left" action="{{ route('albums.update',['album' => $album->id]) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                    
                  <label for="name">Nama Album</label>
                  <input type="text" id="name" class="form-control {{$errors->has('name') ? 'border-red' : ''}}" name="name" value="{{$album->name}} " placeholder="nama album..." >
                    @if ($errors->has('name'))
                        <p style="color:red; margin-top:1em">{{$errors->first('name')}} </p>
                    @endif
                  
                  <label for="upload_image" style="margin-top:2em;">Cover Album (Maksimal ukuran gambar 4 mb)</label> <br>
                  <img src="/images/{{$album->cover}} " id="upload_image" style="max-width:9em; max-height:12em;padding-bottom:10px;">
                  <input type="file" onchange="show_image.call(this)" name="file">  
                    @if ($errors->has('file'))
                      <p style="color:red">{{$errors->first('file')}} </p>
                    @endif

                  <button type="submit" class="btn btn-primary" style="margin-top:1em;">Upload</button>  
                    
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