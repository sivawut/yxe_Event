@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <a href="/list/add">
                        <button class="plus-button"> + <br> Create an Event</button>
                    </a>


                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('') }}
                    <p>Your Events</p>
<style>
.container-pipe {
    width: 50%;
    max-width: 900px;
    margin: auto;
    
}

.card-pipe {
    
    background: white;
    margin: 15px 0;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.card-pipe h4 {
    margin: 0;
    color: black;
    gap: 70px;
}
.card-pipe h1 {
    color: #2196F3;
}
.card-pipe p {
    margin: 5px 0;
    color: black;
    
}
.card-pipe a {
    display: inline-block;
    margin-top: 10px;
    color: #2196F3;
    text-decoration: none;
    font-weight: bold;
}
.card-pipe a:hover {
    color: #034479;
}
</style>



                    <div class="container-pipe">
                        @foreach( $eventlists as $eventlist ) 
                        <div class="card-pipe" style="border:1px solid black; margin:20px; padding:10px;">
                            <h4>From: {{ $eventlist->start_date}} @ {{$eventlist->start_time }} To: {{$eventlist->end_date}} @ {{$eventlist->end_time}}</h4>
                            <h1 style="color: #2196F3;" >{{ $eventlist->topic }}</h1>
                            <p>Description: {{ $eventlist->details }}</p>
                            <p>Location: {{ $eventlist->location }}</p>
                            <p>
                                
                                
                                <div style="display: inline">
                                <form action="/delete/{{ $eventlist->id }}" method="POST">        
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" style="display: inline">
                                        <img src="assets/images/bin.png" width="20" style="" alt="Delete">
                                        <img src="assets/images/edit.png" width="20" alt="Edit">
                                    </button>
                                </form>


</div>                             


                            </p>
                            
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
