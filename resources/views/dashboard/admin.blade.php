	
@extends('layouts.dashboard.admin')
@section('content')
<div class="right_col" role="main">
        <!-- top tiles -->
        <div class="row mx-5 " style="display: inline-block;" >
          <div class="tile_count">
            
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Admins</span>
              <div class="count">{{$admin->count()}}</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34%</i> From last Week</span>
            </div>
            
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-home"></i> Preoperties</span>
              <div class="count">15</div>
              <span class="count_bottom"><i class="green">4% </i> From last Week</span>
            </div>
            
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_top"><i class="fa fa-map-o"></i> Locations</span>
              <div class="count">4</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
            </div>
            <div class="col-md-3 col-sm-4  tile_stats_count">
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
              <div class="count green">1120</div>
              <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span>
            </div>
          </div>
        </div>

        <div class="row">
          <div>
            <a href="" class="btn btn-primary mt-5"> Edite Site Data</a>
          </div>
          <table class="table table-striped table-bordered " style="width:100%">
            <thead>
              <td>Logo</td>
              <td>Company name</td>
              <td>Email</td>
              <td>whatsapp</td>
              <td>facebook</td>
              <td>Twitter</td>
              <td>Instagram</td>
              <td>setting</td>
            </thead>
            <tbody>
              <td>
                <img width="70" height="50" src="{{asset('assets/admin/images/sliders/'. $data->logo )}}" alt="">
              </td>
              <td>{{$data->company_name}}</td>
              <td>{{$data->email}}</td>
              <td><a href="https://wa.me/+90{{$data->whatsapp}}">{{$data->whatsapp}}</a></td>
              <td><a href="https://facebook.com/{{$data->facebook}}">{{$data->facebook}}</a></td>
              <td><a href="https://twitter.com/">{{$data->twitter}}</a></td>
              <td><a href="https://instagram.com/">{{$data->instagram}}</a></td>
              <td><a href="{{route('sitedata.edit')}}" class="btn btn-success">Edite</a></td>
            </tbody>
          </table>
        </div>
      </div>
  
@endsection