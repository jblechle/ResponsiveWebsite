<?php
    session_start();

            $username = $_POST["username"];
            $password = $_POST["password"];

            $conn = mysql_connect("localhost", "csc496-team1", "goHawks1");

if (!$conn) {
            die("Unable to open database");
}

            mysql_select_db("csc496-team1", $conn);

            $LoginQuery = ("SELECT AdID FROM Admin WHERE username = '$username' AND password ='$password'");
            

            echo $LoginQuery;

            
            $result = mysql_query($LoginQuery, $conn);
if (mysql_num_rows($result) == 0) {
            header('Location: adminLogin.php');
} else {
                $_SESSION["username"] = $username;
                header('Location: CurrentOrders.php');
}
