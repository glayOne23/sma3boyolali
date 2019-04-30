@extends('admin.layouts.layout')

@section('title', 'Ubah Berita')

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
            <h4>Ubah Berita</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            
            <form class="form-horizontal form-label-left" action="{{ route('blogs.update',['blog' => $blog->id]) }}" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="form-group">
                <div class="col-md-12 col-sm-12 col-xs-12 form-group">
                  
                  {{-- nama blog --}}
                  <label for="name">Judul Berita</label>
                  <input type="text" id="title" class="form-control {{$errors->has('title') ? 'border-red' : ''}}" name="title" placeholder="judul berita..." value="{{$blog->title}}" >
                  @if ($errors->has('title'))
                  <p style="color:red; margin-top:1em">{{$errors->first('title')}} </p>
                  @endif
                  
                  {{-- photo blog   --}}
                  <label for="upload_image" style="margin-top:2em;">Foto Berita</label> <br>
                  <img src="/images/{{$blog->photo}}" id="upload_image" style="max-width:9em; max-height:12em;padding-bottom:10px;">
                  <input type="file" onchange="show_image.call(this)" name="file">  
                    @if ($errors->has('file'))
                      <p style="color:red">{{$errors->first('file')}} </p>
                    @endif
                    
                  {{-- Isi Berita   --}}
                  <label for="blog" style="margin-top:2em;">Isi Berita</label>  
                  <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                      <ul class="dropdown-menu">
                      </ul>
                    </div>

                    <div class="btn-group">
                      <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li>
                          <a data-edit="fontSize 5">
                            <p style="font-size:17px">Huge</p>
                          </a>
                        </li>
                        <li>
                          <a data-edit="fontSize 3">
                            <p style="font-size:14px">Normal</p>
                          </a>
                        </li>
                        <li>
                          <a data-edit="fontSize 1">
                            <p style="font-size:11px">Small</p>
                          </a>
                        </li>
                      </ul>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                      <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                      <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                      <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                      <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                      <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                      <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                      <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                      <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                      <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                    </div>

                    <div class="btn-group">
                      <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                      <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                    </div>
                  </div>

                  <div id="editor-one" class="editor-wrapper">{!! $blog->content !!}</div>

                  <textarea name="content" id="content" style="display:none;"></textarea>
                  
                  <br />
                  @if ($errors->has('content'))
                    <p style="color:red">{{$errors->first('content')}} </p>
                  @endif

                  <div class="ln_solid"></div>

                  {{-- <input type="hidden" name="type" value="berita" > --}}

                  {{-- end isi berita --}}
                
                  <center>  
                    <button type="submit" id="upload_blog" class="btn btn-primary" style="margin-top:1em;"><i class="fa fa-upload"></i>  Upload</button>  
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

  $('#upload_blog').click(function(){
    
    $('#content').html(
        $("#editor-one").html()
    );
  });
</script>
@endsection