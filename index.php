<?php
session_start();
if(!isset($_SESSION['name'])){
    echo "You Are Logged Out..!!";
    header('location:newloginform.php');
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ferry Bookings</title>
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="style.css">-->
    <!-- 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/all.min.css">
  </head>
  <body class="body" id="body">
    <nav id="nav" class="nav">
      <input type="checkbox" id="check">
      <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
      </label>
      <label class="logo"><h1>Book Your Ferry</h1></label>
      <ul class="ul" id="ul">
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="about.php" id="aboutclick" >About</a></li>
        <li><a href="info.php" id="infoclick">More Info</a></li>
        <li><a href="#" id="btnclick">Contact Us</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </nav>

    <a href="#" id="iconbar" onclick="responsive_menu()"><i class="fas fa-bars"></i></a>

    
    <div class="m" id="m">
    <div class="main" id="main">

      <!-- INDEX-->
    <section class="section1" id="section1">
      <h1 class="h1">Book Your Ferry Tickets Here </h1>
      <h4>Welcome&nbsp;<strong style="text-transform: uppercase;"> <?php echo $_SESSION['name']; ?></strong> &nbsp;Book Your Tickets And Download Receipt </h4>
      <img src="f.png" width="460" height="auto">
    </section>
</div>
</div>

  
<!-- Services-->
<div class="section2" id="section2">
  <h1 class="h1">Services</h1>
      <h4>Choose The Action From The Following Which You Want To Perform</h4>
      <h4 >There Is Need To Perform Following Things:</h4>
      <h4>1. Fill Your All Details.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>
<h4>2. Make Payment.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>

<h4>3. Download Receipt.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h4>

<h4>4. You Will Redirect To Login Page.</h4>

      <div class="image1">
          <div class="container">
     <img src="bt.png" width="450" height="220" class="img">

            <div class="overlay"> 
                  <div class="text"><a href="check.php" id="clik"><h3 class="vooks">Book Ferries</h3></a></div>
            </div>
            
          </div>
      </div>

      <div class="container col-lg-6">
   
            
          </div>
      </div>
      
</div>







<script type="text/javascript">
    $(document).ready(function(){
      $('#btnclick').click(function(){
        $('body').load('contact.php');
      })

    });
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#aboutclick').click(function(){
        $('body').load('about.php');
      })

    });
  </script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('#infoclick').click(function(){
        $('body').load('info.php');
      })

    });
  </script>

<script src="js/jquery.min.js"></script> 
      <script src="js/popper.min.js"></script> 
      <script src="js/bootstrap.bundle.min.js"></script> 
      <script src="js/jquery-3.0.0.min.js"></script> 
      <script src="js/plugin.js"></script> 
      <!-- sidebar --> 
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script> 
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
     
      <script>
         
         

         function responsive_menu(){
          var e = document.getElementById('nav');
          if (e.className === 'nav'){
            e.className+=" responsive";
           }else{
              e.className='nav';
            }
          }
         
         
      </script>
  </body>
</html>
