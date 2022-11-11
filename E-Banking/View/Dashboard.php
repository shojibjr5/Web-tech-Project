<?php

session_start();
// include 'Header.php'; 
   
?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>E-Banking</title>
     
   <style>
       .menu{
        background-color:#e6b3cc;
        
       }
       .list{
        float:left;
        text-align:left;
       }
       body{
            background-image: url('Media/4.jpg');
        }
        a{
            color:black;
            font-family:Cursive;
        font-size:20px;
        }
   </style>
</head>

<body>


<center>
<ul class="menu">
                
                <a href="about.php" class="menu-btn">About</a> |&nbsp 
                <a href="Our services.php" class="menu-btn">Services </a> &nbsp|
                <a href="mybanking.php" class="menu-btn">My Banking</a>&nbsp|
                <a href="contactus.php" class="menu-btn">Contact us</a> &nbsp|
                
                <a href="../Controller/Logout.php" class="menu-btn">Logout</a>
             
         
  </ul>
  </center>


 <?php


        if (isset($_SESSION['Username'])) {
                   
            include('Account.php');
               
        } 
        else {
            header("location:Login.php");
        }
?>
    
</body>
 <br>
  <br>
   <br>
    <br>
  <br>
   <br>
    <br>
  <br>
   <br>
<?php include 'Footer.php'; ?>

</html>