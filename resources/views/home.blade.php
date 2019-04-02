@extends('layouts.app')
<style type="text/css">
 .avatar{
     border-radius:100%;
     max-width : 100px;
 }
</style>
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        @if(count($errors) > 0)
                    @foreach($errors->all as $error)
                        <div class="alert alert-danger"><li>{{$error}}</li></div>
                    @endforeach
                @endif
                @if (session('response'))
                        <div class="alert alert-success">
                            {{ session('response') }}
                        </div>
                    @endif
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
               @if(!empty($profile))
               <div class="col-md-4">
                    <img src="{{ $profile->profile_image }}" 
                    class="avatar" alt=""> 
                   <p class="lead">{{$profile->name}}</p>
                   <p class="lead">{{$profile->email}}</p>
                </div>
               @else
                <div class="col-md-4">
                    <img src="{{ url('img/author.jpg')}}" 
                    class="avatar" alt=""> 
                  
                </div>
                @endif
                <div class="col-md-8">
                
                </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
