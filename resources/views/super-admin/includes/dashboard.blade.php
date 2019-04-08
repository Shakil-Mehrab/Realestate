@php
use App\User_property_views;
use App\Model\Property;
use App\Comment;
$total_property=Property::all()->count('id');
$total_views=User_property_views::all()->sum('count');
$total_comment=Comment::all()->count('id');
@endphp
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="ui-item bg-success">
            <div class="left">
                <h4>{{$total_property}}</h4>
                <p>Properties</p>
            </div>
            <div class="right">
                <i class="la la-map-marker"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="ui-item bg-warning">
            <div class="left">
                <h4>{{$total_views}}</h4>
                <p>Views</p>
            </div>
            <div class="right">
                <i class="la la-eye"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="ui-item bg-active">
            <div class="left">
                <h4>{{$total_comment}}</h4>
                <p>Comments</p>
            </div>
            <div class="right">
                <i class="la la-comments-o"></i>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="ui-item bg-dark">
            <div class="left">
                <h4>42</h4>
                <p>Bookmarked</p>
            </div>
            <div class="right">
                <i class="la la-heart-o"></i>
            </div>
        </div>
    </div>
</div>



