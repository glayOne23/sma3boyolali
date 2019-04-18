@extends('admin.layouts.layout')

@section('title', 'Tambah Album')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h4>Tambah Album</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <form class="form-horizontal form-label-left" action="{{ route('albums.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  
                  {{-- nama album --}}
                  <label for="name">Nama Album</label>
                  <input type="text" id="name" class="form-control {{$errors->has('name') ? 'border-red' : ''}}" name="name" placeholder="nama album...">
                    @if ($errors->has('name'))
                        <p style="color:red; margin-top:1em">{{$errors->first('name')}} </p>
                    @endif
                  
                  {{-- cover album   --}}
                  <label for="upload_image" style="margin-top:2em;">Cover Album</label> <br>
                  <img id="upload_image" style="max-width:9em; max-height:12em;padding-bottom:10px;">
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