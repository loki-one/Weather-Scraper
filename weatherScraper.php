<?php







?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/css/bootstrap.min.css" integrity="sha384-AysaV+vQoT3kOAXZkl02PThvDr8HYKPZhNT5h/CXfBThSRXQ6jW5DO2ekP5ViFdi" crossorigin="anonymous">

    <title>Weather Scraper</title>

    <style type="text/css">
    	
    	html{
    		
    		background: url(weather.jpeg) no-repeat center center fixed;
    		-webkit-background-size: cover;
    		-moz-background-size: cover;
    		-o-background-size: cover;
    		background-size: cover;

    	}

    	body{

    		background: none;

    	}

    	input{

    		margin: 20px 0px;

    	}

    	.container{

    		text-align: center;
    		margin-top: 200px;
    		width: 450px;
    		color: black;

    	}

    	#cityLabel{

    		color: white;

    	}


    </style>
  </head>
  <body>

  	<div class="container">

		<h1>What's The Weather?</h1>
		<form>
			 <div class="form-group">
			    <label for="city" id="cityLabel">Enter the name of the city</label>
			    <input type="text" class="form-control" id="city" name="city" placeholder="Eg. London, Tokyo">
			 </div>
		   	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>

	</div>	
    	
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
  </body>
</html>