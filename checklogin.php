<!--
CSI 2520 - Fall 2016
Final Group Project
Group members:
    Stephanie Gorham
    Kelly Kurkowski
    Keenan McCloskey
    Dan Wilmot
-->
<?php

    include "dbutils.php";
    session_start();
 
	$username = $_POST['username'];
	$passwd = $_POST['passwd'];

    $retstatus = check_login ($username, $passwd);
    
    if ($retstatus) {
	$_SESSION['login'] = $username;
        $goto = 'Location: main.php';
    }
    
    else {
    	$ref = getenv("HTTP_REFERER");
        $_SESSION['login'] = '';
        $goto = 'Location: index.html' . $ref;
    }
    
    header($goto);
    
?>