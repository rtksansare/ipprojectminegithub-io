
<?php
session_start();
if(!isset($_SESSION['name'])){
    echo "You Are Logged Out..!!";
    header('location:1st.html');
}
?>




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
    header('location:contact.php');
           }else{
    ?>
    <script>
      alert("data not inserted properly");
    </script>
    <?php
    header('location:contact.php');
  }
}
?>