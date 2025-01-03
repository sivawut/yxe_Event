<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Two Search Boxes in a Single Line</title>
    <style>


.center {
 background-color: white;
       
  }

        /* Flex container for the search boxes */
        .search-container {
            display: flex;
            justify-content: center;
            gap: 70px; /* Space between the search boxes */
            
        }

         Styling for each form 
        form {
            display: flex;
            align-items: center;
        }

        /* Styling for search input */
        input[type="search"] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            width: 80%;
            border-radius: 50px;
            outline: none;
            background-color: white;
        }

        /* Styling for submit button */
        button {
            float: right;
            padding: 8px 12px;
            margin-left: 5px;
            font-size: 17px;
            background-color: #2196F3;
            color: white;
            border: 1px solid gray;
            border-radius: 10px;
            cursor: pointer;
        }

        /* Hover effect for the button */
        button:hover {
            background-color: #5945a0;
        }

        .plus-button {
            padding: 10px 15px;
            font-size: 17px;
            background-color: white;
            color: blue;
            border: none;
            border-radius: 10px;
            cursor: pointer;
        }

        /* Optional hover effect */
        .plus-button:hover {
            background-color: white;
        }

        /* Event Buttons*/

        .circle-link-container {
            position: absolute;
            
            bottom: 200px;
            left: 20px; /* Distance from the bottom of the page */
            left: 50%; /* Center horizontally */
            transform: translateX(-50%); /* Adjust to exact center */
            display: flex;
            gap: 50px; /* Space between buttons */

        }

        /* Styling for each circular link button */
        .circle-link {
            width: 120px;
            height: 120px;
            background-color: #2196F3;
            color: white;
            font-size: 20px;
            font-weight: bold;
            border-radius: 50%; /* Makes the button circular */
            text-align: center;
            text-decoration: none; /* Removes underline from the link */
            line-height: 125px; /* Centers text vertically */
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Optional shadow for depth */
            transition: background-color 0.3s ease; /* Smooth transition for hover effect */
        }

        /* Hover effect */
        .circle-link:hover {
            background-color: #034479;
        }   



    </style>
</head>
<body>

    

  
    <div class="center" style="border:1px solid red;">
        <H1> <img src="event_logo.JPG" alt="Event_logo"></h1>
    </div>
       <br><br><br><br>
    
    <div class="search-container" style="border:1px solid green;">
        <!-- Search by Event -->
        <form action="search-results1.html" method="get">
            <input type="search" id="s_Events" name="q" placeholder="Search Events...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    
        <!-- Search by Location  -->
        <form action="search-results2.html" method="get">
            <input type="search" id="s_Locations" name="q" placeholder="Search Locations...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>    
    
        <a href="/list/add">
          <button class="plus-button"> + <br> Create an Event</button>
        </a>
              
    </div>

    <div class="center" style="border:1px solid blue;">
    
        @foreach($eventlists as $eventlist)
            <h1>Topic: {{ $eventlist->topic }}</h1>
            <p>Details: {{ $eventlist->details }}</p>
            <p>Location: {{ $eventlist->location}}</p>
            <p>Create at: {{ $eventlist->created_at}}</p>
            <hr>
        @endforeach
    </div>


    <div class="circle-link-container">
        <!-- Circular link buttons -->
        <a href="https://www.example.com/1" class="circle-link" target="_blank">Food</a>
        <a href="https://www.example.com/2" class="circle-link" target="_blank">Social </a>
        <a href="https://www.example.com/3" class="circle-link" target="_blank">Sports</a>
        <a href="https://www.example.com/3" class="circle-link" target="_blank">Networking</a>
        <a href="https://www.example.com/3" class="circle-link" target="_blank">Culture</a>
    </div>
      



</body>
</html>
