
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="keywords" content="Jehova Reina Blog" />
<meta name="description" content="Este es el blog de Jehova Reina" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<title>Jehova Reina | Blog</title>

<!-- Favicon -->
<link rel="shortcut icon" href="images/favicon.ico" />

<!-- font -->
<link  rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,500,500i,600,700,800,900|Poppins:200,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900">

<!-- Plugins -->
<link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/plugins-css.css') }}" />

<!-- Typography -->
<link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/typography.css') }}" />

<!-- Shortcodes -->
<link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/shortcodes/shortcodes.css') }}" />

<!-- Style -->
<link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/style.css') }}" />

<!-- Responsive -->
<link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/responsive.css') }}" />

<!-- Style customizer -->
<link rel="stylesheet" type="text/css" href="#" data-style="styles"/>
<link rel="stylesheet" type="text/css" href="{{ asset('/frontend/css/style-customizer.css') }}" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'../../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-557RCPW');</script>
<!-- End Google Tag Manager -->

</head>

<body>


<div class="wrapper">

<!--=================================
 preloader -->

{{-- <div id="pre-loader">
    <img src="/frontend/images/pre-loader/loader-01.svg" alt="">
</div> --}}

<!--=================================
 preloader -->

@include('layouts.frontend.partials.header')


        @yield('content')



<!--=================================
action box- -->
<section class="action-box theme-bg full-width">
  <div class="container">
    <div class="row">
     <div class="col-lg-12 col-md-12">
       <div class="action-box-text">
        <h3><strong> Webster: </strong> The most powerful template ever on the market</h3>
        <p>Create tailor-cut websites with the exclusive multi-purpose responsive template along with powerful features.</p>
      </div>
      <div class="action-box-button">
        <a class="button button-border white" href="#">
          <span>Purchase Now</span>
          <i class="fa fa-download"></i>
       </a>
     </div>
    </div>
  </div>
 </div>
</section>

<!--=================================
action box- -->

@include('layouts.frontend.partials.footer')

<div id="back-to-top"><a class="top arrow" href="#top">
  <i class="fa fa-angle-up"></i> <span>Arriba</span></a>
</div>



<!--=================================
 jquery -->

<!-- jquery -->
<script src="/frontend/js/jquery-3.3.1.min.js"></script>

<!-- plugins-jquery -->
<script src="/frontend/js/plugins-jquery.js"></script>

<!-- plugin_path -->
<script>var plugin_path = '/frontend/js/index.html';</script>

<!-- Style Customizer -->
<script src="/frontend/js/style-customizer.min.js"></script>

<!-- custom -->
<script src="/frontend/js/custom.js"></script>



</body>

</html>
