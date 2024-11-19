<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details Form</title>
    <style>


.center {
 background-color: white;
       
  }
        /* Basic styling for the form */
        form {         
            max-width: 500px;
            margin: 0 auto;
            padding: 50px;
            background-color: #f9f9f9;
            border-radius: 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        /*input[type="date"],*/
        textarea,
        input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 20px;
        }

        textarea {
            resize: vertical; /* Allows textarea resizing only vertically */
        }

        button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 15px;
            background-color: #2196F3;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #034479;
        }
    </style>
</head>
<body>

    <div class="center">
        <h1> <a href="/"><img src="{{ asset('assets/images/event_logo.JPG') }}" alt="Event_logo"></a>
        </h1>
      </div>

    <!-- Event Details Form -->
    <form action="/add" method="POST" enctype="multipart/form-data">
        @csrf
        <!-- Start Date -->
        <label for="start-date">Start Date:</label>

        <!--<input type="date" id="start-date" name="start-date" required>-->
        <input type="date" id="start-date" name="start_date" >
        <input type="time" id="start_time" name="start_time" >

        <!-- End Date -->
        <label for="end-date">End Date:</label>
        <input type="date" id="end-date" name="end_date" >
        <input type="time" id="end_time" name="end_time" >

       <!-- Title -->
       <label for="location">Event Title:</label>
       <input type="text" id="topic" name="topic" placeholder="Event Title" >
       
        <!-- Event Detail -->
        <label for="description">Event description:</label>
        <textarea id="details" name="details" rows="4" placeholder="Enter a brief description of the event" ></textarea>

        <label for="Type of Event">Event Type:</label>
            <select name="category" id="category">
                <option value="0" selected>Uncatagorised</option>
                <option value="1">Food</option>
                <option value="2">Social</option>
                <option value="3">Sports</option>
                <option value="4">Networking</option>
                <option value="5">Culture</option>
            </select>

        <!-- Location -->
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" placeholder="Enter location" >

        <!-- user credential -->
         <input type="hidden" name="userid" value="{{ $userid }}">
         <input type="hidden" name="username" value="{{ $username }}">
         <input type="hidden" name="useremail" value="{{ $useremail }}">


        <!-- Map Upload -->
         <!--
        <label for="map">Upload Map:</label>
        <input type="file" id="map" name="map" accept=".jpg, .jpeg, .png, .pdf" >
        -->

        <!-- Submit Button -->
        <button type="submit">Submit</button>

    </form>

</body>
</html>
