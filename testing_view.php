<?php $servername = 'localhost';
$username = 'root';
$password = '';
$db = 'service_desk';
$conn = mysqli_connect($servername, $username, $password);
mysqli_select_db($conn, $db);
if (!$conn) {
    die("Couldn't connect to the server : " . mysqli_connect_error());
}
?>
<!DOCTYPE html>
<html>

<head>
    <title>View</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            min-height: 100vh;
        }

        .alb {
            width: 200px;
            height: 200px;
            padding: 5px;
        }

        .alb img {
            width: 100%;
            height: 100%;
        }

        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <a href="index.php">&#8592;</a>
    <?php
        $sql = "SELECT * FROM `tickets` where Ticket_id=33";
        $res = mysqli_query($conn,  $sql);
        $images = mysqli_fetch_all($res, MYSQLI_ASSOC);

        $fileName = $images[0]['Ticket_file'];
        //   if (mysqli_num_rows($res) > 0) {
        //     while ($images = mysqli_fetch_assoc($res)) {
        //         echo $images['Ticket_file'];
        //     }
        // }
        // echo $fileName;
        $filepath = "Customer_uploads/".$fileName;
        $fileExt = explode('.', $fileName);
        // var_dump($fileExt);
        $fileActualExt = strtolower(end($fileExt));
        // echo $fileActualExt;
        switch( $fileActualExt ) {
            case "gif": $ctype="image/gif"; break;
            case "png": $ctype="image/png"; break;
            case "jpeg":
            case "jfif": $ctype="image/jfif"; break;
            case "jpg": $ctype="image/jpeg"; break;
            case "pdf": $ctype="pdf"; break;
            case "svg": $ctype="image/svg+xml"; break;
            default:
        }
        
        // header('Content-type: ' . $ctype);
        // // Read the file
        if($ctype == "image/png" || $ctype == "image/" || $ctype=="image/jfif"){
            echo "<img src='Customer_uploads/".$fileName."'>";
        }
        // header('Content-type: ' . $ctype);
        // readfile($filepath);
        
    ?>
</body>

</html>