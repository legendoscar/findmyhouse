@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        
            <div class="panel panel-default text-center">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                <div class="col-md-4"> 
                <ul class="list-group">
                @if(count($locations) > 0)
                                @foreach($locations->all() as $location)
                               <li class="list-group-item"><a href='{{url("/location/$location->id")}}'>
                               {{$location->location}}</a></li> 
                                @endforeach

                            @else
                            <h1>No location</h1>
                            @endif
                
                </ul>
                        
                
                </div> 
              
                <div class="col-md-8">
                @if(count($properties) > 0)

                @foreach($properties->all() as $property)
                    <h1>{{$property->property_title}}</h1>
                    @foreach($images->all() as $image)
                    <img src="{{ $image->images }}" alt="" width="100%">
                    @endforeach
                    <p>{{$property->description }}</p>
                    
                    
                @endforeach
                

                @endif
               
                
                    
                </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
