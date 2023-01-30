<!DOCTYPE html>
<html>
<head>
<style>
body{
    margin: 0;
}
.grid-container {
  display: grid;
  grid-template-columns: 25% 25% 25% 25%;
  
}
.grid-container > .item3,.item4 {
    background-color: rgb(238, 233, 233);
    text-align: center;
    align-items: center;
    height: 20px;
    padding: 20px 0;
  }

  .grid-container > .item5,.item6 {
    background-color:white;
    height: 600px;
    padding: 20px 0;

  }
  .item5 > div{
    margin-top: 80px;
    margin-left: 350px;
    height:150px;
    width:450px;
    text-align:left;
  }
  .item5 > div > p{
    font-size: 15px;
  }

.item2,.item4 {
  grid-column-start: 2;
  grid-column-end: 5;
}
.item5{
    grid-column-start: 1;
    grid-column-end: 3;
}
.item6{
    grid-column-start: 3;
    grid-column-end: 5;

}
input[type="email"],input[type="password"]{
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
.primary{
    float: right;
    margin-right: 100px;
    background-color:rgb(43, 42, 42);
    color: white;
    border-radius: 6px;
    font-size: 16px;
    width: 80px;
    height:30px;
    border:none;

}
.alma{
    border: red;
    font-size: 30px;
    
    
}

a:link , a:visited{
    color: inherit;
    background-color: transparent;
    text-decoration: none;
}
.item6>a:visited {
    color: rgb(243, 104, 40);
    background-color: transparent;
    text-decoration: none;
}


.container1{
    display: flex;
    flex-wrap: nowrap;
    background-color:white;
    margin-top:60px;
}
.container2{
    display: flex;
    flex-wrap: nowrap;
    background-color: white;
}
.container3{
    display: flex;
    flex-wrap: nowrap;
    background-color: white;
}
/*                                                              Navigation Bar CSS START                                                    */
.flex-container{
    display: flex;
    flex-wrap: nowrap;
    color: white;
    background-image:url(Colored_Shapes.svg);
    background-repeat: no-repeat;
    background-size: cover;
    justify-content: center;
    height: 13vh;

}
.flex-logo{

    flex-basis: 40vw; 
    margin-left: 20px;
    align-self:center;

}
.flex-nav{
    flex-basis: 60vw; 
    display: flex;
    flex-wrap: nowrap;
    color: white;
    margin-top: 5vh;
    margin-right: 2vw;
    justify-content: space-between;
    font-size: 18px;
}
.home>a:link:hover{
    color: rgb(243, 104, 40);
    background-color: transparent;
    text-decoration: none;
}
.on_hover{
    margin-top: 4vh;
    display: none;
    background-color: aqua;
}
.home:hover,.my_area:hover,.kb:hover,.community:hover,.si:hover,.su:hover,.about:hover+.on_hover{
    color:rgb(225, 123, 7);
}
/*                                                              Navigation Bar CSS START                                                    */

.item4>form{
    margin-left: 500px;
    background-color: white;
    color: #555;
    display: flex;
    padding: 2px;
    width:30vw;
}
.item4>form:focus{
    box-shadow: 0 0 3px 0 black;

}
input[type="search"] {
    border: none;
    background: white;
    margin-bottom: 0;
    width:30vw;
    font-size: 14px;
    color: inherit;
    border: 1px solid transparent;
  }
input[type="search"]::placeholder {
    color: #bbb;
  }
  button[type="submit"] {
    text-indent: -999px;
    overflow: hidden;
    width: 40px;
    padding: 0;
    margin: 0;
    border: 1px solid transparent;
    border-radius: inherit;
    background: transparent url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' class='bi bi-search' viewBox='0 0 16 16'%3E%3Cpath d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'%3E%3C/path%3E%3C/svg%3E") no-repeat center;
    cursor: pointer;
    opacity: 0.7;
  }
  
  button[type="submit"]:hover {
    opacity: 1;
}
button[type="submit"]:focus,
input[type="search"]:hover {
  box-shadow: 5px 5px;
  border-color:white;
  outline: none;
}
.footer{
    background-color:rgba(182, 180, 180, 0.552);
    height: 200px;
    display: flex;
    justify-content:center;
}
.ticket_button{
    height:7vh;
    width:13vw;
    font-size: larger;
    background-color: gray;
    color: white;
    border-color: transparent;
    border-radius: 50px;
}
.ticket_button:hover{
    cursor: pointer;
    background-color:orange;
}
#myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: #555;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 40px;
  }
  #myBtn:hover {
    background-color:orange;
  }
  #sign_up>a:link,a:visited{
    color: rgb(243, 104, 40);
    background-color: transparent;
    text-decoration: none;
  }
  #reset>a:link,a:visited{
    color: rgb(243, 104, 40);
    background-color: transparent;
    text-decoration: none;
  }
  #agent>a:link,a:visited{
    color: rgb(243, 104, 40);
    background-color: transparent;
    text-decoration: none;
  }
</style>
</head>
<body>
<div class="flex-container">
    <div class="flex-logo" >
        <div class="alma" style="margin-left: 200px;">
            <div style="display: inline;"><img src="serviceorg-normal.png" style="width:40px ; height:40px; "></div>
            <div style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;  display: inline;">AlmaShines</div>
        </div>
            
    </div>
    <div style="flex-grow:4; align-items:center;">
        <div class="flex-nav">
            <div class="home"><a href="#">Home</a></div>
            <div class="my_area">My Area</div>
            <div class="kb">Knowledge Base</div>
            <div class="community">Community</div>
            <div class="si">Sign In</div>
            <div class="su"><a href="customer_sign_up.php">Sign Up</a></div>
            <div class="about"><b>A<sup>+</sup></b></div>
        </div>
        <div class="on_hover"><hr></div>
    </div>
</div>

<div class="grid-container">
    <!-- <div class="item1">
        <span class="alma">
            <img src="serviceorg-normal.png" style="width:40px ; height:40px; ">
            <span style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; margin-bottom:3px;">AlmaShines</span>
        </span>
            
    </div>
    <div class="item2">
        <span class="navbar">
            <div>
            Home &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            My Area &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Knowledge Base &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Community &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Sign In &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            Sign Up &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <b>A<sup>+</sup></b>
            </div>
        </span>
    </div> -->
    <div class="item3">
        <div style="font-size:16px; font-family:Arial,sans-serif;margin-left:200px;margin-top:10px">Home  /  Sign In</div>
    </div>  

    <div class="item4">
        <form>
            <input type="search" placeholder="Search articles" class="articles" style="height:4vh">
            <button type="submit">Search</button>
          </form>
    </div>
  
    <div class="item5">
        <div>
            <h2>Already a member?</h2>
            <p>Sign In</p>
            <form method="post" action="customer_validation.php">
                <input type="email" placeholder="Email Address" name="c_email" id="email">
                <input id = "password" type="password" placeholder="Password"  name="c_password">
                <br>

                <div>
                    <input type="checkbox" name="remember" >Remember me</input>
                    <input type="submit" value="Sign In" class="primary" >
                </div>
        
            </form>
        </div>
    
    
    </div>
    <div class="item6">
        <div class="container1">
            
                <!-- <div style="width: 70px; display:inline;">
                    <img src="user.png" style="height:80px; width:80px; ">
                </div>
                <div style="height:20px; width: 120px;display:inline; background-color:chartreuse;margin-bottom :30px;">

                    New User? <a href='a.html' color="red">Sign Up</a>
                    Create an account to submit tickets, read articles and engage in our community.
                </div> -->

                <div>
                    <img src="user.png" style="height:80px; width:80px; ">
                </div>
                <div style="flex-shrink: 2;align-self: center;"id="sign_up">

                    New User? <a href='a.html' color="red">Sign Up</a><br>
                    Create an account to submit tickets, read articles and engage in our community.
                </div>
            
            
        </div>
        <div class="container2">
            
                <div>
                    <img src="forgot_password.png" style="height:80px; width:80px; ">
                </div>
                <div style="flex-shrink: 2; align-self: center;"id="reset">

                    Forgot Password? <a href='a.html' color="red">Reset</a><br>
                    We will send a password reset link to your email address.
                </div>
            
            
        </div>
        <div class="container3">
            

                <div>
                    <img src="agent.png" style="height:80px; width:80px; ">
                </div>
                <div style="flex-shrink: 2;align-self: center;" id="agent">

                    Are you an Admin? <a href='admin_login_view.php' color="red">Login Here</a><br>
                    You will be taken to the Admin Dashboard.
                </div>
            
            
        </div>
    </div>

</div>
<div class="footer">
    <div style="align-self:center; margin-right:50px">
        <div style="font-family: 'Myriad pro Semibold'; font-size:30px; margin-bottom:20px;">Still can’t find an answer?</div>
        <span style="font-family: 'Myriad pro Medium'; font-weight:100;">Send us a ticket and we will get back to you.</span>
    </div>
    <div style="align-self: center; margin-left:50px">
        <button type="button" value="Send a ticket" class="ticket_button">Submit a ticket</button>

    </div>


</div>
<button onclick="topFunction()" id="myBtn" title="Go to top"><img src="top.png" style="width:30px;height:30px"></button>

<script>
    // Get the button
    let mybutton = document.getElementById("myBtn");
    
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};
    
    function scrollFunction() {
      if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        mybutton.style.display = "block";
      } else {
        mybutton.style.display = "none";
      }
    }
    
    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 20;
      document.documentElement.scrollTop = 20;
    }
</script>
<!-- <div><img src="music.png" style="width:40px;height:40px;"></div>
     -->

</body>
</html>


