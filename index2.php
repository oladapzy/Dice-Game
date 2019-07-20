<?php

include 'index.php';

if(isset($_POST['submit']){
	
	$rand1 = rand(1,6);
	$rand2 = rand(1,6);
} 

   echo $rand1.":".$rand2;
   
   else{
	   
	   echo 'Roll the dice to get result';
   }

?>