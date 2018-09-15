<!-- ================================================ -->
      <div class="col-lg-3 ">
          <div class="sidebar-widget">
            <h6 class="mb-20">Buscar</h6>
              <div class="widget-search">
                  <i class="fa fa-search"></i>
                  <input type="search" class="form-control" placeholder="Buscar...." />
                </div>
          </div>
          <div class="sidebar-widget">
             <h6 class="mt-40 mb-20">Acerca del Blog</h6>
             <p>We are the <strong> webster </strong> dolor sit ametLorem Ipsum Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, <br/> <br/>
              Consequat ipsum, nec sagittis sem nibh id elit nibh vel velit auctor aliquet. sem nibh  Aenean sollicitudin, </p>
          </div>
        <div class="sidebar-widget clearfix">
          <h6 class="mt-40 mb-20">Categorias</h6>
          <ul class="widget-categories">
            @foreach ($categories as $category)
                <li>
                  <a href="{{ route('blog.category', $category->slug) }}">
                    <i class="fa fa-angle-double-right"></i> {{ $category->title }}
                    <span class="badge pull-right badge-pill badge-primary">{{ $category->posts->count() }}</span>
                </a>
                </li>
            @endforeach

          </ul>
      </div>
        <div class="sidebar-widget">
            <h6 class="mt-40 mb-20">Recent Posts </h6>
            <div class="recent-post clearfix">
              <div class="recent-post-image">
                <img class="img-fluid" src="/frontend/images/blog/01.jpg" alt="">
              </div>
             <div class="recent-post-info">
              <a href="#">Nibh vel velit auctor aliquet. sem nibh Aenean</a>
              <span><i class="fa fa-calendar-o"></i> September 30, 2018</span>
             </div>
            </div>
            <div class="recent-post clearfix">
              <div class="recent-post-image">
                <img class="img-fluid" src="/frontend/images/blog/02.jpg" alt="">
              </div>
             <div class="recent-post-info">
              <a href="#">Nibh vel velit auctor aliquet. sem nibh Aenean</a>
              <span><i class="fa fa-calendar-o"></i> September 30, 2018</span>
             </div>
            </div>
            <div class="recent-post clearfix">
              <div class="recent-post-image">
                <img class="img-fluid" src="/frontend/images/blog/03.jpg" alt="">
              </div>
             <div class="recent-post-info">
              <a href="#">Nibh vel velit auctor aliquet. sem nibh Aenean</a>
              <span><i class="fa fa-calendar-o"></i> September 30, 2018</span>
             </div>
            </div>
        </div>
        <div class="sidebar-widget clearfix">
          <h6 class="mt-40 mb-20">Archives</h6>
          <ul class="widget-categories">
            <li><a href="#"><i class="fa fa-angle-double-right"></i> December 2018</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> November 2018</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> October 2018</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2018</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> August 2018</a></li>
          </ul>
      </div>
      <div class="sidebar-widget">
       <h6 class="mt-40 mb-20">Tags</h6>
        <div class="widget-tags">
         <ul>
          <li><a href="#">Bootstrap</a></li>
          <li><a href="#">HTML5</a></li>
          <li><a href="#">Wordpress</a></li>
          <li><a href="#">CSS3</a></li>
          <li><a href="#">Creative</a></li>
          <li><a href="#">Multipurpose</a></li>
          <li><a href="#">Bootstrap</a></li>
          <li><a href="#">HTML5</a></li>
          <li><a href="#">Wordpress</a></li>
        </ul>
      </div>
     </div>
      <div class="sidebar-widget">
          <h6 class="mt-40 mb-20">Meta</h6>
          <ul class="widget-categories">
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Log in</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Entries RSS</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> Comments RSS </a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> September 2018</a></li>
            <li><a href="#"><i class="fa fa-angle-double-right"></i> WordPress.org</a></li>
          </ul>
      </div>
      <div class="sidebar-widget">
         <h6 class="mt-40 mb-20">Suscribete</h6>
          <div class="widget-newsletter">
          <div class="newsletter-icon">
            <i class="fa fa-envelope-o"></i>
          </div>
          <div class="newsletter-content">
            <i>
              Manténgase informado sobre nuestras últimas noticias del blog. Ingrese su correo electrónico y suscríbase a nuestro sistema blog.</i>
          </div>
          <div class="newsletter-form mt-20">
              <div class="form-group">
                  <input type="email" class="form-control" placeholder="Joedoe@gmail.com">
              </div>
             <a class="button btn-block" href="#">subscribir</a>
          </div>
        </div>
       </div>
    </div>
<!-- ================================= -->
