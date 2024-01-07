<?php 
include "connection.php";

$id= $_GET['id'];

$sql="DELETE FROM `users` WHERE `id`=$id";
$result=mysqli_query($con,$sql);

if($result){
    echo "<script> location.replace('index.php') </script>";
}else{
    echo $co->error;
}