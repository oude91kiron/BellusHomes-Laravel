		
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


										<div class="mt-5">
											<!-- title -->										
											<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="title">Title: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="title"
											class="form-control"
											value="{{old('title', $post->title)}}"
											name="title">
												@error("title")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>


										<!-- paragraph 1-->
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="paragraph">Paragraph: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<textarea type="text" id="paragraph"
											class="form-control"
											name="paragraph"
											rows="6" 
											cols="12">{{old('paragraph', $post->paragraph)}}</textarea>
												@error("paragraph")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>
										</div>
										
                                        <!-- headline -->										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="headline">Headline: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="headline"
											class="form-control"
											value="{{old('headline', $post->headline)}}"
											name="headline">
												@error("headline")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>


										<!-- paragraph 2 -->
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="secondParagraph">secondParagraph: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<textarea type="text" id="secondParagraph"
											class="form-control"
											name="secondParagraph"
											rows="6" 
											cols="12">{{old('secondParagraph', $post->secondParagraph)}}</textarea>
												@error("secondParagraph")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>



										<!-- Quote -->										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="firstSubhead">Quote: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6">
											<input type="text" id="firstSubhead"
											class="form-control"
											value="{{old('firstSubhead', $post->firstSubhead)}}"
											name="firstSubhead">
												@error("firstSubhead")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>
										<!-- Paragraph 3 -->
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="thirdParagraph">Paragraph: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<textarea type="text" id="thirdParagraph"
											class="form-control"
											name="thirdParagraph"
											rows="6" 
											cols="12">{{old('thirdParagraph', $post->thirdParagraph)}}</textarea>
												@error("thirdParagraph")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>


										<!-- secondHeadline -->										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="secondHeadline">Headline: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="secondHeadline"
											class="form-control"
											value="{{old('secondHeadline', $post->secondHeadline)}}"
											name="secondHeadline">
												@error("secondHeadline")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>


										 <!-- Paragraph 4 -->
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="paragraph4">Paragraph: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<textarea type="text" id="paragraph4"
											class="form-control"
											name="paragraph4"
											rows="6" 
											cols="12">{{old('paragraph4', $post->paragraph4)}}</textarea>
												@error("paragraph4")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>

										<!-- Paragraph 5 -->
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="paragraph5">Conclusion: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<textarea type="text" id="paragraph5"
											class="form-control"
											name="paragraph5"
											rows="6" 
											cols="12">{{old('paragraph5', $post->paragraph5)}}</textarea>
												@error("paragraph5")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
										</div>

										<!-- categories -->										
										<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="categories">Categories: <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="categories"
											class="form-control"
												value="{{old('categories', $post->categories)}}"
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
											value="{{old('tags', $post->tags)}}"
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


