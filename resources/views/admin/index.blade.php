@extends('admin.layouts.layout')

@section('title', 'Halaman Utama')

@section('content')
    {{-- Slideshow --}}
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">

            <h4>Slideshow Halaman Utama</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            
            <a href="/admin/slideshows/create/">
              <button type="button" class="btn btn-primary"> <i class="fa fa-plus"></i> Tambah Gambar</button>
            </a>
            {{-- table --}}
            <form action="/admin/slideshows/delete" method="POST">
              @csrf
              @method('DELETE')
            
              <div class="table-responsive">
                <table class="table jambo_table bulk_action">
                  <thead>
                    <tr class="headings">
                      <th>
                        <input type="checkbox" id="check-all" class="flat">
                      </th>
                      <th class="column-title">No </th>
                      <th class="column-title">Nama Gambar </th>
                      <th class="column-title">Gambar </th>
                      <th class="bulk-actions" colspan="7">
                        <a class="antoo" style="color:#fff; font-weight:500;"> ( <span class="action-cnt"> </span> )</a>
                      </th>
                    </tr>
                  </thead>

                  <tbody>
                    @foreach ($slideshows as $no => $slideshow)
                    <tr class="even pointer">
                      <td class="a-center ">
                        <input type="checkbox" class="flat" name="table_records[]" value="{{$slideshow->id}}">
                      </td>
                      <td class=" ">{{$no + 1}} </td>
                      <td class=" ">{{$slideshow->name}} </td>
                      <td class=" ">
                        <img src="images/{{$slideshow->name}}" alt="{{$slideshow->name}}" style="max-width:7em;">
                      </td>
                    </tr>    
                    @endforeach
                  </tbody>
                </table>
              </div>
              <button type="submit" id="for_slideshow" class="btn btn-danger" disabled> <i class="fa fa-trash"></i> Hapus Gambar</button>
              <p>Beri centang untuk menghapus gambar</p>
            </form>
            {{-- end table --}}
          </div>  
        </div>
      </div>
    </div>
    {{-- end Slideshow --}}

    {{-- Headmaster --}}
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h4>Sambutan Kepala Sekolah</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form action="/admin/headmaster" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')

              <p>Ubah Foto Kepala Sekolah</p>
              <img src="images/{{$kepsek->name}}" alt="foto kepala sekolah" id="upload_image" style="max-width:9em; max-height:12em;padding-bottom:10px;">
              @if ($errors->has('file'))
                  <p style="color:red">{{$errors->first('file')}} </p>
              @endif
              <input type="file" onchange="show_image.call(this)" name="file">
              <textarea class="resizable_textarea form-control" name="content" placeholder="Sambutan Kepala Sekolah...." style="margin-top:1em; margin-bottom:1em;">{{$headmaster->content}}</textarea>
              <button type="submit" class="btn btn-primary"> <i class="fa fa-pencil"></i> Ubah</button>
            </form>
          </div>  
        </div>
      </div>
    </div>
    {{-- end Head Master --}}    
    
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