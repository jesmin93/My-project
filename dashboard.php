<?php

include_once 'source/session.php';

?>

<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="tabs.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>My Project</title>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</head>
<body>

<?php if(!isset($_SESSION['username'])): header("location: logout.php");?>

<?php else: ?>

<?php endif ?>

    <div class="menu-bar">
        <h1 class="title">Home Catering</h1>
    <ul>
        <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
        
        <li><a href="aboutUs.html"><i class="fa fa-user" aria-hidden="true"></i>About us</a></li>
        <li><a href="#"><i class="fa fa-clone" aria-hidden="true"></i>Services</a>
            <div class="sub-menu-1">
                <ul>
                    <li><a href="#">Catering</a></li>
                    <li><a href="#">Home Delivery</a></li>
                    <li><a href="#">Festival</a></li>
               </ul>
               </div>
        </li>
        <li><a href="#"><i class="fa fa-money" aria-hidden="true"></i> Pricing</a>
            <div class="sub-menu-1">
                <ul>
                    <li><a href="#">Reasonable</a></li>
                    <li><a href="#">Safe</a></li>
                    <li><a href="#">Dependable</a></li>
               </ul>
               </div>
        </li>
        <li><a href="#"><i class="fa fa-phone" aria-hidden="true"></i>Contact</a>
            <div class="sub-menu-1">
                <ul>
                    <li><a href="#">01620944521</a></li>
                    <li><a href="#">01687669006</a></li>
                    
               </ul>
               </div>
        </li>
        <li><a href="menu.html"><i class="fa fa-bars" aria-hidden="true"></i>Menu</a></li>


    </ul>
</div>


<pre><h1>Hungry?</h1>
    Good,we are here 
        to serve you!
    </pre>
    
        
<br/>
<br/>
<br/>
<br/>
<button class="btn btn-light"><a href="logout.php">Logout</a></button>

  <!--footer start-->
  <footer class="bottom-cls">
    <a href="http://www.facebook.com"target="_blank" >Facebook</>
    <a href="#">Email</a>
    <a href="#">YouTube</a>
    <p> Copyright &copy; Rifat Ara Peu & Jesmin Nezame Liza, 2020</p>
    </footer>
    
    <!--footer end-->

   
    
<script src="index.js"></script>
<script src="tabs.js"></script>



   


</body>
</html>
