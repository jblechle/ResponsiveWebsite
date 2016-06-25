<?php
session_start();

$Fname=$_POST["Fname"];
$Lname=$_POST["Lname"];
$Username=$_POST["Username"];
$Password=$_POST["Password"];
$PhoneNum=$_POST["PhoneNum"];
$SSN=$_POST["SSN"];
$Address=$_POST["Address"];
$Age=$_POST["Age"];
$Gender=$_POST["Gender"];

// $conn = mysql_connect("thor.quincy.edu", "csc496-team1", "*goHawks1");

            // if (!$conn)
            //
                // die("Unable to open database");
            //
            $db = new mysqli("localhost", "csc496-team1", "goHawks1", "csc496-team1");

            // Check connection
if ($db->connect_errno > 0) {
                die('Unable to connect to database [' . $db->connect_error . ']');
}
            echo "Connected successfully";

            // mysql_select_db("csc496-team1", $conn)
            // or die ("Could not select databse");
            
            $InsertionQuery = "INSERT INTO Employee (Fname, Lname, Username, Password, PhoneNum, SSN, Address, Age, Gender) VALUES ('$Fname','$Lname','$Username','$Password','$PhoneNum','$SSN','$Address','$Age','$Gender');";
            $db->query($InsertionQuery);
            echo "it worked";
            // mysql_query($InsertionQuery, $conn);
            
            header('Location:adminEmployee.php');
