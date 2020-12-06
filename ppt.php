<?php
session_start();
session_destroy();



?>

<?php

if(!empty($_POST['submit'])) {

	$ud=$_POST['ud'];
	$name=$_POST['name'];
	$vehicle=$_POST['vehicle'];
  $date=$_POST['date'];
	require("fpdf182/fpdf.php");
	$pdf=new FPDF();
	$pdf->AddPage();
	$pdf->setFont("Arial","",16);
  $pdf->Cell(0,40,"Payment Receipt",1,1,'C');
  $pdf->Cell(0,20,"Show This Receipt To Service Counter To Get Access",1,1,'C');
	$pdf->Cell(40,15,"Unique Id",1,0,'C');
  $pdf->Cell(70,15,"Name",1,0,'C');
  $pdf->Cell(40,15,"Date",1,0,'C');
	$pdf->Cell(0,15,"Amount Paid",1,1,'C');
	$pdf->Cell(40,10,$ud,1,0,'C');
	$pdf->Cell(70,10,$name,1,0,'C');
  $pdf->Cell(40,10,$date,1,0,'C');
  $pdf->Cell(0,10,$vehicle,1,1,'C');
  $pdf->Cell(0,20,"Status: Payment Received    ",1,1,'R');
	$pdf->output();
	
	}

?>

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