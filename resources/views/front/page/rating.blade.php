<!DOCTYPE html>
<html lang="en">

<!-- Tiger Cage/properties.html by g4bbar, Thu, 24 Jan 2019 15:34:57 GMT -->
<head>
<meta charset="utf-8">
<title>Ourland - Real Estate HTML Template | Properties</title>
<!-- Stylesheets -->
    <link href="{{asset('ratingcss/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('ratingcss/bootstrap/css/rating.css')}}" rel="stylesheet">
    <link href="{{asset('ratingcss/bootstrap/awesome-font/css/fontawesome-all.min.css')}}" rel="stylesheet">
  </head>
  <body>
    <button class="btn btn-success">hi</button>
    <h1><i class="fas fa-star"></i>Hello, world!</h1>

  <div class="container" style="marigin-top:35px">
    <div class="ratings">
      <input type="radio" name="star" id="rating" value="1" {{1=='1'?"checked":" "}}>
      <input type="radio" name="star" id="rating" value="2">
      <input type="radio" name="star" id="rating" value="3">
      <input type="radio" name="star" id="rating" value="4">
      <input type="radio" name="star" id="rating" value="5">
      
    </div>
    <span class="info"></span>
  </div>  
    <script src="{{asset('ratingcss/bootstrap/js/bootstrap.js')}}"></script>
    <script src="{{asset('ratingcss/bootstrap/js/jquery.min.js')}}"></script>
    <script src="{{asset('ratingcss/bootstrap/js/rating.js')}}"></script>    
    <script>
    $('.ratings').rating(function(vote,event){
      $.ajax({
        method:"POST",
        url:'{{ url('edit-star') }}',
        data:{vote:vote}
      }).done(function(info){
        $('.info').html("your vote: <b>"+info+"<b>")
      })
    })
 
    function toggleReply(commentId){
  $('.reply-form-'+commentId).toggleClass('hidden');
}
</script>
  </body>
</html>


