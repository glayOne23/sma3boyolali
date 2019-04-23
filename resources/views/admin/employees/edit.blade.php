@extends('admin.layouts.layout')

@section('title', 'Edit Karyawan')

@section('content')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h4>Edit Karyawan</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <form class="form-horizontal form-label-left" action="{{ route('employees.update',['employee' => $employee->id]) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  
                  {{-- nama employee --}}
                  <label for="name">Nama Karyawan :</label>
                  <input type="text" id="name" class="form-control {{$errors->has('name') ? 'border-red' : ''}}" name="name" placeholder="nama karyawan..." value="{{$employee->name}} ">
                    @if ($errors->has('name'))
                        <p style="color:red; margin-top:1em">{{$errors->first('name')}} </p>
                    @endif

                  {{-- employee categories   --}}
                  <label for="employee_category" style="margin-top:2em;">Jabatan Karyawan :</label>
                  <select id="employee_category" class="form-control" required name="employee_category">
                    @foreach ($employee_categories as $employee_category)
                      <option value="{{$employee_category->id}}" {{$employee_category->id == $employee->employee_category_id ? 'selected' : ''}}>{{$employee_category->name}}</option>
                    @endforeach
                  </select>
                  
                  {{-- NIP --}}
                  <label for="nip" style="margin-top:2em;">NIP :</label>
                  <input type="text" id="nip" class="form-control {{$errors->has('nip') ? 'border-red' : ''}}" name="nip" placeholder="NIP..." value="{{$employee->nip}} ">
                    @if ($errors->has('nip'))
                        <p style="color:red; margin-top:1em">{{$errors->first('nip')}} </p>
                    @endif
        
                </div>

                <div class="col-md-6 col-sm-12 col-xs-12 form-group">
                  
                  {{-- birthday --}}
                  <label for="birthday">Tanggal Lahir :</label>
                  <div class='input-group date' id='myDatepicker4'>
                      <input type='text' id="birthday" class="form-control" readonly="readonly" {{$errors->has('birthday') ? 'border-red' : ''}}" name="birthday" value="{{$employee->birthday}} "/>
                      <span class="input-group-addon">
                         <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
                  @if ($errors->has('birthday'))
                    <p style="color:red; margin-top:1em">{{$errors->first('birthday')}} </p>
                  @endif
                  
                  {{-- Employee Image --}}
                  <label for="upload_image" style="margin-top:1.5em;">Foto Karyawan :</label> <br>
                  <img id="upload_image" src="/images/{{$employee->photo}}" style="max-width:9em; max-height:12em;padding-bottom:10px;">
                  <input type="file" onchange="show_image.call(this)" name="file">  
                    @if ($errors->has('file'))
                      <p style="color:red">{{$errors->first('file')}} </p>
                    @endif

                  </div>
                </div>

                <div class="ln_solid"></div>

                <center>
                  <button type="submit" class="btn btn-success">Ubah</button>  
                </center>  
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