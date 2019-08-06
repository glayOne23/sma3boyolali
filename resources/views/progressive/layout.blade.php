<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  {{-- <script language="JavaScript">
        var txt="SMA Negeri 3 Surakarta ";
      var kecepatan=75;var segarkan=null;function bergerak() { document.title=txt;
      txt=txt.substring(1,txt.length)+txt.charAt(0);
      segarkan=setTimeout("bergerak()",kecepatan);}bergerak();
  </script> --}}
  <meta name="keywords" content="SMAN 3 BOYOLALI">
  <meta name="description" content="SMAN 3 Boyolali">
  <meta name="author" content="">
  <meta class="viewport" name="viewport" content="">
  <meta http-equiv="X-UA-Compatible" content="">

  <!-- Favicon -->
  <link rel="shortcut icon" href="img/favicon.ico">
  
  <!-- Font -->
  <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Arimo:400,700,400italic,700italic'>

  <!-- Plugins CSS -->
  <link rel="stylesheet" href="/progressive/css/bootstrap.css">
	<link rel="stylesheet" href="/progressive/css/font-awesome.min.css">
  <link rel="stylesheet" href="/progressive/css/jslider.css">
  <link rel="stylesheet" href="/progressive/css/revslider/settings.css">
  <link rel="stylesheet" href="/progressive/css/jquery.fancybox.css">
  <link rel="stylesheet" href="/progressive/css/animate.css">
  <link rel="stylesheet" href="/progressive/css/video-js.min.css">
  <link rel="stylesheet" href="/progressive/css/morris.css">
  <link rel="stylesheet" href="/progressive/css/royalslider/royalslider.css">
  <link rel="stylesheet" href="/progressive/css/royalslider/skins/minimal-white/rs-minimal-white.css">
  <link rel="stylesheet" href="/progressive/css/layerslider//progressive/css/layerslider.css">
  <link rel="stylesheet" href="/progressive/css/ladda.min.css">
  <link rel="stylesheet" href="/progressive/css/datepicker.css">
  <link rel="stylesheet" href="/progressive/css/jquery.scrollbar.css">
  
  <!-- Theme CSS -->
  <link rel="stylesheet" href="/progressive/css/style.css">
  
  <!-- Custom CSS -->
  <link rel="stylesheet" href="/progressive/css/customizer/pages.css">
  <link rel="stylesheet" href="/progressive/css/customizer/pages-pages-customizer.css">

  <!-- IE Styles-->
  <link rel='stylesheet' href="/progressive/css/ie/ie.css">
  
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond./progressive/js/1.4.2/respond.min.js"></script>
		<link rel='stylesheet' href="/progressive/css/ie/ie8.css">
  <![endif]-->
</head>
<body  class="fixed-header">
	<div class="page-box">
		<div class="page-box-content">

			@include('progressive.header')

      @yield('slideshow')
  
			<section id="main">
          @yield('content')
			</section>

		</div><!-- .page-box-content -->
	</div><!-- .page-box -->

@include('progressive.footer')

<div class="clearfix"></div>

<!--[if (!IE)|(gt IE 8)]><!-->
  <script src="/progressive/js/jquery-3.0.0.min.js"></script>
<!--<![endif]-->

<!--[if lte IE 8]>
  <script src="/progressive/js/jquery-1.9.1.min.js"></script>
<![endif]-->
<script src="/progressive/js/bootstrap.min.js"></script>
<script src="/progressive/js/price-regulator/jshashtable-2.1_src.js"></script>
<script src="/progressive/js/price-regulator/jquery.numberformatter-1.2.3.js"></script>
<script src="/progressive/js/price-regulator/tmpl.js"></script>
<script src="/progressive/js/price-regulator/jquery.dependClass-0.1.js"></script>
<script src="/progressive/js/price-regulator/draggable-0.1.js"></script>
<script src="/progressive/js/price-regulator/jquery.slider.js"></script>
<script src="/progressive/js/jquery.carouFredSel-6.2.1-packed.js"></script>
<script src="/progressive/js/jquery.touchwipe.min.js"></script>
<script src="/progressive/js/jquery.elevateZoom-3.0.8.min.js"></script>
<script src="/progressive/js/jquery.imagesloaded.min.js"></script>
<script src="/progressive/js/jquery.appear.js"></script>
<script src="/progressive/js/jquery.sparkline.min.js"></script>
<script src="/progressive/js/jquery.easypiechart.min.js"></script>
<script src="/progressive/js/jquery.easing.1.3.js"></script>
<script src="/progressive/js/jquery.fancybox.pack.js"></script>
<script src="/progressive/js/isotope.pkgd.min.js"></script>
<script src="/progressive/js/jquery.knob.js"></script>
<script src="/progressive/js/jquery.selectBox.min.js"></script>
<script src="/progressive/js/jquery.royalslider.min.js"></script>
<script src="/progressive/js/jquery.tubular.1.0.js"></script>
<script src="/progressive/js/SmoothScroll.js"></script>
<script src="/progressive/js/country.js"></script>
<script src="/progressive/js/spin.min.js"></script>
<script src="/progressive/js/ladda.min.js"></script>
<script src="/progressive/js/masonry.pkgd.min.js"></script>
<script src="/progressive/js/morris.min.js"></script>
<script src="/progressive/js/raphael.min.js"></script>
<script src="/progressive/js/video.js"></script>
<script src="/progressive/js/pixastic.custom.js"></script>
<script src="/progressive/js/livicons-1.4.min.js"></script>
<script src="/progressive/js/layerslider/greensock.js"></script>
<script src="/progressive/js/layerslider/layerslider.transitions.js"></script>
<script src="/progressive/js/layerslider/layerslider.kreaturamedia.jquery.js"></script>
<script src="/progressive/js/revolution/jquery.themepunch.tools.min.js"></script>
<script src="/progressive/js/revolution/jquery.themepunch.revolution.min.js"></script>
<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
	(Load Extensions only on Local File Systems !
	The following part can be removed on Server for On Demand Loading) -->	
  <script src="/progressive/js/revolution/extensions/revolution.extension.actions.min.js"></script>
  <script src="/progressive/js/revolution/extensions/revolution.extension.carousel.min.js"></script>
  <script src="/progressive/js/revolution/extensions/revolution.extension.kenburn.min.js"></script>
  <script src="/progressive/js/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
  <script src="/progressive/js/revolution/extensions/revolution.extension.migration.min.js"></script>
  <script src="/progressive/js/revolution/extensions/revolution.extension.navigation.min.js"></script>
  <script src="/progressive/js/revolution/extensions/revolution.extension.parallax.min.js"></script>
  <script src="/progressive/js/revolution/extensions/revolution.extension.slideanims.min.js"></script>
  <script src="/progressive/js/revolution/extensions/revolution.extension.video.min.js"></script>
<script src="/progressive/js/bootstrapValidator.min.js"></script>
<script src="/progressive/js/bootstrap-datepicker.js"></script>
<script src="/progressive/js/jplayer/jquery.jplayer.min.js"></script>
<script src="/progressive/js/jplayer/jplayer.playlist.min.js"></script>
<script src="/progressive/js/jquery.scrollbar.min.js"></script>
<script src="/progressive/js/main.js"></script>

</body>
</html>