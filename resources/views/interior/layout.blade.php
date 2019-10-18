<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
    <meta name="author" content="colorlib">
    <meta class="viewport" name="viewport" content="">
    <meta http-equiv="X-UA-Compatible" content="">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="/interior/css/linearicons.css">
        <link rel="stylesheet" href="/interior/css/font-awesome.min.css">
        <link rel="stylesheet" href="/interior/css/bootstrap.css">
        <link rel="stylesheet" href="/interior/css/magnific-popup.css">
        <link rel="stylesheet" href="/interior/css/nice-select.css">							
        <link rel="stylesheet" href="/interior/css/animate.min.css">
        <link rel="stylesheet" href="/interior/css/owl.carousel.css">
        <link rel="stylesheet" href="/interior/css/main.css">

        <style>
            .banner-area{background:url(@yield('bgutama'));background-size:cover}
            .callto-action-wrap{
                background:-webkit-linear-gradient(rgba(0,0,0,0.0), 
                rgba(0,0,0,0.0)),
                url(@yield('bgkepsek')) center;
                background:-o-linear-gradient(rgba(0,0,0,0.0), 
                rgba(0,0,0,0.0)),
                url(@yield('bgkepsek')) center;
                background:linear-gradient(rgba(0,0,0,0.0), 
                rgba(0,0,0,0.0)),url(@yield('bgkepsek')) center;
                background-size:cover;border-radius:10px;
                text-align:center;
                color:#fff}
        </style>
    </head>
    <body @yield('body')>	

        @include('interior.header')
        
        @yield('content')			

        @include('interior.footer')

        <script src="/interior/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper./interior/js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="/interior/js/vendor/bootstrap.min.js"></script>			
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
          <script src="/interior/js/easing.min.js"></script>			
        <script src="/interior/js/hoverIntent.js"></script>
        <script src="/interior/js/superfish.min.js"></script>	
        <script src="/interior/js/jquery.ajaxchimp.min.js"></script>
        <script src="/interior/js/jquery.magnific-popup.min.js"></script>	
        <script src="/interior/js/owl.carousel.min.js"></script>						
        <script src="/interior/js/jquery.nice-select.min.js"></script>							
        <script src="/interior/js/mail-script.js"></script>	
        <script src="/interior/js/main.js"></script>	
    </body>
</html>