@extends('admin.layouts.layout')

@section('title', 'Ubah Link Website')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
            <h4>Ubah Link Webiste</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            
            <form class="form-horizontal form-label-left" action="{{ route('related_links.update',['related_link' => $related_link->id]) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  
                  {{-- nama related_link --}}
                  <label for="name">Nama Link Website</label>
                  <input type="text" id="title" class="form-control {{$errors->has('title') ? 'border-red' : ''}}" name="title" placeholder="judul berita..." value="{{$related_link->title}}" >
                  @if ($errors->has('title'))
                  <p style="color:red; margin-top:1em">{{$errors->first('title')}} </p>
                  @endif
                  {{-- end nama related link --}}
                  
                  {{-- photo related_link   --}}
                  <label for="upload_image" style="margin-top:2em;">Foto Link Webiste</label> <br>
                  <img src="/images/{{$related_link->image}}" id="upload_image" style="max-width:9em; max-height:12em;padding-bottom:10px;">
                  <input type="file" onchange="show_image.call(this)" name="file">  
                    @if ($errors->has('file'))
                      <p style="color:red">{{$errors->first('file')}} </p>
                    @endif
                    
                  {{-- nama related_link --}}
                  <label for="name">Link Website</label>
                  <input type="text" id="link" class="form-control {{$errors->has('link') ? 'border-red' : ''}}" name="link" placeholder="link website(misal https://)..." value="{{$related_link->link}}" >
                  @if ($errors->has('link'))
                  <p style="color:red; margin-top:1em">{{$errors->first('link')}} </p>
                  @endif
                  {{-- end nama related link --}}
                
                  <center>  
                    <button type="submit" id="upload_related_link" class="btn btn-primary" style="margin-top:1em;"><i class="fa fa-upload"></i>  Upload</button>  
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

  $('#upload_related_link').click(function(){
    
    $('#content').html(
        $("#editor-one").html()
    );
  });
</script>
@endsection