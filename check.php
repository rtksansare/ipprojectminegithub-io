<?php
session_start();
if(!isset($_SESSION['name'])){
    echo "You Are Logged Out..!!";
    header('location:1st.html');
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Check</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="stylesheet" href="file:///C:/xampp/htdocs/last%20try/bootstrap-4.0.0-dist/css/bootstrap.min.css">
<script type="text/javascript" src="file:///C:/xampp/htdocs/last%20try/bootstrap-4.0.0-dist/js/bootstrap.min.js"></script>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/all.min.css">


<style type="text/css">



*{
	background-color:#f2f2f2; 
}
	.f1{
		margin-top: 5px;
	}
</style>
</head>
<body style="padding: 0; margin: 0">

	<div class="container col-lg-12" style="background-color: #f2f2f2">


	<div class="container col-lg-4" style="height: 100vh">

<div style="display: flex;align-items: center;justify-content: center;"><h1 style="margin-top: 10px;font-size: 30">Book Your Tickets</h1></div>


	<form method="POST" action="ppt.php" class="f1">

		Unique Id:<input type="text" name="ud" class="form-control" readonly value="<?php echo uniqid(); ?>"><br>

		Name:<input type="text" name="name" class="form-control" required><br>

		

		Mobile No.:<input type="text" name="mobile" id="mobile" class="form-control" required><br>

		Email Address:<input type="text" name="email" id="email" class="form-control" required><br>

		Gender:<select name="gender" class="form-control" required>
			<option value="">Select Gender</option>
			<option value="Male">Male</option>
			<option value="Female">Female</option>
		</select>


<br>
		Source To Destination:<select class="form-control" name="std" class="std" id="std" required>
				<option value="">Source To Destination</option>
				<option value="Dabhol To Dhopave">Dabhol To Dhopave</option>
				<option value="Dhopave To Dabhol">Dhopave To Dabhol</option>
				
				</select><br>

				Date:<input type="date" name="date" id="date" class="form-control" required><br>

				Vehicle Type:<!--<p class="form-control">2-Wheeler:&nbsp;<input type="radio" name="vehicle" id="r1" value="100" oninput="price.value=r1.value">&nbsp;
				4-Wheeler&nbsp;<input type="radio" name="vehicle" id="r2" value="200" oninput="price.value=r2.value">
			</p><br>-->


				<select class="form-control" name="vehicle" class="vt" id="vt" oninput="price.value=vt.value" required>
				<option value="">Choose Vehicle Type</option>
				<option value="100" id="vt1">2 Wheeler</option>
				<option value="200" id="vt1">4 Wheeler</option>  </select>
<br>
				Total Price:<input type="text" class="form-control" name="price" id="price" readonly>
<br>
		<input type="submit" name="submit" value="Pay Here" class="btn btn-primary">



 
	</form>
</div>

</div>
</body>
</html>

<?php


include 'conn.php';

if (isset($_POST['submit'])) {
 $ud = $_POST['ud'];
  $name = $_POST['name'];
 $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $date = $_POST['date'];
  $gender = $_POST['gender'];
  $std = $_POST['std'];
  $vehicle = $_POST['vehicle'];
  $price=$_POST['price'];

  $insertquery = " insert into checked (name,ud,gender,std,date,vehicle,mobile,email,price) values('$name','$ud','$gender','$std','$date','$vehicle','$mobile','$email','price')";

  $res = mysqli_query($con,$insertquery);


  if($res){




?>


    <script>
      alert("data inserted properly");
    </script>
    <?php
           }else{
    ?>
    <script>
      alert("data not inserted properly");
    </script>
    <?php
  }
}
?>


