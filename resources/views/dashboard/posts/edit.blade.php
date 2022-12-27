		
@extends('layouts.dashboard.admin')
@section('content')

		<!-- page content -->
		<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Edite Blog Posts</h3>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Edite<small>Post</small></h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>


								<div class="x_content">
									<br />
									<form class="form" action="{{route('post.update', $post)}}" method="POST"
									enctype="multipart/form-data">
									@csrf

									<div class="form-group">
									    <label>Post Pictur, Max 4MB</label>
										<label class="form-label"  id="projectinput">
											<input type="file"  id="post_image" name="post_image">
										</label>
                                        <img height="150" width="200" src="{{url('assets/admin/images/posts', $post ->post_image)}}" alt="">

										@error("post_image")
												<span class="text-danger">{{$message}}</span>
										@enderror
									</div>


										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Title: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="title"
											class="form-control"
											placeholder="{{$post->title}}"
											value="{{old('title')}}"
											name="title">
												@error("title")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>

                                        <!-- headline -->										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Headline: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="headline"
											class="form-control"
											placeholder="{{$post->headline}}"
											value="{{old('headline')}}"
											name="headline">
												@error("headline")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>

										<!-- Body -->
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Body: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<textarea type="text" id="body"
											class="form-control"
											value="{{old('body')}}"
											name="body"
                                            rows="12" 
                                            cols="50"> {{$post->body}} </textarea>
												@error("body")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>


										<!-- categories -->										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="whatsapp">Categories: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="categories"
											class="form-control"
											placeholder="{{$post->categories}}"
											value="{{old('categories')}}"
											name="categories">
												@error("categories")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>

										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="tags">Tags: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="tags"
											class="form-control"
											placeholder="{{$post->tags}}"
											value="{{old('tags')}}"
											name="tags">
												@error("tags")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>

										<div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												<a href="{{route('admin.dashboard')}}" class="btn btn-primary" type="button">Cancel</a>
												<button type="submit" class="btn btn-success">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
@stop
