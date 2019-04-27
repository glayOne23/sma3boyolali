@extends('admin.layouts.layout')

@section('title', 'Tambah User')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h4>Tambah User</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <form class="form-horizontal form-label-left" action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  
                  {{-- nama user --}}
                  <label for="name">Nama User</label>
                  <input type="text" id="name" class="form-control {{$errors->has('name') ? 'border-red' : ''}}" name="name" placeholder="nama user...">
                    @if ($errors->has('name'))
                        <p style="color:red; margin-top:1em">{{$errors->first('name')}} </p>
                    @endif

                  {{-- password   --}}
                  <label for="name" style="margin-top:2em;">Password</label>
                  <input type="password" id="password" class="form-control {{$errors->has('password') ? 'border-red' : ''}}" name="password">
                    @if ($errors->has('password'))
                        <p style="color:red; margin-top:1em">{{$errors->first('password')}} </p>
                    @endif

                  {{-- cover user   --}}
                  <label for="upload_image" style="margin-top:2em;">Photo</label> <br>
                  <img id="upload_image" style="max-width:9em; max-height:12em;padding-bottom:10px;">
                  <input type="file" onchange="show_image.call(this)" name="file">  
                    @if ($errors->has('file'))
                      <p style="color:red">{{$errors->first('file')}} </p>
                    @endif
                  <input type="hidden" name="role" value="1" >  

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