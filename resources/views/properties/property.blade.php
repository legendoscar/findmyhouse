@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Property</div>

                <div class="panel-body">
                <form class="form-horizontal" method="POST" action="{{url('/addproperty')}}"
                 enctype = "multipart/form-data" >
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">Property Title</label>

                            <div class="col-md-6">
                                <input id="property_title" type="text" class="form-control" name="property_title"
                                 value="{{ old('property_title') }}" required autofocus>

                                @if ($errors->has('property_title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('property_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        
                            <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                            <label for="price" class="col-md-4 control-label">Price</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control" name="price"
                                 value="{{ old('price') }}" required autofocus>

                                @if ($errors->has('price'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('location_id') ? ' has-error' : '' }}">
                            <label for="location_id" class="col-md-4 control-label">Location:</label>
                            <div class="col-md-6">
                            <select name="location_id" class="form-control">
                                    <option>Orji</option>
                                    <option>WorldBank</option>
                                    <option>Ikeduru</option>
                            </select>
                            @if ($errors->has('location'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('location') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                            <label for="description" class="col-md-4 control-label">Description:</label>

                            <div class="col-md-6">
                                <textarea id="description"  rows="7" type="text" class="form-control" name="description"
                                 value="{{ old('description') }}" required autofocus></textarea>

                                @if ($errors->has('description'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            

                            

                            <div class="form-group{{ $errors->has('property_image') ? ' has-error' : '' }}">
                            <label for="property_image" class="col-md-4 control-label">Property_Image</label>

                            <div class="col-md-6">
                                <input id="property_image" type="file" class="form-control" name="property_image"
                                 value="{{ old('property_image') }}" required autofocus>

                                @if ($errors->has('property_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('property_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Add Property 
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
