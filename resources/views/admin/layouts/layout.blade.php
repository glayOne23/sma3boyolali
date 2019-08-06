<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link href="/gentelella/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/gentelella/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/gentelella/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="/gentelella/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
     <!-- iCheck-->
    <link href="/gentelella/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Dropzone.js -->
    <link href="/gentelella/vendors/dropzone/dist/min/dropzone.min.css" rel="stylesheet">
    <script src="/gentelella/vendors/dropzone/dist/min/dropzone.min.js"></script>
    <!-- jQuery -->
    <script src="/gentelella/vendors/jquery/dist/jquery.min.js"></script>

    {{-- tinymce --}}
    <script src="/js/tinymce/tinymce.min.js"></script>
    <script type="text/javascript">
      // tinymce.init({
      //   selector: '#mytextarea',
      //   height: 350,
      //   plugins: [
      //     'advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker',
      //     'searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking',
      //     'save table contextmenu directionality emoticons template paste textcolor'
      //   ],
      //   content_css: '/interior/css/main.css',
      //   toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
        
      //   image_title: true,
      //   automatic_uploads: true,
      //   images_upload_url: '/upload',
      //   file_picker_types: 'file image media',

      //   file_picker_callback: function(cb, value, meta) {
      //     // Provide file and text for the link dialog
      //     if (meta.filetype == 'file') {
      //       callback('mypage.html', {text: 'My text'});
      //     }

      //     // Provide image and alt text for the image dialog
      //     if (meta.filetype == 'image') {
      //       var input = document.createElement('input');
      //       input.setAttribute('type', 'file');
      //       input.setAttribute('accept', 'image/*');
      //       input.onchange = function() {
      //           var file = this.files[0];

      //           var reader = new FileReader();
      //           reader.readAsDataURL(file);
      //           reader.onload = function () {
      //               var id = 'blobid' + (new Date()).getTime();
      //               var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
      //               var base64 = reader.result.split(',')[1];
      //               var blobInfo = blobCache.create(id, file, base64);
      //               blobCache.add(blobInfo);
      //               cb(blobInfo.blobUri(), { title: file.name });
      //           };
      //       };
      //       input.click();
      //     }

      //     // Provide alternative source and posted for the media dialog
      //     if (meta.filetype == 'media') {
      //       callback('movie.mp4', {source2: 'alt.ogg', poster: 'image.jpg'});
      //     }
      //   }

      // });
      var editor_config = {
        path_absolute : "/",
        selector: "#mytextarea",
        height: 500,
        plugins: [
          "advlist autolink lists link image charmap print preview hr anchor pagebreak",
          "searchreplace wordcount visualblocks visualchars code fullscreen",
          "insertdatetime media nonbreaking save table contextmenu directionality",
          "emoticons template paste textcolor colorpicker textpattern"
        ],
        content_css: '/interior/css/main.css',
        // toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        toolbar: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons',
        relative_urls: false,
        file_browser_callback : function(field_name, url, type, win) {
          var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
          var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

          var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
          if (type == 'image') {
            cmsURL = cmsURL + "&type=Images";
          } else {
            cmsURL = cmsURL + "&type=Files";
          }

          tinyMCE.activeEditor.windowManager.open({
            file : cmsURL,
            title : 'Filemanager',
            width : x * 0.8,
            height : y * 0.8,
            resizable : "yes",
            close_previous : "no"
          });
        }
      };

      tinymce.init(editor_config);
    </script>
      
    <!-- bootstrap-wysiwyg -->
    <link href="/gentelella/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- bootstrap-datetimepicker -->
    <link href="/gentelella/vendors/bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="/gentelella/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/gentelella/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/gentelella/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/gentelella/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/gentelella/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="/gentelella/build/css/custom.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

        @include('admin.layouts.sidebar')

        @include('admin.layouts.header')

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            @yield('content')
          </div>
        </div>
        <!-- /page content -->

        @include('admin.layouts.footer')
        
      </div>
    </div>

    <!-- jQuery -->
    <script src="/gentelella/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/gentelella/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/gentelella/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/gentelella/vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="/gentelella/vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- iCheck -->
    <script src="/gentelella/vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="/gentelella/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="/gentelella/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="/gentelella/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/gentelella/vendors/moment/min/moment.min.js"></script>
    <script src="/gentelella/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-datetimepicker -->    
    <script src="/gentelella/vendors/bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <!-- Datatables -->
    <script src="/gentelella/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/gentelella/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="/gentelella/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/gentelella/build/js/custom.js"></script>

        <!-- Initialize datetimepicker -->
    <script>
      $('#myDatepicker').datetimepicker();
      
      $('#myDatepicker4').datetimepicker({
          format: 'YYYY-MM-DD',
          ignoreReadonly: true,
          allowInputToggle: true
      });
    </script>
  </body>
</html>