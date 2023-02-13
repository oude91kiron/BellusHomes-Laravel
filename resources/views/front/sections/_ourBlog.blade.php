<div class="blog content-area-2">
    <div class="container">
        <div class="main-title">
            <h1>Latest Blog</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            @foreach ($posts as $post)
            <div  class="col-lg-4 col-md-4 wow fadeInLeft delay-04s">
                <div class="row blog-3">
                    <div class="col-lg-12 col-md-12">
                        <div class="photo">
                            <img src="{{asset('assets/admin/images/posts/'. $post->post_image )}}" alt="blog-3" class="img-fluid blog-img">
                        </div>
                        <div class="detail clearfix text-center">
                            <h3>
                                <a href="blog-single-sidebar-right.html">{{$post->title}}</a>
                            </h3>
                            <p>{{$post->headline}}</span></p>
                            <div class="blog-footer clearfix">
                                <div class="float-left">
                                    <p class="date"><i class="flaticon-calendar"></i> {{$post->created_at}}</p>
                                </div>
                                <div class="float-right">
                                    <a href="#">{{__('site/home.Read more...')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @break($loop->index == 2)
            @endforeach
            
            {{-- <div class="col-lg-6 col-md-6 wow fadeInRight delay-04s">
                <div class="row blog-3">
                    <div class="col-lg-5 col-md-12 col-pad ">
                        <div class="photo">
                            <img src="https://via.placeholder.com/224x288" alt="blog-3" class="img-fluid blog-img">
                            <div class="user">
                                <div class="avatar">
                                    <img src="https://via.placeholder.com/30x30" alt="avatar" class="img-fluid rounded-circle">
                                </div>
                                <div class="name">
                                    <h5>Teseira</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-md-12 col-pad">
                        <div class="detail clearfix">
                            <h3>
                                <a href="blog-single-sidebar-right.html">Selling Your Home</a>
                            </h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since<span class="d-none2-1200"> the 1500s, when an unknown printer took a galley of type and</span></p>
                            <div class="blog-footer clearfix">
                                <div class="float-left">
                                    <p class="date"><i class="flaticon-calendar"></i> 24 Sep, 2020</p>
                                </div>
                                <div class="float-right">
                                    <a href="#">Read more..</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</div>