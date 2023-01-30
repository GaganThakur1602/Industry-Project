

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $email = $_POST['email'];
    $_SESSION['admin_email']= $email;
    $pass = $_POST['password'];
    echo "The email is " . $email . " and password is " . $pass;
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db = 'service_desk';
    $conn = mysqli_connect($servername,$username,$password);
    mysqli_select_db($conn, $db);
    if (!$conn) {
        die("Couldn't connect to the server : ".mysqli_connect_error());
    }
    else{
        // echo "Connection was successful";
        //Check in database

        $sql = "SELECT * FROM admins WHERE Admin_email = '$email' AND Admin_password = '$pass'";
        $result = mysqli_query($conn,$sql);
        var_dump($result);
        $num = mysqli_num_rows($result);
        if ($num==1) {
            // echo "Check successfull";
            
            header("Location: http://localhost/practice/admin_ticket_view.php", TRUE, 301);
            exit();
            
        }
        else{
            echo "There was an error";
        }

    }




}
else {
  include_once "admin_login_view.php";
}


?>

