<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Admin Area</title>
	<link href="{{asset('realestate/admin/css/bootstrap.css')}}" rel="stylesheet">
	<link href="{{asset('realestate/admin/css/style.css')}}" rel="stylesheet">
	<link href="{{asset('realestate/admin/css/responsive.css')}}" rel="stylesheet">
	 <link href="{{asset('style/admin/bootstrap/awesome-font/css/fontawesome-all.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('style/ownstyle.css')}}" rel="stylesheet">
    
    @yield('link')
    <script>
    window.laravel={!! json_encode([
      'csrfToken'=>csrf_token(),
    ]) !!};
    </script>
</head>
<body>

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
   @include('admin.includes.header')
    <!--End Main Header -->
    
    <!-- Hidden Bar -->
    @include('super-admin.includes.hidden-bar')
    <!--End Hidden Bar -->
     <div class="dashboard">
        <div class="container-fluid">
            <div class="content-area">
                <div class="dashboard-content">
                     @include('admin.includes.dashboard')
                </div>
            </div>
        </div>
    </div>
  <form method="post" action="{{route('category.delete')}}" enctype="multipart/form-data">
 						@csrf   
 <div class="dashboard">
    <div class="container-fluid">
        <div class="content-area">
            <div class="dashboard-content">
				<div class="row">    
			        <div class="col-md-8 col-md-offset-2">
			            <div class="content-wrap well text-center">
			                <a href="#"><button class="btn btn-success" data-toggle="modal" data-target="#mymodal" > Add Category</button></a>
			            </div>
			        </div>
					<div class="col-md-8 col-md-offset-2"> 
					@include('super-admin.dashboard-includes.message')    
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>id</th>
                            <th><input type="checkbox" id="selectallboxes"></th>
                            <th>Categories</th> 
                            <th>Edit</th> 
                            <th>Delete</th> 
                        </tr>                 
                        </thead>
                        <tbody>
                        @forelse($categories as $category)
                        <tr>
                            <td>{{$category->id}}</td>  
                            <td><input type="checkbox" name="checkboxes[]" value="{{$category->id}}" class="checkboxes"></td>  
                            <td>{{$category->name}}</td> 
                            <td><a href="#" ><span data-toggle="modal" data-target="#mymodal-{{$category->id}}"><i class="fas fa-pencil-alt"></i></span></a></td>
                            <td><button type="submit"><span style="color:#DD4F43"><i class="fas fa-trash-alt"></i></span></button></td>
                                  
                
                            <div id="mymodal-{{$category->id}}" class="modal fade" tabindex="-1" role="dialog" >
                                <div class="modal-dialog" role="document">
                                    <form method="post" action="{{route('category.update',$category->id)}}" class="forms-sample" enctype="multipart/form-data"> 
                                        {{csrf_field()}}
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title">Update Caegories</h4>
                                    </div>
                                    <div class="modal-body">
                                    <div class="form-group">
                                        <label for="Category">Caetgory<span style='color:red'>*</span></label>
                                        <input type="text" class="form-control p-input" name="name" placeholder="Caetgory" value="{{$category->name}}"> 
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Update Category</button>
                                    </div>
                                </div><!-- /.modal-content -->
                                    </form>
                                </div><!-- /.modal-dialog -->
                            </div><!-- /.modal -->
                        </tr> 
                        @empty
                        <tr>
                            <td></td>
                            <td>No News</td>  
                            <td></td>        
                            <td></td>
                        </tr>  
                        @endforelse                    
                        </tbody>
                    </table>
			                
					<div id="mymodal" class="modal fade" tabindex="-1" role="dialog" >
				        <div class="modal-dialog" role="document">
			              <form method="post" action="{{route('category.store')}}" class="forms-sample" enctype="multipart/form-data"> 
			                  {{csrf_field()}}
				          	<div class="modal-content">
					            <div class="modal-header">
					              <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					              <h4 class="modal-title">Add Caegories</h4>
					            </div>
					            <div class="modal-body">
					              <div class="form-group">
					                  <label for="Category">Caetgory<span style='color:red'>*</span></label>
					                  <input type="text" class="form-control p-input" name="name" placeholder="Caetgory" value="{{Request::old('name')}}"> 
					              </div>
					            </div>
					            <div class="modal-footer">
					              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					              <button type="submit" class="btn btn-primary">Create Category</button>
					            </div>
				        	</div><!-- /.modal-content -->
				           </form>
				        </div><!-- /.modal-dialog -->
				    </div><!-- /.modal -->
				   </div>
				</div>
			</div>
        </div>
    </div>
</div>
</form>

@include('admin.dashboard-includes.footer')





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{asset('style/admin/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
<script src="{{asset('/js/main.js')}}"></script>

<script src="{{asset('realestate/admin/js/jquery.js')}}"></script> 
<script src="{{asset('realestate/admin/js/popper.min.js')}}"></script>
<script src="{{asset('realestate/admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('realestate/admin/js/jquery-ui.js')}}"></script>
<script src="{{asset('realestate/admin/js/wow.js')}}"></script>
<script src="{{asset('realestate/admin/js/dropzone.js')}}"></script>
<script src="{{asset('realestate/admin/js/appear.js')}}"></script>
<script src="{{asset('realestate/admin/js/script.js')}}"></script>
<script src="{{asset('js/multipleselection/selection.js')}}"></script>

	</body>
</html>
