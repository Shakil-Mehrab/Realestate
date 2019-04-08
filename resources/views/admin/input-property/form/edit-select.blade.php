@php 
use App\Model\Category;
$categories=Category::all();
@endphp
 
<div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }} col-lg-3 col-md-6 col-sm-12">
    <div class="range-slider-one clearfix">
        <label>Category</label>
     	<select class="custom-select-box" name="category_id">
     		<optgroup label="Select One"> 
     		@forelse($categories as $category)
                <option value="{{$category->id}}" {{$category->id==$property->category->id?'selected':''}}>{{$category->name}}</option>
            @empty
			 <option value="">No Category</option>
		    @endforelse
        	</optgroup>
        </select>
        @if ($errors->has('category_id'))
        <span class="help-block">
            <strong>{{ $errors->first('category_id') }}</strong>
        </span>
    @endif
    </div>
</div>
<div class="form-group col-lg-3 col-md-6 col-sm-12">
    <label>Status</label>
    <select class="custom-select-box" name="property_type">
        <optgroup label="Select One"> 
            <option value="rent" {{$property->property_type=='rent'?'selected':''}}>Rent</option>
            <option value="sale" {{$property->property_type=='sale'?'selected':''}}>Sale</option>
        </optgroup>
    </select>
</div>














{{-- 
 <div class="form-group{{ $errors->has('category_id') ? ' has-error' : '' }} col-md-6">
 	<div class="range-slider-one clearfix">
	<label for="category_id" class="control-label">Category Id</label>
	<select id="size" name="category_id" class="form-control" required>
   		<optgroup label="Select One"> 
			@forelse($categories as $category)
				@if(
					isset($product) && $product->category->id==$category->id || !isset($product) && $area->id==$category->id && old('category_id') || old('category_id')==$category->id
				)
   				    <option value="{{$category->id}}">{{$category->name}}</option>
 				@else
   					<option value="{{$category->id}}">{{$category->name}}</option>
   				@endif
   			@empty
			 <option value="">No Category</option>
		    @endforelse
		</optgroup>

	</select>
	@if ($errors->has('category_id'))
        <span class="help-block">
            <strong>{{ $errors->first('category_id') }}</strong>
        </span>
    @endif
   </div>
</div> --}} 

