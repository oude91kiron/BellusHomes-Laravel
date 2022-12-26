		
@extends('layouts.dashboard.admin')
@section('content')

		<!-- page content -->
		<div class="right_col" role="main">
				<div class="">
					<div class="page-title">
						<div class="title_left">
							<h3>Site Data</h3>
						</div>

					
					</div>
					<div class="clearfix"></div>
					<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								<div class="x_title">
									<h2>Add Data</h2>
									<ul class="nav navbar-right panel_toolbox">
										<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
										</li>
									</ul>
									<div class="clearfix"></div>
								</div>


								<div class="x_content">
									<br />
									<form class="form" action="{{route('sitedata.update')}}" method="POST"
									enctype="multipart/form-data">
									@csrf


									<div class="form-group">
									    <label>Logo Picture, Max 4MB</label>
										<label class="form-label"  id="projectinput">
											<input type="file"  id="logo" name="logo" >
										</label>
									
										<div class="my-4">
											<img width="120" height="80" src="{{asset('assets/admin/images/sliders/'. $site_data->logo )}}" alt="">
										</div>

										@error("logo")
												<span class="text-danger">{{$message}}</span>
										@enderror
									</div>


									<div class="item form-group">
										<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Company Name: <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 ">
										<input type="text" id="company_name"
										class="form-control"
										placeholder="{{$site_data->company_name}}"
										value="{{old('company_name')}}"
										name="company_name">
											@error("company_name")
											<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
									<!-- Email -->										
									<div class="item form-group">
										<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 ">
										<input type="email" id="email"
										class="form-control"
										placeholder="{{$site_data->email}}"
										value="{{old('email')}}"
										name="email">
											@error("email")
											<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
                                    
									<!-- WhatsApp -->										
									<div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="whatsapp">whatsapp <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
											<input type="text" id="whatsapp"
											class="form-control"
											placeholder="{{$site_data->whatsapp}}"
											value="{{old('whatsapp')}}"
											name="whatsapp">
												@error("whatsapp")
												<span class="text-danger">{{$message}}</span>
												@enderror
											</div>
									</div>
                                    <!-- facebook -->										
									<div class="item form-group">
										<label class="col-form-label col-md-3 col-sm-3 label-align" for="facebook">Facebook <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 ">
										<input type="text" id="facebook"
										class="form-control"
										placeholder="{{$site_data->facebook}}"
										value="{{old('facebook')}}"
										name="facebook">
											@error("facebook")
											<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
                                    <!-- twitter -->
									<div class="item form-group">
										<label class="col-form-label col-md-3 col-sm-3 label-align" for="twitter">Twitter <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 ">
										<input type="twitter" id="twitter"
										class="form-control"
										placeholder="{{$site_data->twitter}}"
										value="{{old('twitter')}}"
										name="twitter">
											@error("twitter")
											<span class="text-danger">{{$message}}</span>
											@enderror
										</div>
									</div>
                                    <!-- instagram -->
									<div class="item form-group">
										<label class="col-form-label col-md-3 col-sm-3 label-align" for="instagram">Instagram <span class="required">*</span>
										</label>
										<div class="col-md-6 col-sm-6 ">
										<input type="text" id="instagram"
										class="form-control"
										placeholder="{{$site_data->instagram}}"
										value="{{old('instagram')}}"
										name="instagram">
											@error("instagram")
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
<<<<<<< HEAD
=======

				
					
>>>>>>> 8d54404b8d69e68f4ec63955c5077bd4b9d50088
			</div>
		</div>
	<!-- /page content -->
@stop
