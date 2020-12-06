<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>New Form</title>

	<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/all.min.css">


<style type="text/css">
	
*{
		margin: 0;
		padding: 0; 
		box-sizing: border-box;
		}

.main_div{
	width: 100%;
	height: 100vh;
	position: relative;
}


.box{
	width: 450px;
	position: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%,-50%);
	padding: 50px;
	background: #fff;
	border-radius: 10px;

}


.box h3{
	margin-bottom: 30px;
	color: rgba(0,0,0,0.8);
	text-align: center;
	text-transform: capitalize;
}


.box h5{
	margin-bottom: 30px;
	color: rgba(0,0,0,0.8);
	text-align: center;
	text-transform: capitalize;
}


.box p{
	margin-bottom: 30px;
	color: rgba(0,0,0,0.8);
	text-align: center;
	text-transform: capitalize;
}




.box .inputbox{
	position: relative;
}

.box .inputbox a{
	width: 320px;
	padding: 10px;
	font-size: 16px;
	
	letter-spacing: 1px;
	margin-bottom: 10px;
	border :none;
	border-bottom: 1px solid #fff;
	
	outline: none;
}



.col-auto{
	position: relative;
}



hr {
	height: 1px;
    border: none;
    border-top: 1px double  #333;
    color: #333;
    overflow: visible;
    text-align: center;
    
}

hr:after {
    background: #fff;
    content: 'OR';
    padding: 0 4px;
    position: relative;
    top: -13px;
}




</style>




</head>
<body>
    <?php
        include 'dbcon.php';
        if(isset($_POST['submit'])){
            
            $email =$_POST['email'];
            
            $password =$_POST['password'];

            $email_search="select * from regestration where email='$email'";

            $query=mysqli_query($con,$email_search);

			$email_count=mysqli_num_rows($query);


            if($email_count){
				$email_pass=mysqli_fetch_assoc($query);
				
				$db_pass=$email_pass['password'];
				$_SESSION['name']=$email_pass['name'];

                $pass_decode=password_verify($password,$db_pass);

                if($pass_decode){
					echo "Login Successful";
					header('location:index.php');
                }else{
                    echo "Password Incorrect";
                }
                }else{
                    echo "Invalid Email";
                }

                }
            


    ?>



<div class="main_div">

	
	
		




		<div class="box">


			<h3>Create Account</h3>
				

				<h5>Get Started With Your Free Account</h5>




				<div class="inputbox">
				
				

				

				
			

			<form action="" method="POST">
				

				



				
				<div class="col-auto">


					<a href="#" class="btn btn-danger"><i class="fab fa-google"></i>     Login With Gmail</a>

<a href="#" class="btn btn-primary"><i class="fab fa-facebook-f"></i>     Login With Facebook</a>
<hr>



      <label class="sr-only" for="inlineFormInputGroup">Email Address</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-envelope"></i></div>
        </div>
         <input type="text" name="email" class="form-control" id="inlineFormInputGroup" placeholder="Email Address">
      </div>
    </div>




				






				<div class="col-auto">
      <label class="sr-only" for="inlineFormInputGroup">Password</label>
      <div class="input-group mb-2">
        <div class="input-group-prepend">
          <div class="input-group-text"><i class="fas fa-lock"></i></div>
        </div>
         <input type="password" name="password" class="form-control" id="inlineFormInputGroup" placeholder="Password">
      </div>

      <button type="submit" name="submit" class="btn btn-primary btn-block">Log In</button>
    </div>





				

     


    </div>





    	

    	<p>Not have an account?<a href="newsignupform.php"> Sign up</a></p>
</div>

			</form>

	</div>




</body>
</html>