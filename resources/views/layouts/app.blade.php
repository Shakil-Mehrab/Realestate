
<!DOCTYPE html>
<html lang="en">

<!-- Tiger Cage/admin/dashboard.html by g4bbar, Thu, 24 Jan 2019 15:35:50 GMT -->
<head>
<meta charset="utf-8">
<title>Ourland - Real Estate HTML Template | Dashboard</title>
<!-- Stylesheets -->
<link href="{{asset('realestate/admin/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{asset('realestate/admin/css/style.css')}}" rel="stylesheet">
<link href="{{asset('realestate/admin/css/responsive.css')}}" rel="stylesheet">
 <link href="{{asset('style/admin/bootstrap/awesome-font/css/fontawesome-all.min.css')}}" rel="stylesheet">
<link rel="shortcut icon" href="{{asset('realestate/admin/images/favicon.png')}}" type="image/x-icon">
<link rel="icon" href="{{asset('realestate/admin/images/favicon.png')}}" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</head>

<body>

<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>

    <!-- Header Span -->
    <span class="header-span"></span>

    <!-- Main Header-->
   @include('admin.includes.header')
    <!--End Main Header -->
    
    <!-- Hidden Bar -->
    @include('admin.includes.hidden-bar')
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
     <div class="dashboard">
        <div class="container-fluid">
            <div class="content-area">
                <div class="dashboard-content">
                    @yield("content")
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.dashboard-includes.footer')


<script src="{{asset('realestate/admin/js/jquery.js')}}"></script> 
<script src="{{asset('realestate/admin/js/popper.min.js')}}"></script>
<script src="{{asset('realestate/admin/js/bootstrap.min.js')}}"></script>
<script src="{{asset('realestate/admin/js/jquery-ui.js')}}"></script>
<script src="{{asset('realestate/admin/js/wow.js')}}"></script>
<script src="{{asset('realestate/admin/js/dropzone.js')}}"></script>
<script src="{{asset('realestate/admin/js/appear.js')}}"></script>
<script src="{{asset('realestate/admin/js/script.js')}}"></script>
</body>
</html>
