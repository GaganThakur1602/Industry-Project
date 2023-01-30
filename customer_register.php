

<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $name = $_POST['name'];
    $email = $_POST['email'];
    // $_SESSION['admin_email']= $email;
    $pass = $_POST['pass'];
    $id = rand(100,99999);
    // echo "The email is " . $email . " and password is " . $pass;
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

        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
        // var_dump($hashed_password);
        // $pass = $pass.'a';
        // var_dump(password_verify($pass,$hashed_password));
        $sql = "SELECT * FROM customers WHERE Customer_id = '$id' ";
        $result = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($result);
        if($num==1){
            $id = rand(100,99999);
            // echo "here";
        }
        else{
            //INSERT INTO `customers` (`Customer_id`, `Customer_email`, `Customer_password`, `Customer_name`) VALUES ('444', 'badal@gmail.com', 'badal', 'Badal')
            $sql = "INSERT INTO `customers` (`Customer_id`, `Customer_email`, `Customer_password`, `Customer_name`) VALUES ('$id', '$email', '$hashed_password', '$name')";
        }

        if (mysqli_query($conn, $sql)) {
            // echo "New user created successfully";
            header("Location: http://localhost/practice/index.php", TRUE, 301);
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

