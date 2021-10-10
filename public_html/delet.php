<?php
$idns = $_GET['d'];
$connection = mysqli_connect("localhost","id12087844_samandar","dV+LwK}YcVtfvdh6","id12087844_ban") or die("Error " . mysqli_error($connection));
 $query = " INSERT INTO ban (id) VALUES ('$idns')";
  if(mysqli_query($connection,$query)){
    echo 'deleted from site';
 }else{
 	echo 'error'; 
 }
?>