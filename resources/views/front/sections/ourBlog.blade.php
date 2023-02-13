<section class="our-blog bgc-f7 pb30">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="main-title text-center">
            <h2>Articles & Tips</h2>
            <p>Read latest articles that related to realestate in Turkey.</p>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-6 col-lg-4 col-xl-4">
          <div class="for_blog feat_property">
            <div class="thumb">
              <a href="#">
                <img class="img-whp" src="{{asset('assets/admin/images/posts/'. $post->post_image )}}" alt="post.jpg">
              </a>
            </div>
            <div class="details">
              <div class="tc_content">
                <p class="text-thm">{{$post->title}}</p>
                <h4>{{$post->headline}}</h4>
              </div>
              <div class="fp_footer">
                <ul class="fp_meta float-left mb0">
                  <li class="list-inline-item"><a href="#"><img width="40" height="30" src="{{asset('assets/front/images/logo.png')}}" alt="logo.png"></a></li>
                  <li class="list-inline-item"><a href="#">Bellushomes</a></li>
                </ul>
                <a class="fp_pdate float-right" href="#">{{$post->created_at}}</a>
              </div>
            </div>
          </div>
        </div>
        @break($loop->index == 2)
        @endforeach
      </div>
    </div>
  </section>