@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
               
                <form class="form-horizontal" method="POST" action="{{url('/addprofile')}}"
                 enctype = "multipart/form-data" >
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('firstName') ? ' has-error' : '' }}">
                            <label for="firstName" class="col-md-4 control-label">FirstName</label>

                            <div class="col-md-6">
                                <input id="firstName" type="text" class="form-control" name="firstName"
                                 value="{{ old('firstName') }}" required autofocus>

                                @if ($errors->has('firstName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('middlename') ? ' has-error' : '' }}">
                            <label for="middleName" class="col-md-4 control-label">MiddleName</label>

                            <div class="col-md-6">
                                <input id="middleName" type="text" class="form-control" name="middleName"
                                 value="{{ old('middleName') }}" required autofocus>

                                @if ($errors->has('middleName'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('middleName') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('lastname') ? ' has-error' : '' }}">
                            <label for="lastName" class="col-md-4 control-label">LastName</label>

                            <div class="col-md-6">
                                <input id="lastName" type="text" class="form-control" name="lastName"
                                 value="{{ old('lastName') }}" required autofocus>

                                @if ($errors->has('lastname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('lastname') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Email</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email"
                                 value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('State') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">State:</label>
                            <div class="col-md-6">
                            <select name="state" class="form-control">
                                    <option>Imo</option>
                            </select>
                            @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address"
                                 value="{{ old('address') }}" required autofocus>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('dateOfBirth') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Date Of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob"
                                 value="{{ old('dob') }}" required autofocus>

                                @if ($errors->has('dateOfBirth'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dateOfBirth') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                    <label for="title" class="col-md-4 control-label">Gender:</label>
                                <div class="col-md-6">
                                <select name="gender" class="form-control">
                                        <option>Male</option>
                                        <option>Female</option>
                                        <option>Other</option>
                                </select>
                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('profile_pic') ? ' has-error' : '' }}">
                            <label for="profile_pic" class="col-md-4 control-label">Profile Image</label>

                            <div class="col-md-6">
                                <input id="profile_pic" type="file" class="form-control" name="profile_image"
                                 value="{{ old('profile_image') }}" required autofocus>

                                @if ($errors->has('profile_image'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profile_image') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create Profile 
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
 