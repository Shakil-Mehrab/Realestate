@extends('layouts.app')
@section('link')
	<link rel="stylesheet" href="{{asset('style/admin/table/node_modules/mdi/css/materialdesignicons.min.css')}}">
	<link rel="stylesheet" href="{{asset('style/admin/table/node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css')}}">
	<link rel="stylesheet" href="{{asset('style/admin/table/node_modules/rickshaw/rickshaw.min.css')}}" />
	<link rel="stylesheet" href="{{asset('style/admin/table/bower_components/chartist/dist/chartist.min.css')}}" />
@endsection

@section('navigation')
	<h3><i class="fas fa-tachometer-alt"></i> Dashboard<small> View Your Dashboard</small></h3><hr>
	<ol class="breadcrumb">
	 <li><a class="active"><i class="fas fa-tachometer-alt"></i> dashboard</a></li>
	</ol>
@endsection
@section('content')
    @include('admin.dashboard-includes.message')
    <div class="content-wrapper">
            <h3 class="page-title text-center">Property Table</h3><hr>
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <table id="order-listing" class="table table-striped" style="width:100%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Title</th>
                            <th>Type</th>
                            <th>Country</th>
                            <th>Status</th>
                            <th>image</th>
                           {{--  @if(Auth::user()->author=='admin') --}}
                            <th>Area</th> 
                            <th>Address</th>  
                            <th>State</th>  
                            <th>Price</th>  
                            <th>Location</th>  
                            <th>Detail</th>  
                            <th>Pho No</th> 
                            <th>View</th>    
   
                            {{-- @endif --}}
                        </tr>
                      </thead>
                      <tbody>
                        @forelse($properties as $property)
                        {{-- @if(!empty($property->user->id) and !empty($property->category->id)) --}}
                        <tr>
                            <td>{{$property->id}}</td>
                            <td>{{$property->title}}</td>
                            <td>{{$property->property_type}}</td>
                            <td>{{$property->country}}</td>
                            <td>{{$property->status}}</td>
                            <td><img src="{{URL::to($property->image)}}" style="max-height:40px;min-height: 40px;max-width: 40px;min-width: 40px"></td>
                            <td>{{$property->area}}</td>
                            <td>{{$property->address}}</td>
                            <td>{{$property->state}}</td>
                            <td>{{$property->price}}</td>
                            <td>{{$property->location}}</td>
                            <td>@php echo str_limit($property->detail,10) @endphp</td>
                            <td>{{$property->phone}}</td>
                            {{-- @if(auth::user()->author=='admin') --}}
                            <td> <a href="{{route('property.view',$property->id)}}"><span style="color:green"><i class="far fa-eye"></i></span></a></td>
                          {{-- @endif --}}
                         </tr>
                         {{-- @endif --}}
                        @empty
                        <tr>
                            <td><h4></h4></td>
                            <td><h4></h4></td>
                            <td><h4></h4></td>
                            <td><h4></h4></td>
                            <td><h4></h4></td>
                            <td><h4></h4></td>
                            <td><h4>No Property</h4></td>
                            <td><h4></h4></td>
                            <td><h4></h4></td>
                            <td><h4></h4></td>     
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
@endsection
@section('js')
<!-- table js-->	
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('style/admin/table/node_modules/datatables.net/js/jquery.dataTables.js')}}"></script>
<script src="{{asset('style/admin/table/node_modules/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{asset('style/admin/table/js/data-table.js')}}"></script>
<!-- end table js -->
@endsection

