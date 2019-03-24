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
    session_start();
	
    $servername = "localhost";
    $_SESSION['SERVER'] = $servername;
    $username = "kkurkowski";
    $_SESSION['USER'] = $username;
    $password = "temp12345";
    $_SESSION['PASS'] = $password;
    $dbname = "kkurkowski";
    $_SESSION['DB'] = $dbname;

    $cookie_name = "password";
    $cookie_value = $password;
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    function add_student ($name, $email, $major, $class1, $class2, $class3, $class4) {
        global $conn;
        $sql_i = "INSERT INTO Students(Name, Email, Major, Class1, Class2, Class3, Class4) VALUES " . "('$name', '$email', '$major', '$class1', '$class2', '$class3', '$class4')";
        run_update($sql_i); }

    function add_tutor ($name, $email, $major, $class1, $class2, $class3, $class4, $availability) {
        global $conn;
        $sql_i = "INSERT INTO Tutors(Name, Email, Major, Class1, Class2, Class3, Class4, Availability) VALUES " . "('$name', '$email', '$major', '$class1', '$class2', '$class3', '$class4', '$availability')";
        run_update($sql_i); }
    
    function run_select ($sql) {
        global $conn;
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Name: " . $row["Name"] . " - Email: " . $row["Email"] ."  - Major: " . $row["Major"] . "  - Class1: " . $row["Class1"] . "  - Class2: " . $row["Class2"] . "  - Class3: " . $row["Class3"] . "  - Class4: " . $row["Class4"] . " - Availability: " . $row["Availability"] . "<br>";
                }
        }
        
        else {
            echo "0 results";
        }
    }
    
    function get_student_records (&$result) {
        global $conn;
        
        $sql = "SELECT * FROM Students"; 
        
        if (($result = $conn->query($sql)) == TRUE) {
            echo "Database updated successfully <br>";
        }
        
        else {
            echo "Error: " . $sql . "<br>" . $conn->error; }
    }
    
    function get_tutor_records (&$result) {
        global $conn;
        
        $sql = "SELECT * FROM Tutors"; 
        
        if (($result = $conn->query($sql)) == TRUE) {
            echo "Database updated successfully <br>";
        }
        
        else {
            echo "Error: " . $sql . "<br>" . $conn->error; }
    }
    
    function run_update ($sql) {
        global $conn;
        
        if ($conn->query($sql) === TRUE) {
            echo "Database updated successfully <br>";
        }
        
        else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
    function check_login($user, $pass, $msg) {
        global $conn;
        $msg = "Login Denied";
        $retvalue = False;
        $sql = "select password from users where username = '$user'";
        $result = $conn->query($sql);
        
        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $dbpass = $row["password"];
            
            if ($dbpass == $pass) {
                $retvalue = True;
                $msg = "Login Successful";
            }
        }
        
        return  $retvalue;
    }
?>