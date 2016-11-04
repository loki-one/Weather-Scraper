<?php

	$checkCity = '';
	$weather = '';
	$error = '';

	if(array_key_exists('city', $_GET)){

		if(strpos($_GET['city'], ' ') > 0) {

			$checkCity = str_replace(' ', '', $_GET['city']);

		}else{

			$checkCity = $_GET['city'];
		}

		$file_headers = @get_headers("http://www.weather-forecast.com/locations/".$checkCity."/forecasts/latest");

		if(!$file_headers || $file_headers[0] == 'HTTP/1.1 404 Not Found') {

    			$error = "The entered city is not valid";

		}else {


		$forecastPage = file_get_contents("http://www.weather-forecast.com/locations/".$checkCity."/forecasts/latest");

		$pageArray = explode('3 Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">', $forecastPage);

		if(sizeof($pageArray) > 1) {

			$secondPageArray = explode('</span></span></span>', $pageArray[1]);

			if (sizeof($secondPageArray) > 1) {
			
				$weather = $secondPageArray[0];

			}else{

				$error = "The entered city is not valid"; 

			}

		}else {

			$error = "The entered city is not valid";			

		}


		}

	}





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
    		margin-top: 100px;
    		width: 450px;
    		color: black;

    	}

    	#cityLabel{

    		color: white;

    	}

    	#weather{

    		margin-top: 15px;

    	}



    </style>
  </head>
  <body>

  	<div class="container">

		<h1>What's The Weather?</h1>
		<form>
			 <div class="form-group">
			    <label for="city" id="cityLabel">Enter the name of the city</label>
			    <input type="text" class="form-control" id="city" name="city" placeholder="Eg. London, Tokyo" value="<?php 
			    
			    if (array_key_exists('city', $_GET)) {
			    	
			    	echo $_GET['city'];

			    }
			     

			    ?>">
			 </div>
		   	<button type="submit" name="submit" class="btn btn-primary">Submit</button>
		</form>

		<div id="weather">
		<?php

			if ($weather) {

				echo '<div class="alert alert-info" role="alert">'.$weather.'</div>';

			}else if ($error) {

				echo '<div class="alert alert-danger" role="alert">'.$error.'</div>';

			}

		?>
		</div>

	</div>	
    	
    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" integrity="sha384-3ceskX3iaEnIogmQchP8opvBy3Mi7Ce34nWjpBIwVTHfGYWQS9jwHDVRnpKKHJg7" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.3.7/js/tether.min.js" integrity="sha384-XTs3FgkjiBgo8qjEjBk0tGmf3wPrWtA6coPfQDfFEY8AnYJwjalXCiosYRBIBZX8" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.5/js/bootstrap.min.js" integrity="sha384-BLiI7JTZm+JWlgKa0M0kGRpJbF2J8q+qreVrKBC47e3K6BW78kGLrCkeRX6I9RoK" crossorigin="anonymous"></script>
  </body>
</html>