
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pending Tickets</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <div class="container mt-3">
    <?php

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
            //Check in database
            echo "<table class='table'>
            <thead>
                <tr>
                <th scope='col'>Ticket_id</th>
                <th scope='col'>Customer_id</th>
                <th scope='col'>Ticket_Description</th>
                <th scope='col'>Ticket_Status</th>
                <th scope='col'>Ticket_Time</th>
                </tr>
            </thead>
            <tbody>";
            $sql = "SELECT * FROM `tickets` where Ticket_status=1 order by Time";
            $result = mysqli_query($conn,$sql);
            $num = mysqli_num_rows($result);
            if ($num>=1) {
                while($row = mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    echo "<th scope='row'>".$row['Ticket_id']."</th>";
                    echo "<td>".$row['Customer_id']."</td>";
                    echo "<td colspan='1'>".$row['Ticket_description']."</td>";
                    echo "<td>"."To-do"."</td>";
                    $gmt = $row['Time'];
                    $time = strtotime($gmt); //returns an integer epoch time: 1401339270
                    echo "<td>".date('m/d/Y H:i:s', $time)."</td>";
                    
                }
                echo "</tbody> </table>";
                
            }
            else{
                echo "There was an error";
            }

        }


    ?>
        
    </div>

</body>
</html>
