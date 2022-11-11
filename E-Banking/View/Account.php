<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Banking</title>
    <style>
        .list{
            float:left;
        }
        a{
            text-decoration:none;
        }
    </style>
</head>

<body>
    <span style="display:inline-block; width:100%;text-align:left; height: 100%; padding:10px; border-right:2px solid black">
        <hr>
        <?php 
        if (isset($_SESSION['Username'])) {
                 
                   echo "<h2> Welcome " . $_SESSION['Name'] . "</h2>";   
                   
      
               } 
               else {
                   header("location:Login.php");
               }?>
        <ul class="list">
            <li><a href="ProfileView.php">View Profile</a></li>
            <li><a href="PasswordChange.php">Change Password</a></li>
            <li>   <a href="converter.php" class="menu-btn">Currency Coverter</a> </li>
          <li> <a href="Complainbox.php" class="menu-btn">Complain</a></li> 
           
        </ul>
    </span>
</body>

</html>