@extends('layouts.master')
@section('link')
	<link rel="stylesheet" href="{{asset('style/admin/table/node_modules/mdi/css/materialdesignicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('style/admin/table/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
	<link rel="stylesheet" href="{{asset('style/admin/table/node_modules/rickshaw/rickshaw.min.css')}}" />
	<link rel="stylesheet" href="{{asset('style/admin/table/bower_components/chartist/dist/chartist.min.css')}}" />
    <link href="{{asset('style/admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/ownstyle.css')}}" rel="stylesheet">

@endsection

@section('navigation')
	<h3><i class="fas fa-tachometer-alt"></i> Dashboard<small> View Your Agents</small></h3><hr>
	<ol class="breadcrumb">
	 <li><a class="active"><i class="fas fa-tachometer-alt"></i> dashboard</a></li>
	</ol>
@endsection
@section('content')


    <div class="content-wrapper">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <a href="{{route('agent.create')}}"><h3 class="page-title text-center"><button class="btn btn-primary"> Creant Agent</button></h3></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
 <form method="post" action="{{route('agent.delete')}}" enctype="multipart/form-data">
 @csrf
    <div class="content-wrapper">
            <h3 class="page-title text-center">Agent Table</h3>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <table id="order-listing" class="table table-striped" style="width:100%;">
                        @include("admin.dashboard-includes.message")
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th><input type="checkbox" id="selectallboxes"></th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>phone</th>
                            <th>image</th>
                            <th>Address</th>  
                            <th>Detail</th>  
                            <th>Edit</th>    
                            <th>Delete</th>    
                        </tr>
                      </thead>

                      <tbody>
                        @forelse($agents as $property)
                        <tr>
                            <td>{{$property->id}}</td>
                            <td><input type="checkbox" name="checkboxes[]" value="{{$property->id}}" class="checkboxes"></td>
                            <td>{{$property->name}}</td>
                            <td>{{$property->email}}</td>
                            <td>{{$property->phone}}</td>
                            <td><img src="{{URL::to($property->image)}}" style="max-height:40px;min-height: 40px;max-width: 40px;min-width: 40px"></td>
                            <td>{{$property->address}}</td>
                            <td>@php echo str_limit($property->detail,10) @endphp</td>
                            <td><a href="{{route('agent.edit',$property->id)}}" ><span style=""><i class="fas fa-pencil-alt"></i></span></a></td>
                            <td><button type="submit"><span style="color:#DD4F43"><i class="fas fa-trash-alt"></i></span></button></td>

                         </tr>
                        @empty
                        <tr>
                            <td><h4></h4></td>
                            <td><h4></h4></td>
                            <td><h4></h4></td>
                            <td><h4></h4></td>
                            <td><h4></h4></td>
                            <td><h4>No product</h4></td>
                            <td><h4></h4></td>
                            <td><h4></h4></td>
                            <td><h4></h4></td>     
                            <td><h4></h4></td>  
                        </tr>
                        @endforelse
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </form>
@endsection
@section('js')
<!-- table js-->	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('style/admin/table/node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('style/admin/table/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('style/admin/table/js/data-table.js')}}"></script>
<script src="{{asset('js/multipleselection/selection.js')}}"></script>

<!-- end table js -->
@endsection

