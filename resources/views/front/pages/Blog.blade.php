
{{-- Metadata goes here --}}
@include('front.includes.main-header')

<!-- Main Blog Post Content -->
<section class="blog_post_container bgc-f7">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="breadcrumb_content style2">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active text-thm" aria-current="page">Simple Listing – Grid View</li>
                    </ol>
                    <h2 class="breadcrumb_title">Blog</h2>
                </div>
            </div>
        </div>

        {{-- looping posts --}}
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @isset($posts)
                    @foreach ($posts as $post)
                    <div class="col-lg-6">
                        <div class="for_blog feat_property">
                            <div class="thumb">
                                <img class="img-whp" src="{{url('assets/admin/images/posts', $post->post_image)}}" alt="1.jpg">
                                <div class="blog_tag">{{$post->tags}}</div>
                            </div>
                            <div class="details">
                                <div class="tc_content">
                                    <h4>{{$post->title}}</h4>
                                    <ul class="bpg_meta">
                                        <li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i></a></li>
                                        <li class="list-inline-item"><a href="#">{{$post->created_at}}</a></li>
                                    </ul>
                                    <p>{{$post->headline}}</p>
                                </div>
                                <div class="fp_footer">
                                    <ul class="fp_meta float-left mb0">
                                        <li class="list-inline-item"><a href="#"><img src="{{asset('assets/front/images/header-logo.png')}}" alt="pposter1.png"></a></li>
                                        <li class="list-inline-item"><a href="#">Bellushomes</a></li>
                                    </ul>
                                    <a class="fp_pdate float-right text-thm" href="{{route('single.post', $post->id)}}">Read More <span class="flaticon-next"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endisset
                </div>

                {{-- Pagination --}}
                <div class="row">
                    <div class="col-lg-12">
                        <div class="mbp_pagination mt20">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div>

            {{-- sidebar --}}
            <div class="col-lg-4">
                <div class="sidebar_search_widget">
                    <div class="blog_search_widget">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search Here" aria-label="Recipient's username" aria-describedby="button-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button" id="button-addon2"><span class="flaticon-magnifying-glass"></span></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="terms_condition_widget">
                    <h4 class="title">Categories Property</h4>
                    <div class="widget_list">
                        <ul class="list_details">
                            <li><a href="#"><i class="fa fa-caret-right mr10"></i>Apartment <span class="float-right">6 properties</span></a></li>
                            <li><a href="#"><i class="fa fa-caret-right mr10"></i>Condo <span class="float-right">12 properties</span></a></li>
                            <li><a href="#"><i class="fa fa-caret-right mr10"></i>Family House <span class="float-right">8 properties</span></a></li>
                            <li><a href="#"><i class="fa fa-caret-right mr10"></i>Modern Villa <span class="float-right">26 properties</span></a></li>
                            <li><a href="#"><i class="fa fa-caret-right mr10"></i>Town House <span class="float-right">89 properties</span></a></li>
                        </ul>
                    </div>
                </div>
				
                <div class="sidebar_feature_listing">
					<h4 class="title">Featured Listings</h4>
					
					@isset($properties)
					@foreach($properties as $property)
					<div class="media">
						<img class="align-self-start mr-3" height="80px" width="90px" src="{{$property -> images[0] -> photo ?? '' }}" alt="fls1.jpg">
						<div class="media-body">
					    	<h5 class="mt-0 post_title">{{$property->title}}</h5>
					    	<a href="#">{{number_format($property->total_price, 0, ',')}} $</a>
					    	<ul class="mb0">
					    		<li class="list-inline-item">Beds: {{$property->bedrooms}}</li>
					    		<li class="list-inline-item">Baths: {{$property->bathrooms}}</li>
					    		<li class="list-inline-item">Sq Ft: {{$property->area}}</li>
					    	</ul>
						</div>
					</div>
					@endforeach
					@endisset
                </div>

                <div class="blog_tag_widget">
                    <h4 class="title">Tags</h4>
                    <ul class="tag_list">
                        <li class="list-inline-item"><a href="#">Apartment</a></li>
                        <li class="list-inline-item"><a href="#">Real Estate</a></li>
                        <li class="list-inline-item"><a href="#">Estate</a></li>
                        <li class="list-inline-item"><a href="#">Luxury</a></li>
                        <li class="list-inline-item"><a href="#">Real</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Footer -->
@include('front.includes.footer')
