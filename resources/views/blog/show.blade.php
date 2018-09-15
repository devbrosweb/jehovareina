
@extends('frontend.app')


@section('content')
<!--=================================
 Blog-->

<section class="blog blog-single white-bg page-section-ptb">
  <div class="container">
    <div class="row">
      <div class="col-lg-9">
        <div class="entry-title mb-10">
            <h2>{{ $post->title }}</h2>
        </div>
       <div class="blog-entry mb-10">
         @if($post->image_url)
            <div class="entry-image clearfix">
              <img class="img-fluid" src="{{ $post->image_url }}" alt="">
            </div>
          @endif
          <div class="blog-detail">
              <div class="entry-meta mb-10">
                  <ul>
                      <li> <i class="fa fa-user-o"></i> <a href="#">{{ $post->author->name }}</a></li>
                      <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                      <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                      <li><a href="#"><i class="fa fa-calendar-o"></i> {{ $post->date }}</li>
                  </ul>
              </div>
              <div class="entry-content">
                  <p>{{ $post->body }}</p>

                  <div class="entry-share clearfix">
                        <div class="tags">
                           <h5>Etiquetas:</h5>
                           <ul>
                             <li><a href="#">Design</a></li>
                             <li><a href="#">Creative</a></li>
                             <li><a href="#">HTML5</a></li>
                           </ul>
                       </div>
                         <div class="social list-style-none float-right mt-10">
                             <strong>Compartir : </strong>
                             <ul>
                                 <li>
                                     <a href="#"> <i class="fa fa-facebook"></i> </a>
                                 </li>
                                 <li>
                                     <a href="#"> <i class="fa fa-twitter"></i> </a>
                                 </li>
                                 <li>
                                     <a href="#"> <i class="fa fa-pinterest-p"></i> </a>
                                 </li>
                                 <li>
                                     <a href="#"> <i class="fa fa-dribbble"></i> </a>
                                 </li>
                             </ul>
                         </div>
                     </div>
              </div>
          </div>
          <!-- ================================================ -->
          <div class="port-navigation clearfix">
               <div class="port-navigation-left float-left">
                 <div class="tooltip-content-3" data-original-title="Previous Project" data-toggle="tooltip" data-placement="right">
                 <a href="#">
                  <div class="port-photo float-left">
                    <img src="/frontend/images/portfolio/01.jpg" alt="">
                   </div>
                   <div class="port-arrow">
                    <i class="fa fa-angle-left"></i>
                   </div>
                   </a>
                  </div>
               </div>
               <div class="port-navigation-right float-right">
                 <div class="tooltip-content-3" data-original-title="Next Project" data-toggle="tooltip" data-placement="left">
                 <a href="#">
                   <div class="port-arrow float-left">
                    <i class="fa fa-angle-right"></i>
                   </div>
                   <div class="port-photo">
                    <img src="/frontend/images/portfolio/02.jpg" alt="">
                   </div>
                  </a>
                 </div>
               </div>
            </div>

          <!-- ================================================ -->
          <div class="port-post clearfix mt-40">
          <div class="port-post-photo">
          <img src="/frontend/images/team/01.jpg" alt="">
          </div>
          <div class="port-post-info">
          <h3 class="theme-color"><span>Escrito por: </span>{{ $post->author->name }}</h3>
          <div class="port-post-social float-right">
            <strong>Sigueme en:</strong>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
          </div>
          <p>Proin gravida nibh vel velit auctor aliquet lorem ipsum dolor sit amet of Lorem Ipsum. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat </p>
          </div>
          </div>
          <!-- ================================================ -->

       </div>

	      </div>

        {{-- sidebar --}}
        @include('frontend.partials.sidebar')
    </div>
   </div>
  </section>

@endsection
