@extends('layouts.app')
@section('content')
<div class="row">
    <div class="column col-lg-12">
    	<div class="properties-box">
    		<div class="inner-container">
    			<div class="property-submit-form">
                    <form method="post" action="{{route('post.property')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                    	<div class="title"><h3>Basic Info</h3></div>
                        <div class="row">
                        	<!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Property Title</label>
                                <input type="text" name="title" placeholder="Property Title" required value="{{Request::old('title')}}">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Property Type</label>
                                <select class="custom-select-box" name="property_type" value="{{Request::old('property_type')}}">
                                    <option value="residential">Residential</option>
                                    <option value="commercial">Commercial</option>
                                    <option value="industrial">Industrial</option>
                                    <option value="apartment">Apartments</option>
                                </select>
                            </div>
                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Status</label>
                                <select class="custom-select-box" name="status" value="{{Request::old('status')}}">
                                    <option value="rent">Rent</option>
                                    <option value="sale">Sale</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <div class="range-slider-one clearfix">
                                    <label>Area</label>
                                 	<input type="text" name="area" placeholder="SqFt" required value="{{Request::old('area')}}">
                                </div>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <div class="range-slider-one clearfix">
                                    <label>Kitchen</label>
                                 	<select class="custom-select-box" name="nong_of_kitchen" value="{{Request::old('nong_of_kitchen')}}">
                                        <option value="1">01 Kitchen</option>
                                        <option value="2">02 Kitchen</option>
                                        <option value="3">03 Kitchen</option>
                                        <option value="4">04 Kitchen</option>
                                        <option value="5">05 Kitchen</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <div class="range-slider-one clearfix">
                                    <label>Bed Room</label>
                                 	<select class="custom-select-box" name="nong_of_bedroom" value="{{Request::old('nong_of_bedroom')}}">
                                        <option value="1">01 Beadroom</option>
                                        <option value="2">02 Beadroom</option>
                                        <option value="3">03 Beadroom</option>
                                        <option value="4">04 Beadroom</option>
                                        <option value="5">05 Beadroom</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <div class="range-slider-one clearfix">
                                    <label>Bathroom</label>
                                 	<select class="custom-select-box" name="nong_of_bathroom" value="{{Request::old('nong_of_bathroom')}}">
                                        <option value="1">01 Bathroom</option>
                                        <option value="2">02 Bathroom</option>
                                        <option value="3">03 Bathroom</option>
                                        <option value="4">04 Bathroom</option>
                                        <option value="5">05 Bathroom</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <div class="range-slider-one clearfix">
                                    <label>Gourage</label>
                                    <select class="custom-select-box" name="nong_of_gourage" value="{{Request::old('nong_of_gourage')}}">
                                        <option value="1">01 Gourage</option>
                                        <option value="2">02 Gourage</option>
                                        <option value="3">03 Gourage</option>
                                        <option value="4">04 Gourage</option>
                                        <option value="5">05 Gourage</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Price</label>
                                <input type="text" name="price" placeholder="Price(US-$)" required value="{{Request::old('price')}}">
                            </div>
                        </div>

                        <div class="title"><h3>Address</h3></div>
                        <div class="row">
                        	<!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Address</label>
                                <input type="text" name="address" placeholder="Address" required value="{{Request::old('address')}}">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>State</label>
                                <select class="custom-select-box" name="state" value="{{Request::old('state')}}">
                                    <option value="dhaka">Dhaka</option>
                                    <option value="comilla">Comilla</option>
                                    <option value="khulna">Khulna</option>
                                    <option value="rajshahi">Rajshahi</option>
                                    <option value="gopalgonj">Gopalgonj</option>
                                    <option value="gazipur">Gazipur</option>
                                </select>
                            </div>                          
                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Location</label>
                                <select class="custom-select-box" name="location" value="{{Request::old('location')}}">
                                    <option value="basundhara">Basubdhara</option>
                                    <option value="purbachal">Purbachal</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>country</label>
                                <select class="custom-select-box" name="country" value="{{Request::old('country')}}">
                                    <option value="bangladesh">Bangladesh</option>
                                    <option value="India">India</option>
                                    <option value="nepal">Nepal</option>
                                    <option value="pakistan">Pakistan</option>
                                    <option value="australia">Australia</option>
                                    <option value="singapore">Singapore</option>
                                </select>
                            </div>
                        </div>

                        <div class="title"><h3>Property Gallery</h3></div>
                        <div class="row">
                        	<!-- Form Group -->
                            <div class="form-group col-lg-12">
                                 <input type="file" class='form-control' class="form-control-file" name='image' id="exampleInputFile2" aria-describedby="fileHelp">
                            </div>
                        </div>

                        <div class="title"><h3>Detailed Information</h3></div>
                        <div class="row">
                           	<!-- Form Group -->
                            <div class="form-group col-lg-12">
                            	<textarea name="detail" placeholder="Detailed Information">{{Request::old('detail')}}</textarea>
                            </div>
                        </div>

                        <div class="title"><h3>Features (optional)</h3></div>
                        <div class="row">
                        	<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-1" value="ac"> 
                                    <label for="service-1">Air Conditioning</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-2" value="alarm"> 
                                    <label for="service-2">Alarm System</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-3" value="doorman"> 
                                    <label for="service-3">Doorman</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-4" value="fireplace"> 
                                    <label for="service-4">Fireplace</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-5" value="garden"> 
                                    <label for="service-5">Garden</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-6" value="heating_system"> 
                                    <label for="service-6">Heating System</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-7" value="high_ceiling"> 
                                    <label for="service-7">High Ceiling</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-8" value="car_parking"> 
                                    <label for="service-8">Car Parking</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-9" value="swimming_pool"> 
                                    <label for="service-9">Swimming Pool</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-10" value="laundry_room"> 
                                    <label for="service-10">Laundry Room</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-11" value="palce_to_seat"> 
                                    <label for="service-11">Places to seat</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-12" value="window_covering"> 
                                    <label for="service-12">Window Covering</label>
                                </div>
                            </div>
                        </div>
  
                        <div class="title"><h3>Contact Info</h3></div>
                        <div class="row">
                        	<!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Name" required value="{{Request::old('name')}}">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Email" required value="{{Request::old('email')}}">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Phone</label>
                                <input type="text" name="phone" placeholder="Phone" required value="{{Request::old('phone')}}">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                            	<button type="submit" class="theme-btn btn-style-one"> Submit Property</button>
                            </div>
                        </div>
                    </form>
                </div>
    		</div>
    	</div>
    </div>
</div>
@endsection