<?php
    session_start();
	include "connector.php";
    if(session_destroy())
    {
    header('location: index.php');
    }
?>