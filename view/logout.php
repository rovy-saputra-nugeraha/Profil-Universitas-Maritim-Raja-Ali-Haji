<?php 
session_start();
session_unset();
session_destroy();
header("Location: ../login.php");        // you can enter home page here ( Eg : header("Location: " ."http://www.krizna.com"); 
?>
