<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'webforum') }}</title>

    <!-- Scripts -->
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link href="{{asset('webform/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('webform/style.css')}}" rel="stylesheet"> 
</head>
<body>

        


<section class="container">
    <div class="row">
         <div class="col-md-3">
           
          </div>
            <div class="col-md-9">
              <div class="row">
                 <div class="col-md-4"><h4>Create Thread</h4></div>                   
                  </div>                                                                    
                    <div class="content-wrap well">
                      
                        <div class="list-group">
                            <h4 class="list-group-item-heading">{{$thread->subject}}</h4>
                            <p class="list-group-item-text">{{$thread->thread}}</p> <br> 
                            <i>Created By: {{ $thread->user->name}}</i>
                           
                            <div class="action">
                                <span class="label label-default {{$thread->likes->where('user_id',auth()->id())->where('property_id',$thread->id)->first()?'liked':''}}" onclick="likeIt('{{$thread->id}}',this)"><span class="glyphicon glyphicon-heart"></span></span>
                                <span>
                                  @if($thread->likes->where('user_id',auth()->id())->where('thread_id',$thread->id)->first())
                                   @if($thread->likes()->count()==1)
                                   <a> you like it</a>
                                   @endif
                                   @if($thread->likes()->count()==2)
                                   <a> you and  {{$thread->likes()->count()-1}} other like it</a>
                                   @endif
                                   @if($thread->likes()->count()>2)
                                   <a> you and  {{$thread->likes()->count()-1}} others like it</a>
                                   @endif
                                   @else <a>{{$thread->likes()->count()}}</a>
                                  @endif
                                
                                  
                                </span>
                              
                              </div>
                            
                           </div><br>
                  
            <h4>All Comments</h4><hr>
            
        </div> 
    </div>   
</div>                         
</section>  


 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
 <script src="{{asset('webform/bootstrap/js/bootstrap.min.js')}}"></script>
 <script src="{{asset('webform/js/main.js')}}"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/4.4.0/bootbox.min.js"></script>
   


<script>
 function toggleReply(commentId){
        $('.reply-form-'+commentId).toggleClass('hidden');
             }
function likeIt(threadId,elem){
var csrfToken='{{csrf_token()}}';
$.post('{{route('toggleLike')}}',{threadId:threadId,_token:csrfToken},function(data){
  console.log(data);
  if(data.message==='liked'){
    $(elem).addClass('liked');
    $(elem).css({color:'blue'});
  }else{
    $(elem).css({color:'#ffffff'});
    $(elem).removeClass('liked');
  }
  
});
}
 
  
 $(document).on("click","#delete",function(e){
 e.preventDefault();
 var link=$(this).attr("href");
 bootbox.confirm("Are you sure to delete",function(confirmed){
 if(confirmed){
 window.location.href=link;
 };
 });
      });
</script>


</body>
</html>
