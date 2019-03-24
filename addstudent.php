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
            add_student ($_POST['name'], $_POST['email'], $_POST['major'], $_POST['class1'], $_POST['class2'], $_POST['class3'], $_POST['class4']);
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
        <script type="text/javascript" src="js/chkStudent.js"></script>
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
            
            <form id="addStudent" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" onsubmit="validateStudent()">
                <h2>Request Help</h2>
                
                <div class="form-group">
                    <label for="name">Name</label>
                    <input class="form-control" type="text" name="name" id="idName" placeholder="Enter Name">
                </div>
                
                <div class="form-group">
                    <label for="email">Email</label>
                    <input class="form-control" type="email" name="email" id="idEmail" placeholder="Enter email">
                </div>
                
                <div class="form-group">
                    <label for="major">Subject</label>
                    <select name="major" class="form-control" id="major">
                        <option>Choose below:</option>
                        <option>Communications</option>
                        <option>Computer Science</option>
                        <option>Engineering</option>
                        <option>Information Technology</option>
                    </select>
                </div>
            
                <div class="form-group">
                    <label for="class1">Course</label>
                    <input type="class1" class="form-control" name="class1" id="course" placeholder="Format should be ABC 123">
                </div>
                <div class="form-group">
                    <label for="class2">Additional Course (Optional)</label>
                    <input type="class2" class="form-control" name="class2" id="course" placeholder="Format should be ABC 123">
                </div>
                <div class="form-group">
                    <label for="class3">Additional Course (Optional)</label>
                    <input type="class3" class="form-control" name="class3" id="course" placeholder="Format should be ABC 123">
                </div>
                <div class="form-group">
                    <label for="class4">Additional Course (Optional)</label>
                    <input type="class4" class="form-control" name="class4" id="course" placeholder="Format should be ABC 123">
                </div>
                
                <button type="submit" class="btn btn-default">Add</button>
            </form>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
        
    </body>
</html>