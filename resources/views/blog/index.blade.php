@extends('frontend.app')

@section('content')

<!--=================================
 Blog-->
 <section class="page-sidebar page-section-ptb">
   <div class="container">
     <div class="row">
 <div class="col-lg-9">
   <!--=================================
    Post -->
    @foreach ($posts as $post)
      <div class="blog-entry mb-50">

        @if($post->image_url)
          <div class="entry-image clearfix">
              <img class="img-fluid" src="{{ $post->image_url }}" alt="">
          </div>
        @endif

        <div class="blog-detail">
            <div class="entry-title mb-10">
                <a href="{{ asset(route('blog.show', $post)) }}">{{ $post->title }}</a>
            </div>
            <div class="entry-meta mb-10">
                <ul>
                  <li> <i class="fa fa-user-o"></i> <a href="#">{{ $post->author->name }}</a></li>
                    <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a href="#"> HTML5 </a> </li>
                    <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                    <li><a href="#"><i class="fa fa-calendar-o"></i> {{ $post->date }}</a></li>
                </ul>
            </div>
            <div class="entry-content">
                <p>{{ $post->excerpt }}</p>
            </div>
            <div class="entry-share clearfix">
                <div class="entry-button">
                    <a class="button arrow" href="{{ asset(route('blog.show', $post)) }}">Continuar Leyendo<i class="fa fa-angle-right" aria-hidden="true"></i></a>
                </div>
                <div class="social list-style-none float-right">
                    <strong>Share : </strong>
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
    @endforeach
      <!-- ================================================ -->
      {{-- <div class="entry-pagination mb-40">
        <nav aria-label="Page navigation example text-center">
        <ul class="pagination justify-content-center"> --}}
          {{ $posts->links() }}
        {{-- </ul>
      </nav>
      </div> --}}
   </div>

   {{-- sidebar --}}
   @include('frontend.partials.sidebar')

 </div>
</div>
</section>

@endsection
