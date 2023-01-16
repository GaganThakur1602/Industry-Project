<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $t_id = $_POST['ticket_id'];
    $t_des = $_POST['ticket_description'];
    $t_status = 1;
    $c_id = $_SESSION['c_id'];
    $time = time();
    echo "The ticket id " . $t_id . " and password is " . $t_des;
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
        // INSERT INTO `tickets` (`Ticket_id`, `Customer_id`, `Ticket_description`, `Ticket_status`, `Time`) VALUES (NULL, '112', 'This is a test Ticket By Raj', '1', '2023-01-05 13:16:33.000000')
        $sql = "INSERT INTO `tickets` (`Ticket_id`, `Customer_id`, `Ticket_description`, `Ticket_status`, `Time`) VALUES (NULL, '$c_id', '$t_des', '$t_status', FROM_UNIXTIME($time))";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
            header("Location: http://localhost/practice/customer_ticket_view.php", TRUE, 301);
            exit();
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

    }




}
else {
  include_once "admin_view.php";
}


?>