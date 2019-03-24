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
            <h1>Engineering</h1>
            <div class="row">
                <div class="col-md-6">
                    <h2>Tutoring Requests:</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Class</th>
                                <th>Class</th>
                                <th>Class</th>
                                <th>Class</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $servername = "localhost";
                            $username = "kkurkowski";
                            $password = "gateau13";
                            $dbname = "kkurkowski";

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM Students WHERE `Major` =  'Engineering'";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    print   "<tr>";
                                    print   "<td>" . $row["Name"] . "</td>" . "<td>" . $row["Email"] . "</td>" . 
                                            "<td>" . $row["Class1"] . "</td>" . "<td>" . $row["Class2"] . "</td>" . 
                                            "<td>" . $row["Class3"] . "</td>" . "<td>" . $row["Class4"] . "</td>";
                                    print    "</tr>";
                                }
                            }
                            else {
                                print   "<td> 0 Results </td><br>";
                            }

                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <h2>Available Tutors:</h2>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Class</th>
                                <th>Class</th>
                                <th>Class</th>
                                <th>Class</th>
                                <th>Availability:</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php

                            $servername = "localhost";
                            $username = "kkurkowski";
                            $password = "gateau13";
                            $dbname = "kkurkowski";

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT * FROM Tutors WHERE `Major` =  'Engineering'";

                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    print   "<tr>";
                                    print   "<td>" . $row["Name"] . "</td>" . "<td>" . $row["Email"] . "</td>" .  
                                            "<td>" . $row["Class1"] . "</td>" . "<td>" . $row["Class2"] . "</td>" . 
                                            "<td>" . $row["Class3"] . "</td>" . "<td>" . $row["Class4"] . "</td>" . "<td>" . $row["Availability"] . "</td>";
                                    print    "</tr>";
                                }
                            }
                            else {
                                print   "<td> 0 Results </td><br>";
                            }

                            $conn->close();
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    </body>
</html>