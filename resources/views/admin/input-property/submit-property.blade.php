@extends('layouts.app')
@section('content')
<div class="row">
    <div class="column col-lg-12">
        <div class="properties-box">
            <div class="inner-container">
                <div class="property-submit-form">
                    <form method="post" action="{{route('property.store')}}" enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="title"><h3>Basic Info</h3></div>
                        @include("admin.dashboard-includes.message")
                        <div class="row">
                            <!-- Form Group -->
                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} col-lg-3 col-md-6 col-sm-12">
                                <label for="title" class="control-label">Property Title</label>
                                <input type="text" name="title" id="title" placeholder="Property Title" value="{{Request::old('title')}}">
                                 @if ($errors->has('title'))
                                <span class="help-block">
                                    <strong style="color:red">{{ $errors->first('title') }}</strong>
                                </span>
                            @endif
                            </div>
                             @include('admin.input-property.form.input-select')
                            <div class="form-group{{ $errors->has('area') ? ' has-error' : '' }} col-lg-3 col-md-6 col-sm-12">
                                <label for="area" class="control-label">Property Area</label>
                                <input type="text" name="area" id="area" placeholder="Property Area" value="{{Request::old('area')}}">
                                 @if ($errors->has('area'))
                                <span class="help-block">
                                    <strong style="color:red">{{ $errors->first('area') }}</strong>
                                </span>
                            @endif
                            </div> 
                        </div>

                        <div class="title"><h3>Property Gallery</h3></div>
                        <div class="row">
                            <!-- Form Group -->
                            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                                <label>Image Upload</label>
                                 <input type="file" class='form-control' class="form-control-file" name='image' id="exampleInputFile2" aria-describedby="fileHelp">
                            </div>
                             <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }} col-lg-6 col-md-6 col-sm-12">
                                <label for="price" class="control-label">Price</label>
                                <input type="text" name="price" id="price" placeholder="Price (US-$" value="{{Request::old('price')}}">
                                 @if ($errors->has('price'))
                                <span class="help-block">
                                    <strong style="color:red">{{ $errors->first('price') }}</strong>
                                </span>
                                @endif
                             </div>
                        </div>

                        <div class="title"><h3>Detailed Information</h3></div>
                        <div class="row">
                            <!-- Form Group -->
                            <div class="form-group col-lg-12">
                                <textarea name="detail" placeholder="Detailed Information">{{Request::old('detail')}}</textarea>
                            </div>
                            @if ($errors->has('detail'))
                                <span class="help-block">
                                    <strong style="color:red">{{ $errors->first('detail') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="title"><h3>Contact Info</h3></div>
                        <div class="row">
                            <!-- Form Group -->
                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }} col-lg-3 col-md-6 col-sm-12">
                                <label for="address" class="control-label">Address</label>
                                <input type="text" name="address" id="address" placeholder="Address" value="{{Request::old('address')}}">
                                 @if ($errors->has('address'))
                                <span class="help-block">
                                    <strong style="color:red">{{ $errors->first('address') }}</strong>
                                </span>
                                @endif
                             </div>

                            <!-- Form Group -->
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} col-lg-3 col-md-6 col-sm-12">
                                <label for="email" class="control-label">Email</label>
                                <input type="text" name="email" id="email" placeholder="Email" value="{{Request::old('email')}}">
                                 @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong style="color:red">{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                             </div>

                            <!-- Form Group -->
                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }} col-lg-3 col-md-6 col-sm-12">
                                <label for="phone" class="control-label">Phone</label>
                                <input type="text" name="phone" id="phone" placeholder="Phone" value="{{Request::old('phone')}}">
                                 @if ($errors->has('phone'))
                                <span class="help-block">
                                    <strong style="color:red">{{ $errors->first('phone') }}</strong>
                                </span>
                                @endif
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