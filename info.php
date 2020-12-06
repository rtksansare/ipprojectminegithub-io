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
		justify-content: flex-start;
		text-align: left;
		padding: 10px 0px 10px 0px;
	}
</style>
</head>
<body>
<div class="container col-lg-7">
<h1>More Info</h1>
</div>
<div class="container col-lg-4">
<h4>1.Enter Your Details Carefully.</h4>
<h4>2.Note The Unique Id Given By System While Booking Tickets.</h4>
<h4>3.You Can You Any Type Of Online Payment Method eg.UPI,Net Banking.</h4>
<h4>4.Download The Receipt After Payment..</h4>
<h4>5.Ticket Will Be Valid For Current Day Only.</h4>
<h4>6.Once Payment Done No Money Will Be Returned.</h4>

</div>





</div>
</body>
</html>