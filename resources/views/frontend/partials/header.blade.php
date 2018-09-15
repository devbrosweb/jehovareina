
<!--=================================
 header -->

<header id="header" class="header default">
  <div class="topbar">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 xs-mb-10">

      </div>
      <div class="col-lg-6 col-md-6">
        <div class="topbar-social text-center text-md-right">
          <ul>
            <li><a href="#"><span class="ti-facebook"></span></a></li>
            <li><a href="#"><span class="ti-instagram"></span></a></li>
            <li><a href="#"><span class="ti-google"></span></a></li>
          </ul>
        </div>
      </div>
     </div>
  </div>
</div>

<!--=================================
 mega menu -->

<div class="menu">
  <!-- menu start -->
   <nav id="menu" class="mega-menu">
    <!-- menu list items container -->
    <section class="menu-list-items">
     <div class="container">
      <div class="row">
       <div class="col-lg-12 col-md-12">
        <!-- menu logo -->
        <ul class="menu-logo">
            <li>

                {{--  CAMBIAR ESTE LINK --}}
                <a href="{{ route('blog.index')}}">
                  <h1 class="text-white">Jehova Reina</h1>
                </a>
            </li>
        </ul>
        <!-- menu links -->
        <div class="menu-bar">
         <ul class="menu-links">

         <li>
           <a href="{{ route('blog.index')}}">Inicio</a>
          </li>

            <li>
              <a href="#">Historia</a>
            </li>
            <li>
              <a href="#">Soy Nuevo</a>
            </li>
            <li>
              <a href="#">blog</a>
            </li>
            <li>
              <a href="#">Galería</a>
            </li>
            <li>
              <a href="#">Contacto</a>
            </li>
        </ul>

        </div>
       </div>
      </div>
     </div>
    </section>
   </nav>
  <!-- menu end -->
 </div>
</header>

<!--=================================
 header -->


<!--=================================
page-title-->

<section class="page-title bg-overlay-black-60 parallax" data-jarallax='{"speed": 0.6}'
 style="background-image: url({{ asset('/frontend/images/bg/02.jpg') }} )">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
      <div class="page-title-name">
          <h1>Bienvenido a nuestra blog</h1>
          <p>Breve descripción sobre el blog</p>
        </div>
          <ul class="page-breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Inicio</a> <i class="fa fa-angle-double-right"></i></li>
            <li><a href="#">Blog</a> </i></li
       </ul>
     </div>
   </div>
  </div>
</section>
<!--=================================
page-title -->
