<?php

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone-no.'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'website');
$i="insert into order(name,email,phone) values ('$name',$email,$phone)";
mysqli_query($con,$i);
echo "thanks for order, I will call you for confirmation";
mysqli_close($con);
?>
