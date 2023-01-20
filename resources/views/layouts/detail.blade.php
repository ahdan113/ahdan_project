<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Eflyer</title> 
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets1/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('assets1/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('assets1/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/{{ asset('assets1/css/font-awesome.css') }}">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
      <!-- font awesome -->
      <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--  -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
      <!-- owl stylesheets -->
      <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Poppins:400,700&display=swap&subset=latin-ext" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('assets1/css/owl.carousel.min.css') }}">
      <link rel="stylesoeet" href="{{ asset('assets1/css/owl.theme.default.min.css') }}">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!-- banner bg main start -->
      <div class="banner_bg_main">
         <!-- header top section start -->
         
         @include('layouts.components.navbar_user');
         <!-- header top section start -->
         <!-- logo section start -->
         <div class="logo_section">
            <div class="container">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="logo"><a href="index.html"><img src="{{ asset('assets1/images/logo.png') }}"></a></div>
                  </div>
               </div>
            </div>
         </div>
         <!-- logo section end -->

         <!-- header section start -->
         <!-- sidebar -->
         @include('layouts.components.sidenav_user');
         <!-- header section end -->
         <!-- end sidebar -->
         <!-- banner section start -->
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Mulai Berbelanja <br>produk impian anda</h1>
                              <div class="buynow_bt"><a href="https://shopee.co.id/silviaptrn?utm_content=4Vs6MRCinfNoDL7Ub4qCxQ7Viq5q">Beli Sekarang</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Mulai Berbelanja <br>produk impian anda</h1>
                              <div class="buynow_bt"><a href="https://shopee.co.id/silviaptrn?utm_content=4Vs6MRCinfNoDL7Ub4qCxQ7Viq5q">Beli Sekarang</a></div>
                           </div>
                        </div>
                     </div>
                     <div class="carousel-item">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Mulai Berbelanja <br>produk impian anda</h1>
                              <div class="buynow_bt"><a href="https://shopee.co.id/silviaptrn?utm_content=4Vs6MRCinfNoDL7Ub4qCxQ7Viq5q">Beli Sekarang</a></div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->
      <!-- fashion section start -->

     <!-- barang -->
     @include('layouts.components.produk');
     <!-- end barang -->

      <!-- fashion section end -->

      <!-- electronic section start -->
      <!-- electronic section end -->

      <!-- jewellery  section start -->
      <!-- jewellery  section end -->

      <!-- footer section start -->
      <div class="footer_section layout_padding">
         <div class="container">
            <div class="footer_logo"><a href="index.html"><img src="{{ asset('assets1/images/footer-logo.png') }}"></a></div>
            <div class="location_main">WhatsApp : <a href="#">+62 895-6758-9090</a></div>
         </div>
      </div>
      <!-- footer section end -->
      <!-- copyright section start -->
      <div class="copyright_section">
         <div class="container">
            <p class="copyright_text">© 2020 Di Desain Oleh <a href="">Ahdan Khoerul Aziz</a></p>
         </div>
      </div>
      <!-- copyright section end -->
      <!-- Javascript files-->
      <script src="{{ asset('assets1/js/jquery.min.js') }}"></script>
      <script src="{{ asset('assets1/js/popper.min.js') }}"></script>
      <script src="{{ asset('assets1/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('assets1/js/jquery-3.0.0.min.js') }}"></script>
      <script src="{{ asset('assets1/js/plugin.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('assets1/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('assets1/js/custom.js') }}"></script>
      <script>
         function openNav() {
           document.getElementById("mySidenav").style.width = "250px";
         }
         
         function closeNav() {
           document.getElementById("mySidenav").style.width = "0";
         }
      </script>
   </body>
   <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/63bf844647425128790cfb13/1gmi1pd6i';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</html>