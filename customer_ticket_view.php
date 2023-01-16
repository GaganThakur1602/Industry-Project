<?php
session_start();
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pending Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        

        .home>a{
            text-decoration: none;
            color: inherit;
        }

        .flex-container {
            display: flex;
            flex-wrap: nowrap;
            color: white;
            background-image: url(Colored_Shapes.svg);
            background-repeat: no-repeat;
            background-size: cover;
            justify-content: center;
            height: 13vh;

        }

        .flex-logo {

            flex-basis: 40vw;
            margin-left: 20px;
            align-self: center;

        }

        .flex-nav {
            flex-basis: 60vw;
            display: flex;
            flex-wrap: nowrap;
            color: white;
            margin-top: 5vh;
            margin-right: 2vw;
            justify-content: space-between;
            font-size: 18px;
        }

        .home>a:link:hover {
            color: rgb(243, 104, 40);
            background-color: transparent;
            text-decoration: none;

        }
        

        .on_hover {
            margin-top: 4vh;
            display: none;
            background-color: aqua;
        }

        .home:hover ,
        .my_area:hover,
        .kb:hover,
        .community:hover,
        .si:hover,
        .su:hover,
        .about:hover hr{
            color: rgb(243, 104, 40);
            display: block;
        }

        .flex-content {
            margin-top:15vh;
            display: flex;
            flex-flow: column wrap;
            justify-content: center;
            align-items: center;

        }

        /* 
        .flex-content>div{
            background-color: blue;
            width: 40vw;
            height: 40vh;
            align-self: center;
        } */
        .submit_ticket {
            margin-top: 5vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-flow: column nowrap;
            gap: 10px;

        }

        .ticket_id {
            background-color: lightgray;
        }
    </style>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <div class="flex-container">
        <div class="flex-logo">
            <div class="alma" style="margin-left: 200px;">
                <div style="display: inline;">
                    <img src="serviceorg-normal.png" style="width:40px ; height:40px; ">
                </div>
                <div style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;  display: inline;">
                    AlmaShines
                </div>
            </div>

        </div>
        <div style="flex-grow:4; align-items:center;">
            <div class="flex-nav">
                <div class="home"><a href="index.php">Home</a></div>
                <div class="my_area">My Area</div>
                <div class="kb">Knowledge Base</div>
                <div class="community">Community</div>
                <div class="si">Sign In</div>
                <div class="su">Sign Up</div>
                <div class="about"><b>A<sup>+</sup></b></div>
                <!-- <div class="on_hover">
                    <hr>
                </div> -->
            </div>
        </div>
    </div>
    <div>

        <div style="text-align: center;margin-top:3vh;">
            <h3>Submit a New Ticket</h3>
        </div>
        <div>
            <form method="post" action="customer_ticket_submit.php">
                <div class="submit_ticket">
                    <?php
                    $servername = 'localhost';
                    $username = 'root';
                    $password = '';
                    $db = 'serivce_desk';
                    $conn = mysqli_connect($servername, $username, $password);
                    mysqli_select_db($conn, $db);
                    if (!$conn) {
                        die("Couldn't connect to the server : " . mysqli_connect_error());
                    } else {
                        $sql = "SELECT max(Ticket_id) from tickets";
                        $result = mysqli_query($conn, $sql);
                        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
                        $t_id = (int)$rows[0]['max(Ticket_id)'] + 1;
                    }
                    ?>
                    <div style="flex-grow: 3;"><textarea name="ticket_description" rows="4" cols="50" class="description" >Add a Description to your Ticket</textarea></div>
                    <div style="margin: left 20px;"><input type="file" id="myFile" name="filename"></div>
                    <input type="hidden" name="ticket_status" value=1>
                    <div><input type="submit"></div>
                </div>
            </form>
        </div>
    </div>
    <div class="flex-content">
        <div><h5>Previously Submitted Tickets</h5></div>
        <div class="display-table">
            <?php
            if (!isset($_SESSION['c_id'])) {
                echo "There is no user available";
            } else {
                $c_id = $_SESSION['c_id'];
                $servername = 'localhost';
                $username = 'root';
                $password = '';
                $db = 'serivce_desk';
                $conn = mysqli_connect($servername, $username, $password);
                mysqli_select_db($conn, $db);
                if (!$conn) {
                    die("Couldn't connect to the server : " . mysqli_connect_error());
                } else {
                    //Check in database
                    echo "<table class='table'>
                <thead>
                    <tr>
                    <th scope='col'>Ticket_id</th>
                    <th scope='col'>Ticket_Description</th>
                    <th scope='col'>Ticket_Status</th>
                    <th scope='col'>Ticket_Time</th>
                    </tr>
                </thead>
                <tbody>";
                    $sql = "SELECT * FROM `tickets` where Customer_id='$c_id' order by Time DESC";
                    $result = mysqli_query($conn, $sql);
                    $num = mysqli_num_rows($result);
                    if ($num >= 1) {
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<th scope='row'>" . $row['Ticket_id'] . "</th>";
                            echo "<td colspan='1'>" . $row['Ticket_description'] . "</td>";
                            if ($row['Ticket_status'] == 1) {
                                echo "<td>" . "Submitted" . "</td>";
                            } else if ($row['Ticket_status'] == 3) {
                                echo "<td>" . "In - Progress" . "</td>";
                            } else if ($row['Ticket_status'] == 5) {
                                echo "<td>" . "Resolved" . "</td>";
                            }else if ($row['Ticket_status'] == 2) {
                                echo "<td>" . "Under Review" . "</td>";
                            }else if ($row['Ticket_status'] == 5) {
                                echo "<td>" . "Soon to be Resolved" . "</td>";
                            }
                            $gmt = $row['Time'];
                            $time = strtotime($gmt); //returns an integer epoch time: 1401339270
                            echo "<td>" . date('m/d/Y H:i:s', $time) . "</td>";
                        }
                        echo "</tbody> </table>";
                    } else {
                        echo "There was an error";
                    }
                }
            }
            ?>
        </div>
    </div>

</body>

</html>