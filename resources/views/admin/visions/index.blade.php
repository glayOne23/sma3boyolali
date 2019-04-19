@extends('admin.layouts.layout')

@section('title', 'Ubah Visi Misi')

@section('content')
  <form action="/admin/visions" method="post">
  @csrf
  @method('PUT')
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          {{-- vision --}}
          <div class="x_title">
            <h4>Visi Sekolah</h4>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <div id="alerts"></div>
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

            <div id="editor-one" class="editor-wrapper">{!! $vision_mission->vision !!} </div>

            <textarea name="vision" id="vision" style="display:none;"></textarea>
            
            <br />
            @if ($errors->has('vision'))
              <p style="color:red">{{$errors->first('vision')}} </p>
            @endif

            <div class="ln_solid"></div>
          </div>
          {{-- end vision --}}

          {{-- mission --}}
          <div class="x_title">
              <h4>Misi Sekolah</h4>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <div id="alerts"></div>
              <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-two">
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
  
              <div id="editor-two" class="editor-wrapper">{!! $vision_mission->mission !!}</div>
  
              <textarea name="mission" id="mission" style="display:none;"></textarea>
              
              <br />
              @if ($errors->has('mission'))
                <p style="color:red">{{$errors->first('mission')}} </p>
              @endif
  
              <div class="ln_solid"></div>
            </div>
            {{-- end mission --}}
            <center>
              <button type="submit" id="input_vision_mission" class="btn btn-success"> <i class="fa fa-pencil"></i> Ubah Visi Misi</button>
            </center>
        </div>
      </div>
    </div>
  </form>

  <script>
    $('#input_vision_mission').click(function(){
      
      $('#vision').html(
          $("#editor-one").html()
      );

      $('#mission').html(
          $("#editor-two").html()
      );

    });
  </script>
@endsection