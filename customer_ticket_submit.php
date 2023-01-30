<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $t_id = $_POST['ticket_id'];
    // var_dump ($_POST);
    // // // header("Location: http://localhost/practice/customer_ticket_view.php", TRUE, 301);
    // exit();
    $t_des = $_POST['ticket_description'];
    $t_title = $_POST['ticket_title'];
    $t_status = rand(1,5);
    $c_id = $_SESSION['c_id'];
    //File Handling
    $file = $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    // $fileData = file_get_contents($_FILES['file']['tmp_name']);
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileNameNew = null;
    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg','png','jpeg','jfif','docx','pdf','csv','xls','svg','txt');
  if ($fileName != '') {
    if (in_array($fileActualExt, $allowed)) {

      if ($fileError === 0) {

        if ($fileSize < 2000000) {
          $fileNameNew = uniqid('', true) . '.' . $fileActualExt;

          $fileDestination = 'Customer_uploads/' . $fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestination);
        } else {
          echo "Your file is too large";
        }
      } else {
        echo "There was an error uploading your file";
      }
    } else {
      echo "You cannot upload file of this type";
    }
  }
  
    $time = time();
    // echo "The ticket title is  " . $t_title . " and description is  " . $t_des;
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
        // INSERT INTO `tickets` (`Ticket_id`, `Customer_id`, `Ticket_description`, `Ticket_file` , `Ticket_status` , `Time`) VALUES (NULL, '112', 'This is a test Ticket By Raj', '1', '2023-01-05 13:16:33.000000')
        $sql = "INSERT INTO `tickets` (`Ticket_id`, `Customer_id`, `Ticket_title` , `Ticket_description`, `Ticket_file` ,`Ticket_status`, `Time`) VALUES (NULL, '$c_id','$t_title', '$t_des', '$fileNameNew' , '$t_status', FROM_UNIXTIME($time))";

        if (mysqli_query($conn, $sql)) {
            // echo "New record created successfully";
            // header("Location: http://localhost/practice/customer_ticket_view.php", TRUE, 301);
            // exit();
            $sql = "SELECT `Ticket_id`,`Ticket_description` , `Ticket_status` , `Time`, `Ticket_file` FROM `tickets` where (Customer_id = $c_id AND Time=(select max(Time) from tickets WHERE Customer_id = $c_id))";
            $result = mysqli_query($conn,$sql);
            
            $num = mysqli_num_rows($result);
            if ($num==1) {
              // echo "Check successfull";
              $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
              echo json_encode($rows);
              
          }
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

    }




}
else {
  include_once "admin_login_view.php";
}
