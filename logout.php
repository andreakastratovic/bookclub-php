<?php 

session_start();

session_unset(); //Free all session variables

session_destroy(); //Destroys all data registered to a session

header("Location: index.php");

?>