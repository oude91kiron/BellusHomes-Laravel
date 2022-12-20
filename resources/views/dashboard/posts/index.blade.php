@extends('layouts.dashboard.admin')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
        <div class="page-title">
          <div class="title_left">
                <h3>All <small> Posts</small></h3>
          </div>
        </div>
            
        @include('dashboard.includes.alerts.success')
        @include('dashboard.includes.alerts.errors')
                  
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th> 
                                    <th>Title</th>
                                    <th>Headline</th>
                                    <th>Photo</th>
                                    <th>Summery</th>
                                    <th>Category</th>
                                    <th>Tags</th>
                                    <th >Setings</th>

                                </tr>
                            </thead>
                            <tbody>
                                @isset($posts)
                                @foreach ($posts as $post)
                                <tr>
                                    <td>{{$post ->id}}</td>
                                    <td>{{$post ->title}}</td>
                                    <td>{{$post ->headline}}</td>
                                    <td>{{$post ->post_image}}</td>
                                    <td>{{substr($post->body,0,100)}}...</td>
                                    <td>{{$post ->categories}}</td>
                                    <td>{{$post ->tags}}</td>
                                    <td></td>
                                </tr>
                                @endforeach
                                @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <!-- /page content -->
@endsection