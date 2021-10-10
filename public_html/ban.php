<?php


$connection = mysqli_connect("localhost","id12087844_samandar","dV+LwK}YcVtfvdh6","id12087844_ban") or die("Error " . mysqli_error($connection));
 $sql = "select * from ban";
    $result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));
     $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
     echo json_encode($emparray);
?>