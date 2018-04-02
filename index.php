<!doctype html>
<html lang="en">
<head>
	<title>DeHa Magazine</title>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="description" content="" />
	<meta name="robots" content="index,follow" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
	<link rel="icon" href="/img/favicon.ico" type="image/x-icon">
	<script src="js/main.js"></script>
	<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "LocalBusiness",
 "address": {
   "@type": "PostalAddress",
   "addressLocality": "Tampa",
   "addressRegion": "Florida",
   "postalCode": "33606"
 },
"areaServed":{
	"@type": "GeoShape",
	"addressCountry": "USA"
},
"url": "http://www.dehamagazine.com/",
 "description": "DeHa is a new magazine on the scene bringing you the news in a different way.",
 "name": "Deha Magazine",
 "legalName": "Deha Magazine",
 "logo": "http://www.dehamagazine.com/img/deha-logo.png",
 "image": "http://www.dehamagazine.com/img/deha-logo.png",
 "priceRange": "$$"
}
</script>
</head>
<body>
	<div class="container-fluid">
		<div class="row div-top-nav">
			<?php include('nav.php'); ?>
		</div>

	</div>
	<div class="container-fluid">
		<div class="row">
				<?php
					if(!isset($_GET['page'])) {
						include('home.php');
					}else{
						$page = $_GET['page'];
						include("$page.php");
					}
				?>
			</div>
		</div>
	</div>
	
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
</div>
</body>