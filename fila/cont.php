<?php
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$phone=$_POST['phone'];



$conn=mysqli_connect("localhost","root","","fila") or die("<h1 style='color:red;'>sql not connect</h1>");
$sql="insert into contact_detail(firstname , lastname , email , phone) values('{$firstname}','{$lastname}','{$email}','{$phone}')";

$result=mysqli_query($conn,$sql) or die("<h1 style='color:red;'>query unsuccsess</h1>");

header("Location:http://localhost/fila/index.php");
mysqli_close($conn);
?>
