<!DOCTYPE html>
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

	if (!isset($_SESSION['login']) || $_SESSION['login'] == '') {
            header ("Location: index.html");
	}

        if (count($_POST)) {
            header ("Location: main.php");
        }
?>

<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>OU Tutoring Database</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="http://bootswatch.com/slate/bootstrap.min.css">
        <style>
            img {
                width: 100%;
                position: absolute;
                bottom: 0px;
                margin-left: auto;
                margin-right: auto;
            }
            
            a:hover {
                color: gold;
            }
        </style>
    </head>
    
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="main.php">OU Tutoring Database</a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#SiteNavBar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                
                <div class="collapse navbar-collapse" id="SiteNavBar">
                    <ul class="nav navbar-nav">
                        <li><a href="addstudent.php">Request Help</a></li>
                        <li><a href="addtutor.php">Offer Help</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Subjects
                                <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="major_com.php">Communications</a></li>
                                <li><a href="major_cs.php">Computer Science</a></li>
                                <li><a href="major_it.php">Information Technology</a></li>
                                <li><a href="major_egr.php">Engineering</a></li>   
                            </ul>
                        </li>
                        <li><a href="Feedback.html">Contact us</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        
        <div class="container">
            <h1>How can I help you today?</h1>
            <p><a href="addstudent.php" class="btn btn-default">I need help with a class</a>
                <a href="addtutor.php" class="btn btn-default">I can help with a class</a></p>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        
    </body>
    
    <footer>
        <img src="img/campus3.jpg" align="center">
    </footer>
</html>