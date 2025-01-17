<?php
$email=$_POST['email'];
$password=$_POST['password'];



$conn=mysqli_connect("localhost","root","","fila") or die("<h1 style='color:red;'>sql not connect</h1>");
$sql="insert into signin_detail( email , password) values('{$email}','{$password}')";

$result=mysqli_query($conn,$sql) or die("<h1 style='color:red;'>query unsuccsess</h1>");

header("Location:http://localhost/fila/index.php");
mysqli_close($conn);
?>
