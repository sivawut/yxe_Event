@extends('layouts.mainlayout')

@section('content')

    <div class="search-container">
        <!-- Search by Event -->
        <form action="search/" method="post">
            <input type="search" id="s_Events" name="q" placeholder="Search Events...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>

        <!-- Search by Location  -->
        <form action="search" method="post">
            <input type="search" id="s_Locations" name="q" placeholder="Search Locations...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>    

        <a href="/list/add">
            <button class="plus-button"> + <br> Create an Event</button>
        </a>

    </div>

    <div class="circle-link-container">
        <!-- Circular link buttons -->
        <a href="/list" class="circle-link">All Events</a>
        <a href="/list?category=1" class="circle-link">Food</a>
        <a href="/list?category=2" class="circle-link">Social </a>
        <a href="/list?category=3" class="circle-link">Sports</a>
        <a href="/list?category=4" class="circle-link">Networking</a>
        <a href="/list?category=5" class="circle-link">Culture</a>
    </div>

@endsection
      




