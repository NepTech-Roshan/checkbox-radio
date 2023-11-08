<?php
$biscuit=$_POST['biscuit'];
$country=$_POST['country'];
$conn = new mysqli('127.0.0.1','root','root','check');
if ($conn->connect_error)
{
  echo "connection failed";
}
else{
  $stmt=$conn->prepare("insert into checked_radio(biscuit,country) values(?,?)");
  $stmt->bind_param("ss",$biscuit,$country);
  $stmt->execute();
  echo"Registration Successful";
  $stmt->close();
  $conn->close();
}
?>

<!--Something Wrong Out Here-->