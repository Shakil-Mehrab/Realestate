    <?php
    use App\Model\Property;
    use App\Comment;
    ?>

<?php
    $single_property=Property::find($most_popular_property->id);
    $comments=Comment::orderBY('id','desc')->where('property_id',$most_popular_property->id)->get();
    $total_comment=$single_property->comments()->count();
    $total_star=$single_property->comments()->sum('star');
    if($comments){
        foreach ($comments as $comment) {
          $total_comment=$total_comment+$comment->replies()->count();
          $total_star=$total_star+$comment->replies()->sum('star');      
        }
    }
    if($total_comment){
      $star_rating=round($total_star/$total_comment);
    }else{$star_rating=0;}
?> 


    <div class="ratings">
          <input type="radio"  id="rating" value="1" {{$star_rating=="1"?"checked":""}}>
          <input type="radio"  id="rating" value="2" {{$star_rating=="2"?"checked":""}}>
          <input type="radio"  id="rating" value="3" {{$star_rating=="3"?"checked":""}}>
          <input type="radio"  id="rating" value="4" {{$star_rating=="4"?"checked":""}}>
          <input type="radio"  id="rating" value="5" {{$star_rating=="5"?"checked":""}}>
    </div>