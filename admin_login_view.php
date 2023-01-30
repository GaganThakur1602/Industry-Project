<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
      .home>a,
        .logout>a {
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

        .home:hover,
        .my_area:hover,
        .kb:hover,
        .community:hover,
        .si:hover,
        .su:hover,
        .logout:hover {
            color: rgb(243, 104, 40);
            display: block;
        }

        .flex-content {
            margin-top: 15vh;
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

        /* td {
            padding: 0 5vw;
        } */
        #display_table {
            text-align: center;
            
        }
        td{
            padding: 0 20px;
            padding-top: 10px;
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
                <div class="logout"><a href="customer_logout.php">Logout</a></div>
                <!-- <div class="on_hover">
                    <hr>
                </div> -->
            </div>
        </div>
    </div>
    <div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <div class="container">
    <h1 style="text-align:center;">Admin service desk Login</h1>
    <form method="post" action="admin_validation.php">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

</body>
</html>