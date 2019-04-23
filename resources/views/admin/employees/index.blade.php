@extends('admin.layouts.layout')

@section('title', 'Data Karyawan')

@section('content')
    {{-- Slideshow --}}
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">

            <h4>Daftar Data Karyawan</h4>
                        
            <div class="clearfix"></div>
            
          </div>
          <div class="x_content">
            
            <a href="/admin/employees/create/">
              <button type="button" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Karyawan</button>
            </a>
            {{-- table --}}
            <form action="{{route('employees.destroy')}}" method="POST">
              @csrf
              @method('DELETE')
            
              <div class="table-responsive">
                {{-- <table class="table jambo_table bulk_action"> --}}
                <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
                  <thead>
                    <tr class="headings">
                      <th>
                        <input type="checkbox" id="check-all" class="flat">
                      </th>
                      <th class="column-title">No</th>
                      <th class="column-title">Nama Karyawan</th>
                      <th class="column-title">NIP</th>
                      <th class="column-title">Jabatan</th>
                      <th class="column-title">Tangggal Lahir</th>
                      <th class="column-title">Foto</th>
                      <th class="column-title">Konfigurasi</th>
                      <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;"> ( <span class="action-cnt"> </span> )</a>
                      </th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($employees as $no => $employee)
                    <tr class="even pointer">
                      <td class="a-center ">
                        <input type="checkbox" class="flat" name="table_records[]" value="{{$employee->id}}">
                      </td>
                      <td class=" ">{{$no + 1}} </td>
                      <td class=" ">{{$employee->name}} </td>
                      <td class=" ">{{$employee->nip}} </td>
                      <td class=" ">{{$employee->employee_category->name}} </td>
                      <td class=" ">{{$employee->birthday}} </td>
                      <td class=" ">
                        <img src="/images/{{$employee->photo}}" alt="{{$employee->photo}}" style="max-width:7em;">
                      </td>
                      <td class=" ">
                        <a href="{{ route( 'employees.edit', ['employee' => $employee->id] ) }}">
                          <button type="button" class="btn btn-success btn-xs"><i class="fa fa-pencil"></i>  Ubah</button>
                        </a>
                      </td>
                    </tr>    
                    @endforeach
                  </tbody>
                </table>
              </div>
              <button type="submit" id="for_slideshow" class="btn btn-danger" disabled> <i class="fa fa-trash"></i> Hapus Data Karyawan</button>
              <p>Beri centang untuk menghapus gambar</p>
            </form>
            {{-- end table --}}
          </div>  
        </div>
      </div>
    </div>
    {{-- end Slideshow --}}
    
    <script>
      $(document).ready(function(){

        var ids = [];

        $('input').on('ifChecked', function(event){
          $("#for_slideshow").removeAttr("disabled");
          ids.push($(this).val());
          // console.log(ids);
        });

        $('input').on('ifUnchecked', function(event){
          var itemtoRemove = $(this).val();
          ids.splice($.inArray(itemtoRemove, ids),1);
          // console.log(ids);

          if (ids.length === 0) {
            $("#for_slideshow").attr('disabled', true);
          }
        });
        
      });  

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