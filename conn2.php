<body>
<html>
<?php
$con=mysqli_connect('localhost','root','','mydb');
if(isset($_POST["submit"]))
{
  $nm=$_POST["name"];
  $gen=$_POST["gender"];
  $ml=$_POST["mail"];
  $n=$_POST["no"];
  $chk=$_POST["skill"];
  $c="";
  foreach($chk as $new) {
    $c=$c.$new.",";
  }
  $bat=$_POST["batch"];
  $query="INSERT INTO `tb2`(`name`,`gender`,`mail`,`no`,`courses`,`batch`) VALUES ('$nm','$gen','$ml','$n','$c','$bat')";
  $run=mysqli_query($con,$query);
  if($run==TRUE)
    echo "Data inserted successfully";
  else
    echo"error";
}







?>
