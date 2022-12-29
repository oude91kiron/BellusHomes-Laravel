		
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

                                        <!-- post_image -->										
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

                                        <!-- title -->										
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

										<!-- paragraph -->
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Paragraph: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<textarea type="text" id="paragraph"
											class="form-control"
											placeholder="{{$post->paragraph}}"
											value="{{old('paragraph')}}"
											name="paragraph"
                                            rows="6" 
                                            cols="12"></textarea>
												@error("paragraph")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>

                                        <!-- firstSubhead -->										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Sub Headline: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="firstSubhead"
											class="form-control"
											placeholder="{{$post->firstSubhead}}"
											value="{{old('firstSubhead')}}"
											name="firstSubhead">
												@error("firstSubhead")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>

										<!-- secondParagraph -->
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Second Paragraph: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<textarea type="text" id="secondParagraph"
											class="form-control"
											placeholder="{{$post->secondParagraph}}"
											value="{{old('secondParagraph')}}"
											name="secondParagraph"
                                            rows="6" 
                                            cols="12"></textarea>
												@error("secondParagraph")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>

										<!-- secondHeadline -->										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Second Sub Head: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="secondHeadline"
											class="form-control"
											placeholder="{{$post->secondHeadline}}"
											value="{{old('secondHeadline')}}"
											name="secondHeadline">
												@error("secondHeadline")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>

										<!-- thirdParagraph -->
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Third Paragraph: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<textarea type="text" id="thirdParagraph"
											class="form-control"
											placeholder="{{$post->thirdParagraph}}"
											value="{{old('thirdParagraph')}}"
											name="thirdParagraph"
                                            rows="6" 
                                            cols="12"></textarea>
												@error("thirdParagraph")
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

										<!-- tags -->										
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
