@extends('admin.layouts.layout')

@section('title', 'Ubah Kategori Karyawan')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h4>Ubah Kategori Karyawan</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <form class="form-horizontal form-label-left" action="{{ route('employee_categories.update',['employee_category' => $employee_category->id]) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  
                  {{-- nama kategori karyawan --}}
                  <label for="name">Nama Kategori</label>
                  <input type="text" id="name" class="form-control {{$errors->has('name') ? 'border-red' : ''}}" name="name" placeholder="nama kategori karyawan..." value="{{$employee_category->name}} ">
                    @if ($errors->has('name'))
                        <p style="color:red; margin-top:1em">{{$errors->first('name')}} </p>
                    @endif
                  
                  <button type="submit" class="btn btn-success" style="margin-top:1em;">Ubah Nama</button>  
                    
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