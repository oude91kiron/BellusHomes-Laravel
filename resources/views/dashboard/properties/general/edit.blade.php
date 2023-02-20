@extends('layouts.dashboard.admin') @section('content')
		<!-- page content -->
		<div class="right_col" role="main">
		  <div class="">
		    <div class="page-title">
		      <div class="title_left">
		        <h3>Projects</h3>
		      </div>
		    </div>
		    <div class="clearfix"></div>
		    <div class="row">
		      <div class="col-md-12 col-sm-12 ">
		        <div class="x_panel">
		          <div class="x_title">
		            <h2>Add <small>Projects</small>
		            </h2>
		            <ul class="nav navbar-right panel_toolbox">
		              <li>
		                <a class="collapse-link">
		                  <i class="fa fa-chevron-up"></i>
		                </a>
		              </li>
		              <li>
		                <a class="close-link">
		                  <i class="fa fa-close"></i>
		                </a>
		              </li>
		            </ul>
		            <div class="clearfix"></div>
		          </div>
		          <div class="x_content">
		            <br />
		            <form class="form" action="{{route('admin.properties.general.update', $property)}}" method="POST" enctype="multipart/form-data">
                         @csrf 
                        <div class="row justify-content-md-center">
		                <div class="col-md-8">
		                  <div class="form-body">

		                    <div class="row">

                              <div class="col-md-4">
		                        <div class="form-group">
		                          <label for="name"> Project name </label>
		                          <input type="text" id="name"
                                  class="form-control"
                                  value="{{old('name', $property->name)}}"
                                  name="name"> 
                                    @error("name") 
                                    <span class="text-danger">{{$message}}</span>
                                    @enderror
		                        </div>
		                      </div>


		                      <div class="col-md-4">
		                        <div class="form-group">
		                          <label for="eventInput1"> Building Age </label>
		                          <input type="text" id="building_age" class="form-control" placeholder="" value="{{old('building_age', $property->building_age)}}" name="building_age"> @error("building_age") <span class="text-danger">{{$message}}</span> @enderror
		                        </div>
		                      </div>

		                      <div class="col-md-4">
		                        <div class="form-group">
		                          <label for="parking "> Parking </label>
                                  <input type="checkbox" id="parking" class="switchery ml-5" placeholder="" @if($property->parking === 1) checked = true; @endif value="{{old('parking', $property->parking)}}" name="parking"> @error("parking") <span class="text-danger">{{$message}}</span> @enderror
		                        </div>
		                      </div>

		                      <div class="col-md-12">
		                        <div class="form-group">
		                          <label for="eventInput1">Location </label>
		                          <input type="text" id="location" class="form-control" placeholder="  " value="{{old('location', $property->location)}}" name="location"> @error("location") <span class="text-danger">{{$message}}</span> @enderror
		                        </div>
		                      </div>
		                    </div>


		                    <h4 class="form-section">
		                      <i class="ft-navigation-2"></i> Details Info
		                    </h4>
		                    <hr>
		                     <div class="row">
		                      <div class="col-md-12">
		                        <div class="form-group">
		                          <label for="eventInput1"> Description </label>
		                          <textarea name="description" id="description" class="form-control" placeholder="  " rows="12">{{old('description', $property->description)}}</textarea> @error("description") <span class="text-danger">{{$message}}</span> @enderror
		                        </div>
		                      </div>

                              
		                      <div class="col-md-6">
		                        <div class="form-group">
		                          <div class="text-bold-600 font-medium-2"> Choose the section </div>
		                          <select name="categories[]" class="select2 form-control" multiple>
		                            <optgroup label="Choose the section "> @if($categories && $categories -> count() > 0) @foreach($categories as $category) <option value="{{$category ->id }}">{{$category->name}}</option> @endforeach @endif </optgroup>
		                          </select> @error('categories.0') <span class="text-danger"> {{$message}}</span> @enderror
		                        </div>
		                      </div>
                              
		                      <div class="col-md-6">
		                        <div class="form-group">
		                          <label for="eventInput1">Choose the City </label>
		                          <select name="city_id" class="select2 form-control">
		                            <optgroup label="Select the City"> @if($cities && $cities -> count() > 0) @foreach($cities as $city) <option value="{{$city->id }}">{{$city ->name}}</option> @endforeach @endif </optgroup>
		                          </select> @error('city_id') <span class="text-danger"> {{$message}}</span> @enderror
		                        </div>
		                      </div>
		                    </div>

		                    <div class=" form-group">
		                      <label for="eventInput1">Status </label>
		                      <input type="checkbox" value="1" name="is_active" id="switcheryColor4" class="switchery" data-color="success" checked />
		                      <label for="switcheryColor4" class="card-title ml-1">Active</label> @error("is_active") <span class="text-danger">{{$message}}</span> @enderror
		                    </div>
		                  </div>
		                </div>
		              </div>
		              <div class="ln_solid"></div>
		              <div class="item form-group">
		                <div class="col-md-6 col-sm-6 offset-md-3">
		                  <button class="btn btn-primary" type="button"><a href="{{route('admin.dashboard')}}">Cancel</a></button>
		                  <button type="submit" class="btn btn-success">Submit</button>
		                </div>
		              </div>
		          </div>
		          </form>
		        </div>
		      </div>
		    </div>
		  </div>
		</div>
		</div>
		<!-- /page content --> @stop