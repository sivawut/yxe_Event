@extends('layouts.listlayout')

@section('content')

    @foreach( $list as $eventlist )
        <div class="container">
            <div class="card">
                <!--<h4>From: 2024-11-01 To: 2024-11-05</h4>-->
                <h4>From: {{ $eventlist->start_date}} @ {{$eventlist->start_time }} To: {{$eventlist->end_date}} @ {{$eventlist->end_time}}</h4>
                <h1>{{ $eventlist->topic }}</h1>
                <p>Description: {{ $eventlist->details }}</p>
                <p>Location: {{ $eventlist->location }}</p>
                <div>

                <gmp-map center="37.4220656,-122.0840897" zoom="10" map-id="DEMO_MAP_ID" style="height: 400px"></gmp-map>
                    <script
                        src="https://maps.googleapis.com/maps/api/js?key=&libraries=maps,marker&v=beta" defer>
                    </script>

                </div>

                
            </div>
        </div>
        
    @endforeach

@endsection
