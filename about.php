<?php
session_start();
if(!isset($_SESSION['name'])){
    echo "You Are Logged Out..!!";
    header('location:newloginform.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>About US</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style type="text/css">

	body{
		 background-color: #F8F8FF;
		background-repeat: no-repeat;
		background-size: cover;
		font-family: "Times New Roman",Times,serif;
		letter-spacing: 2px;
	}
	

	h1{
		display: flex;
		justify-content: center;
		text-align: center;
		padding: 100px 50px 100px 50px;
		font-size: 100px;
		text-shadow: 2px 2px 5px red;
	}
	h4{
		display: flex;
		justify-content: center;
		text-align: center;
		padding: 50px 50px 100px 50px;
	}
</style>
</head>
<body>
<div class="container col-lg-8">
<h1>About Us</h1>

<h4>This Website Is Generated For Making Ferryboat Tickets Booking More Easy And People Friendly.There Is No Need To Stand In Line And Book Tickets.You Can Do This Work Easily With Your Laptop or Mobile.The Main Motive To Build This Website Is To Keep Social Distancing During The Ticket Booking.</h4>








</div>
</body>
</html>