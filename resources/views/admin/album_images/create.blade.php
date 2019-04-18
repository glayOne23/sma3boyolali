@extends('admin.layouts.layout')

@section('title', 'Tambah Gambar Slideshow')

@section('content')
    <div class="clearfix"></div>

    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tambah Gambar Untuk Album {{$album->name}}</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <p>Drag gambar untuk mengupload</p>
                <form method="POST" action="/admin/albums/{{$album->id}}/images" class="dropzone" id="dropzone" enctype="multipart/form-data">
                    @csrf    
                {{-- <form method="POST" action="/admin/albums/{{$album->id}}/images" enctype="multipart/form-data">    
                    @csrf
                    <input type="file" name="file">
                    <input type="submit">          --}}
                </form>
            </div>
        </div>
        <center>
            <p>Gambar akan otomatis terupload jika sudah terlihat, klik tombol kembali untuk menuju menu sebelumnya</p>
            <a href="/admin/albums/{{$album->id}} ">
                <button type="submit" class="btn btn-primary">Kembali</button>
            </a>
        </center>
    </div>
    </div>

    <script type="text/javascript">
        Dropzone.options.dropzone =
         {
            maxFilesize: 12,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
               return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            // addRemoveLinks: true,
            timeout: 5000,

            success: function(file, response) 
            {
                console.log(response);
            },
            error: function(file, response)
            {
               return false;
            }
        };
    </script>    

@endsection