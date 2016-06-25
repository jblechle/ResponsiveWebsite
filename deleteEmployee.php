<?php
// Your database info
$db_host = 'localhost';
$db_user = 'csc496-team1';
$db_pass = 'goHawks1';
$db_name = 'csc496-team1';

if (isset($_GET['id'])) {
    $empID = $_GET['id'];
    
}

$con = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($con->connect_error) {
    die('Connect Error (' . $con->connect_errno . ') ' . $con->connect_error);
}

$deleteQuery = "DELETE FROM Employee WHERE EmpID = '$empID'";

if ($con->query($deleteQuery) === true) {
    
    echo "Record deleted successfully";
    header('Location: adminEmployee.php');
} else {
    
    echo "Error deleting record: " . $con->error;
}

$con->close();
