@extends('admin.layouts.layout')

@section('title', 'Tambah Gambar Slideshow')

@section('content')
    <div class="clearfix"></div>

    <div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
            <div class="x_title">
                <h2>Tambah Gambar Slideshow</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <p>Drag gambar untuk mengupload</p>
                <form method="POST" action="/admin/slideshows" class="dropzone" id="dropzone" enctype="multipart/form-data">
                    @csrf    
                {{-- <form method="POST" action="{{route('slideshows.store')}} " enctype="multipart/form-data">    
                    @csrf
                    <input type="file" name="file">
                    <input type="submit">          --}}
                </form>
            </div>
        </div>
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