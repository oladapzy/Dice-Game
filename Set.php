<?php

session_start();

$now = time();

if ($_SESSION['click'] > ($now-1)) { 
    
}

$_SESSION['click'] = $now;




?>