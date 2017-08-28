<!DOCTYPE html>
<html>
<head>
<title>Virtual Tour</title>
<link rel="stylesheet" type="text/css" href="css/jquery.panorama.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="icon" href="assets/logo2.png" type="image/gif" sizes="32x32">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.panorama.js"></script>
<style  type="text/css">
	body {
		background: #595959;
		text-align: center;
	}
	h1 {
		color: white;
		margin-bottom: 2em;
		font-family: Verdana;
		font-weight: normal;
		font-size: 25px;
	}
	#page {
		text-align: center;
		color: white;
	}
	#page a {
		color: white;
	}
	#page .panorama-viewport {
		box-shadow: 10px 10px 5px black;
		margin-left: auto;
		margin-right: auto;
	}

#video-background {
/*  making the video fullscreen  */
  position: fixed;
  right: 0; 
  bottom: 0;
  min-width: 100%; 
  min-height: 100%;
  width: auto; 
 height: auto;
  z-index: -100;
}

.btn{
	float: left;
	/*background-color: transparent*/;
	border: 2px solid blue;
}

#home, #prev, #next {
	float: right;
}

</style>
</head>
<body>

<a id="next" href="virtualTour2.php" class="btn btn-success"><span class="glyphicons glyphicons-circle-arrow-right"></span>Next</a>
<a href="index.php#middle" class="btn btn-primary" role="button" id="home">Home</a>

<div id="page" style="padding-top: 10%">
		
	<img src="img/shark2.jpg" class="panorama" width="2642" height="425" alt="shark" />
<br>
	
	

	
</div>


          <video autoplay loop id="video-background">
            <source src="assets/backVid2.mp4" type="video/mp4">
            </video>
</body>
</html>