<?php
   include "foodconnection.php";
   error_reporting(0);
   $value=$_GET['in'];
   $qurey = "DELETE FROM `enterfood` WHERE userid='$value'"; 
    $conn =mysqli_query($con,$qurey);
    if($conn)
    {
        echo "record deleted";
        ?>
        <META http-equiv="refresh" content="0; URL=http://localhost/foodhouse/displayfood.php"> 
        <?php
    } 
    else
    {
       echo "record are not deleted".mysqli_connect_error('error');
    }

   include ("connectiondata.php");

     $enter=$_GET['out'];
    $qureydata = "DELETE FROM `singleitem` WHERE id='$enter'"; 
    $conn =mysqli_query($datacon,$qureydata);
    if($connitem)
    {
        echo "record deleted";
        ?>
        <META http-equiv="refresh" content="0; URL=http://localhost/foodhouse/displayfood.php"> 
        <?php
    } 
    else
    {
       echo "record are not deleted".mysqli_connect_error('error');
    }

?>