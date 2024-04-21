<?php

$conn=mysqli_connect("localhost","root","","clvrhotel");

if(mysqli_connect_error()){
echo "<script>alert('cannot connect to database');</script>";
exit();
}
?>