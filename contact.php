
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
	<title></title>
	<style type="text/css">
		

.maindiv1{
  height: 100vh;
  width: 100%;
  background-color: #f2f2f2;
}

.contact{
  display: flex;
  justify-content: center;
  text-align: center;
  color: black;
  font-size: 59px;
  line-height: 80px;
  padding: 0 10px;
  font-weight: bold;
  letter-spacing: 3px;
  text-shadow: 1px 1px 2px red;
  margin-bottom: 0px;  

  
}

.contact h1{
  margin-top: 60px;

}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}



.container1 {
 
  display: flex;
  justify-content: center;
  align-items: center;

}



	</style>


  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>


  <nav id="nav">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><h1>Book Your Ferry</h1></label>
      <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">More Info</a></li>
       
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>
<!-- Contact US-->
<div class="maindiv1">
    <div class="contact">
      <h1>Contact Us</h1>
    </div>


<div class="container1 col-lg-6">
  <form method="POST" action="pp.php">
    <label for="fname">Name :</label>
    <input type="text" id="name" name="name" placeholder="Your Name.." required="Fill This">

    <label for="lname">Email :</label>
    <input type="text" id="email" name="email" placeholder="Your Email Address.." required>

     <label for="lname">Mobile No.:</label>
    <input type="text" id="mobile" name="mobile" placeholder="Your Mobile Number.." required>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px" required></textarea>

    <input type="submit" value="Submit" name="submit" id="submit">
  </form>
</div>
</div>
</body>
</html>




<?php


include 'co.php';

if (isset($_POST['submit'])) {
 
  $name = $_POST['name'];
 $email = $_POST['email'];
  $mobile = $_POST['mobile'];
 
  $subject = $_POST['subject'];
  

  $insertquery = " insert into contact (name,subject,mobile,email) values('$name','$subject','$mobile','$email')";

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