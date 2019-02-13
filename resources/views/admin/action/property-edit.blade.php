@extends('layouts.app')
@section('content')
<div class="row">
    <div class="column col-lg-12">
    	<div class="properties-box">
    		<div class="inner-container">
    			<div class="property-submit-form">
                    <form method="post" action="{{route('post.edit',$property->id)}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                    	<div class="title"><h3>Basic Info</h3></div>
                        @include("admin.dashboard-includes.message")
                        
                        <div class="row">
                        	<!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Property Titlert</label>
                                <input type="text" name="title" placeholder="Property Title" required value="{{$property->title}}">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Property Type</label>
                                <select class="custom-select-box" name="property_type" >
                                    <option value="residential" {{$property->property_type=='residential'?"selected":" "}}>Residential</option>
                                    <option value="commercial" {{$property->property_type=='commercial'?"selected":" "}}>Commercial</option>
                                    <option value="industrial" {{$property->property_type=='industrial'?"selected":" "}}>Industrial</option>
                                    <option value="apartment" {{$property->property_type=='apartment'?"selected":" "}}>Apartments</option>
                                </select>
                            </div>
                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Status</label>
                                <select class="custom-select-box" name="status" value="{{Request::old('status')}}">
                                    <option value="rent" {{$property->status=='rent'?"selected":" "}}>Rent</option>
                                    <option value="sale" {{$property->status=='sale'?"selected":" "}}>Sale</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <div class="range-slider-one clearfix">
                                    <label>Area</label>
                                 	<input type="text" name="area" placeholder="SqFt" required value="{{$property->area}}">
                                </div>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <div class="range-slider-one clearfix">
                                    <label>Kitchen</label>
                                 	<select class="custom-select-box" name="nong_of_kitchen" value="{{Request::old('nong_of_kitchen')}}">
                                         <option value="1" {{$property->nong_of_kitchen=='1'?"selected":" "}}>01 Kitchen</option>
                                         <option value="2" {{$property->nong_of_kitchen=='2'?"selected":" "}}>2 Kitchen</option>
                                         <option value="3" {{$property->nong_of_kitchen=='3'?"selected":" "}}>03 Kitchen</option>
                                         <option value="4" {{$property->nong_of_kitchen=='4'?"selected":" "}}>04 Kitchen</option>
                                         <option value="5" {{$property->nong_of_kitchen=='5'?"selected":" "}}>05 Kitchen</option>

                                        
                                    </select>
                                </div>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <div class="range-slider-one clearfix">
                                    <label>Bed Room</label>
                                 	<select class="custom-select-box" name="nong_of_bedroom" value="{{Request::old('nong_of_bedroom')}}">
                                         <option value="1" {{$property->nong_of_bedroom=='1'?"selected":" "}}>01 Bedroom</option>
                                         <option value="2" {{$property->nong_of_bedroom=='2'?"selected":" "}}>2 Bedroom</option>
                                         <option value="3" {{$property->nong_of_bedroom=='3'?"selected":" "}}>03 Bedroom</option>
                                         <option value="4" {{$property->nong_of_bedroom=='4'?"selected":" "}}>04 Bedroom</option>
                                         <option value="5" {{$property->nong_of_bedroom=='5'?"selected":" "}}>05 Bedroom</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <div class="range-slider-one clearfix">
                                    <label>Bathroom</label>
                                 	<select class="custom-select-box" name="nong_of_bathroom" value="{{Request::old('nong_of_bathroom')}}">
                                         <option value="1" {{$property->nong_of_bathroom=='1'?"selected":" "}}>01 Bathroom</option>
                                         <option value="2" {{$property->nong_of_bathroom=='2'?"selected":" "}}>2 Bathroom</option>
                                         <option value="3" {{$property->nong_of_bathroom=='3'?"selected":" "}}>03 Bathroom</option>
                                         <option value="4" {{$property->nong_of_bathroom=='4'?"selected":" "}}>04 Bathroom</option>
                                         <option value="5" {{$property->nong_of_bathroom=='5'?"selected":" "}}>05 Bathroom</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <div class="range-slider-one clearfix">
                                    <label>Gourage</label>
                                    <select class="custom-select-box" name="nong_of_gourage" value="{{Request::old('nong_of_gourage')}}">
                                        <option value="1" {{$property->nong_of_gourage=='1'?"selected":" "}}>01 Gourage</option>
                                         <option value="2" {{$property->nong_of_gourage=='2'?"selected":" "}}>2 Gourage</option>
                                         <option value="3" {{$property->nong_of_gourage=='3'?"selected":" "}}>03 Gourage</option>
                                         <option value="4" {{$property->nong_of_gourage=='4'?"selected":" "}}>04 Gourage</option>
                                         <option value="5" {{$property->nong_of_gourage=='5'?"selected":" "}}>05 Gourage</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Price</label>
                                <input type="text" name="price" placeholder="Price(US-$)" required value="{{$property->price}}">
                            </div>
                        </div>

                        <div class="title"><h3>Address</h3></div>
                        <div class="row">
                        	<!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Address</label>
                                <input type="text" name="address" placeholder="Address" required value="{{$property->address}}">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>State</label>
                                <select class="custom-select-box" name="state" value="{{Request::old('state')}}">
                                    <option value="gopalgonj" {{$property->state=='gopalgonj'?"selected":" "}}>Gopalgonj</option>
                                         <option value="dhaka" {{$property->state=='dhaka'?"selected":" "}}>Dhaka</option>
                                         <option value="chittagong" {{$property->state=='chittagong'?"selected":" "}}>Chittagong</option>
                                         <option value="khulna" {{$property->state=='khulna'?"selected":" "}}>Khulna</option>
                                         <option value="rajshahi" {{$property->state=='rajshahi'?"selected":" "}}>Rajshahi</option>
                                </select>
                            </div>                          
                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Location</label>
                                <select class="custom-select-box" name="location" value="{{Request::old('location')}}">
                                    <option value="basundhara" {{$property->location=='basundhara'?"selected":" "}}>Basubdhara</option>
                                    <option value="purbachal" {{$property->location=='purbachal'?"selected":" "}}>Purbachal</option>
                                </select>
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>country</label>
                                <select class="custom-select-box" name="country" value="{{Request::old('country')}}">
                                    <option value="bangladesh" {{$property->country=='bangladesh'?"selected":" "}}>Bangladesh</option>
                                    <option value="india" {{$property->country=='india'?"selected":" "}}>India</option>
                                    <option value="nepal" {{$property->country=='nepal'?"selected":" "}}>Nepal</option>
                                    <option value="pakistan" {{$property->country=='pakistan'?"selected":" "}}>Pakistan</option>
                                    <option value="australia" {{$property->country=='australia'?"selected":" "}}>Australia</option>
                                    <option value="singapore" {{$property->country=='singapore'?"selected":" "}}>Singapore</option>
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
                            	<textarea name="detail" placeholder="Detailed Information" required>{{$property->detail}}</textarea>
                            </div>
                        </div>

                        <div class="title"><h3>Features (optional)</h3></div>
                        <div class="row">
                        	<div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-1" value="ac" {{$property->checkbox=='ac'?"checked":" "}}> 
                                    <label for="service-1">Air Conditioning</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-2" value="alarm" {{$property->checkbox=='alarm'?"checked":" "}}> 
                                    <label for="service-2">Alarm System</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-3" value="doorman" {{$property->checkbox=='doorman'?"checked":" "}}> 
                                    <label for="service-3">Doorman</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-4" value="fireplace" {{$property->checkbox=='fireplace'?"checked":" "}}> 
                                    <label for="service-4">Fireplace</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-5" value="garden" {{$property->checkbox=='garden'?"checked":" "}}> 
                                    <label for="service-5">Garden</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-6" value="heating_system" {{$property->checkbox=='heating_system'?"checked":" "}}> 
                                    <label for="service-6">Heating System</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-7" value="high_ceiling" {{$property->checkbox=='high_ceiling'?"checked":" "}}> 
                                    <label for="service-7">High Ceiling</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-8" value="car_parking" {{$property->checkbox=='car_parking'?"checked":" "}}> 
                                    <label for="service-8">Car Parking</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-9" value="swimming_pool" {{$property->checkbox=='swimming_pool'?"checked":" "}}> 
                                    <label for="service-9">Swimming Pool</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-10" value="laundry_room" {{$property->checkbox=='laundry_room'?"checked":" "}}> 
                                    <label for="service-10">Laundry Room</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-11" value="palce_to_seat" {{$property->checkbox=='palce_to_seat'?"checked":" "}}> 
                                    <label for="service-11">Places to seat</label>
                                </div>
                            </div>

                            <div class="form-group col-lg-3 col-md-6 col-sm-12 ">
                                <div class="check-box">
                                    <input type="checkbox" name="checkbox[]" id="service-12" value="window_covering" {{$property->checkbox=='window_covering'?"checked":" "}}> 
                                    <label for="service-12">Window Covering</label>
                                </div>
                            </div>
                        </div>
  
                        <div class="title"><h3>Contact Info</h3></div>
                        <div class="row">
                        	<!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Name</label>
                                <input type="text" name="name" placeholder="Name" required value="{{$property->name}}">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Email</label>
                                <input type="email" name="email" placeholder="Email" required value="{{$property->email}}">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                                <label>Phone</label>
                                <input type="text" name="phone" placeholder="Phone" required value="{{$property->phone}}">
                            </div>

                            <!-- Form Group -->
                            <div class="form-group col-lg-3 col-md-6 col-sm-12">
                            	<button type="submit" class="theme-btn btn-style-one"> Update Property</button>
                            </div>
                        </div>
                    </form>
                </div>
    		</div>
    	</div>
    </div>
</div>
@endsection