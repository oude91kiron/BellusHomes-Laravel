{{-- Metadata goes here --}}
@include('front.includes.main-header')


	<!-- Blog Single Post -->
	<section class="blog_post_container bgc-f7 pb30">
		<div class="container">
			<div class="row">
				<div class="col-xl-6">
					<div class="breadcrumb_content style2">
						<ol class="breadcrumb">
						    <li class="breadcrumb-item"><a href="#">Home</a></li>
						    <li class="breadcrumb-item active text-thm" aria-current="page">We write our knowlage</li>
						</ol>
						<h2 class="breadcrumb_title">Our Blog</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-8">
					<div class="main_blog_post_content">
						<div class="mbp_thumb_post">
							<div class="blog_sp_tag"><a href="#">Real estate</a></div>
							
							{{-- ________________________________   Entro  __________________________________ --}}

							{{-- title --}}
							<h1 class="title">{{$post->title}}</h1>
							<ul class="blog_sp_post_meta">
								<li class="list-inline-item"><a href="#"><img src="{{asset('assets/front/images/header-logo.png')}}" alt="logo.png"></a></li>
								<li class="list-inline-item"><a href="{{route('aboutUs')}}">{{$sitedata->company_name}}</a></li>
								<li class="list-inline-item"><span class="flaticon-calendar"></span></li>
								<li class="list-inline-item"><a href="#">{{$post->created_at->diffForHumans()}}</a></li>
								<li class="list-inline-item"><span class="flaticon-view"></span></li>
								<li class="list-inline-item"><a href="#"> {{rand(10, 100)}} views</a></li>
								<li class="list-inline-item"><span class="flaticon-chat"></span></li>
								<li class="list-inline-item"><a href="#">{{rand(5, 20)}}</a></li>
							</ul>
							<div class="thumb">
								{{-- recomended image size 690px by 380px --}}
								<img class="img-fluid" src="{{url('assets/admin/images/posts/', $post->post_image)}}" alt="bs1.jpg">
							</div>
							<div class="details">
								
								{{-- Paragraph --}}
								<p class="mb30">{{$post->paragraph}}</p>
								

								{{-- ________________________________   Post Body  __________________________________ --}}

								{{-- headline 1--}}
								<h4 class="mb15">{{$post->headline}}</h4>
								
								{{-- Paragraph --}}
								<p class="mb30">{{$post->secondParagraph}}</p>
								
								<div class="mbp_blockquote">
									<div class="blockquote">
										<span class="font-italic"><i class="fa fa-quote-left"></i></span><br>
										{{-- Qoute --}}
										<em class="mb-0">{{$post->firstSubhead}}</em>
									</div>
								</div>

								{{-- Paragraph3 --}}
								<p>{{$post->thirdParagraph}}</p>


								{{-- ________________________________   Conclusion  __________________________________ --}}

								{{-- headline 2 --}}
								<h4 class="mb15">{{$post->secondHeadline}}</h4>
								
								{{-- paragraph --}}
								<p class="mb25">{{$post->paragraph4}}</p>
								
								{{-- paragraph --}}
								<p class="mb25">{{$post->paragraph5}}</p>
							</div>
							<ul class="blog_post_share">
								<li><p>Share</p></li>
								<li><a href="https://www.facebook.com/sharer/sharer.php?u={{ route('single.post', $post->id) }}" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/intent/tweet?url={{ route('single.post', $post->id) }}" target="_blank"><i class="fa fa-twitter"></i></a></li>
								<li><a href="https://www.instagram.com/share?url={{ route('single.post', $post->id) }}" target="_blank"><i class="fa fa-instagram"></i></a></li>
								<li><a href="https://www.linkedin.com/shareArticle?url={{ route('single.post', $post->id) }}" target="_blank"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="https://telegram.me/share/url?url={{ route('single.post', $post->id) }}" target="_blank"><i class="fa fa-telegram"></i></a></li>
							</ul>
						</div>

						{{--  --}}
						<div class="mbp_pagination_tab">
							<div class="row">
								<div class="col-sm-6 col-lg-6">
									<div class="pag_prev">
										<a href=" @if ($post->id - 1 <= 0) {{route('single.post', $posts->last()->id)}} @else {{route('single.post', $post->id-1)}} @endif"><span class="flaticon-back"></span></a>
										<div class="detls"><h5>Previous Post</h5></div>
									</div>
								</div>
								<div class="col-sm-6 col-lg-6">
									<div class="pag_next text-right">
										<a href=" @if ($post->id + 1 > $posts->count()+1) {{route('single.post', $posts->first()->id)}} @else {{route('single.post', $post->id+1)}} @endif"><span class="flaticon-next"></span></a>
										<div class="detls"><h5>Next Post</h5></div>
									</div>
								</div>
							</div>
						</div>

						{{--  --}}
						<div class="product_single_content mb30">
							<div class="mbp_pagination_comments">
								<div class="total_review">
									<h4>{{rand(10, 30)}} Reviews</h4>
									<ul class="review_star_list mb0 pl10">
										<li class="list-inline-item"><i class="fa fa-star"></i></li>
										<li class="list-inline-item"><i class="fa fa-star"></i></li>
										<li class="list-inline-item"><i class="fa fa-star"></i></li>
										<li class="list-inline-item"><i class="fa fa-star"></i></li>
										<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
									</ul>
									<a class="tr_outoff pl10" href="#">( 4.5 out of 5 )</a>
									<a class="write_review float-right fn-xsd" href="#">Write a Review</a>
								</div>
								<div class="mbp_first media">
									<img src="{{asset('assets/front/images/testimonial/1.png')}}" class="mr-3" alt="1.png">
									<div class="media-body">
								    	<h4 class="sub_title mt-0">Diana Cooper
											<span class="sspd_review">
												<ul class="mb0 pl15">
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"></li>
												</ul>
											</span>
								    	</h4>
								    	<a class="sspd_postdate fz14" href="#">December 28, 2020</a>
								    	<p class="fz14 mt10">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons!</p>
									</div>
								</div>
								<div class="custom_hr"></div>
								<div class="mbp_first media">
									<img src="{{asset('assets/front/images/testimonial/2.png')}}" class="mr-3" alt="2.png">
									<div class="media-body">
								    	<h4 class="sub_title mt-0">Ali Tufan
											<span class="sspd_review">
												<ul class="mb0 pl15">
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"></li>
												</ul>
											</span>
								    	</h4>
								    	<a class="sspd_postdate fz14" href="#">December 28, 2020</a>
								    	<p class="fz14 mt10">Beautiful home, very picturesque and close to everything in jtree! A little warm for a hot weekend, but would love to come back during the cooler seasons!</p>
									</div>
								</div>
							</div>
						</div>
					</div>

					{{--  --}}
					<div class="row">
						<div class="col-lg-12 mb20">
							<h4>Related Posts</h4>
						</div>
						@isset($posts)
						@foreach ($posts as $post)
						<div class="col-md-6 col-lg-6">
							<div class="for_blog feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{url('assets/admin/images/posts', $post->post_image)}}" alt="1.jpg">
									<div class="tag">Real Estate</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<h4>{{$post->title}}</h4>
										<ul class="bpg_meta">
											<li class="list-inline-item"><a href="#"><i class="flaticon-calendar"></i></a></li>
											<li class="list-inline-item"><a href="#">{{$post->created_at->diffForHumans()}}</a></li>
										</ul>
										<p>{{$post->header}}</p>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="{{route('single.post', $post)}}"><img src="{{asset('assets/front/images/header-logo.png')}}" alt="pposter1.png"></a></li>
											<li class="list-inline-item"><a href="#">{{$sitedata->company_name}}</a></li>
										</ul>
										<a class="fp_pdate float-right text-thm" href="{{route('single.post', $post)}}">Read More <span class="flaticon-next"></span></a>
									</div>
								</div>
							</div>
						</div>
						@break($loop->index == 3)
						@endforeach
						@endisset
					</div>
				</div>

				{{--  --}}
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
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Apartment <span class="float-right">{{rand(15, 30)}} properties</span></a></li>
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Condo <span class="float-right">{{rand(15, 30)}} properties</span></a></li>
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Family House <span class="float-right">{{rand(5, 25)}} properties</span></a></li>
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Modern Villa <span class="float-right">{{rand(5, 20)}} properties</span></a></li>
								<li><a href="#"><i class="fa fa-caret-right mr10"></i>Town House <span class="float-right">{{rand(10, 20)}} properties</span></a></li>
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
