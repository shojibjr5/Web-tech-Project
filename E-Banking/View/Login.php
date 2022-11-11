<?php include 'Header.php'; 
    include ("../Controller/LoginController.php");
    if(isset($_SESSION["Username"])){

        header("location: Dashboard.php");
      }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Banking</title>

    <style>
        fieldset{
            margin-left:30%;
            margin-right:30%;
            border-radius:10px;
            background-color: #ffccff;
        }
        input{
            border-radius:5px;
            border-color:white;
            font-family:inherit;
            font-size:15px;
            background-color:#ffccff;
            
        }
        .err{
            color:black;
            font-size:12px;
            margin-bottom:100px;
        }
        .name{
            margin-bottom:50px;
           
        }
        body{
            background-image: url('Media/4.jpg');
        }
    </style>

    <script src="../JS/LoginValidation.js"></script>
 
</head>

<body>
 



    <form method="post" onsubmit="return validateForm()">
        <fieldset>
           <center> <legend><b>Login</b></legend>
           <table>
        <tr class="name">
            <td>
            User Name: <br><br>
            </td>

            <td>
            <input type="text" name="userName" id="username" value="<?php if (isset($_COOKIE['Username'])) {
                                                            echo $_COOKIE['Username'];
                                                        } ?>"><br><br>
            </td>
            <td class="err"><p id="errorUser"></p>
                <?php echo $errUser; ?></td>
        </tr>
            

        <tr>
            <td>
            Password:<br><br>
            </td>

            <td>
            <input type="password" name="password" id="password" value="<?php if (isset($_COOKIE['password'])) {
                                                                echo $_COOKIE['password'];
                                                            } ?>"><br><br>
            </td>
            <td class="err">
            <p id="errorpass"></p>
            <?php echo $errPass; ?></td>
            <br>
        </tr>


        <tr>
            <td>

            </td>

            <td>
            <input type="checkbox" name="rememberMe" value="rememberMe">
             <label>Remember Me</label><br><br>
            <?php
            if (!empty($_POST['rememberMe'])) 
            {
                setcookie("Username", $_POST['userName'], time() + 120);
                setcookie("password", $_POST['password'], time() + 120);
                echo "Cookie set successfully";
            } 
            else 
            {
                setcookie("Username", "");
                setcookie("password", "");
                //echo "Cookie not set";
            }
            ?>
           
            </td>
        </tr>
           
         <tr>
             <td></td>
             <td>
             <input type="submit" name="submit" value="Login">
             </td>
             <td>
          
             </td>
         </tr>
      
            

           

            
         
            </table>
            </center>
        </fieldset>
    </form>


</body>

</html>