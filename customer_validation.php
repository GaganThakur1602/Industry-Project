<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $c_email = $_POST['c_email'];
    $c_pass = $_POST['c_password'];
    echo "The email is " . $c_email . " and password is " . $c_pass;
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'serivce_desk';
    $conn = mysqli_connect($servername,$username,$password);
    mysqli_select_db($conn, $db);
    if (!$conn) {
        die("Couldn't connect to the server : ".mysqli_connect_error());
    }
    else{
        // echo "Connection was successful";
        //Check in database

        $sql = "SELECT * FROM customers WHERE Customer_email = '$c_email' AND Customer_password = '$c_pass'";
        $result = mysqli_query($conn,$sql);
        $sql = "SELECT max(Ticket_id) from tickets";
        // var_dump($result);

        $num = mysqli_num_rows($result);
        if ($num==1) {
            // echo "Check successfull";
            $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
            $_SESSION['c_id'] = $rows[0]['Customer_id'];
            header("Location: http://localhost/practice/customer_ticket_view.php", TRUE, 301);
            exit();
            
        }
        else{
            echo "There was an error";
        }

    }




}
else {
  include_once "admin_view.php";
}


?>