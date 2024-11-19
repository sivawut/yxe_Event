@extends('layouts.listlayout')

@section('content')
    
   
    <div class="container">
               
        @if( isset($eventCategory) )
            @if ( $eventCategory == 1 )
                <h2> Food Events </h2>
            @elseif ( $eventCategory == 2)
                <h2> Social Events </h2>
            @elseif ( $eventCategory == 3)
                <h2> Sports Events </h2>
            @elseif ( $eventCategory == 4 ) 
                <h2> Networking Events </h2>
            @elseif ( $eventCategory == 5 )
                <h2> Culture Events </h2>
            @endif
        @else 
            <h2> All Events </h2>    
        @endif
         
        

        <div id="recordsContainer">
            <!-- Cards will be added dynamically here -->
            @foreach($eventlists as $eventlist)
                <div class="card" onclick="location.href='/list/{{ $eventlist->id }}';" style="cursor: pointer;">
                    
                    <h4>From: {{ $eventlist->start_date}} @ {{$eventlist->start_time }} To: {{$eventlist->end_date}} @ {{$eventlist->end_time}}</h4>
                    
                    <h1>{{ $eventlist->topic }}</h1>
                    <p>Description: {{ $eventlist->details }}</p>
                    <p>Location: {{ $eventlist->location }}</p>
                    <a href="/maps">View Map</a>
                
                </div>
            @endforeach
        </div>
    </div>

@endsection
