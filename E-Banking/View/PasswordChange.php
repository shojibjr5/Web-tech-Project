<?php
include("LogHeader.php");
    include ("../Controller/ChangePassController.php");

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
            color:red;
            font-size:12px;
            margin-bottom:100px;
        }
        .name{
            margin-bottom:40px;
           
        }
        body{
            background-image: url('Media/4.jpg');
        }
        a{
            color:black;
        }
    </style>
 
</head>

<body>
 



    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"novalidate>
        <fieldset>
           <legend><br><br><b>Change Your Password</b></legend>
           <table>
        <tr class="name">
            <td>
            Current Password <br><br>
            </td>

            <td>
            <input type="password" name="currPassword" id="currPassword" ><br><br>
            </td>
            <td class="err"><?php echo $errCurrPass; ?></td>
        </tr>
            

        <tr>
            <td>
            New Password:<br><br>
            </td>

            <td>
            <input type="password" name="newPassword" id="newPassword" ><br><br>
            </td>
            <td class="err"><?php echo $errPass; ?></td>
            <br>
        </tr>


        <tr>
            <td>
           Confirm New Password:<br><br>
            </td>

            <td>
            <input type="password" name="confNewPassword" id="confNewPassword"><br><br>
            </td>
            <td class="err"><?php echo $errConfPass; ?>
            <?php echo $errMatch; ?></td>
           
            <br>
        </tr>
           
         <tr>
             <td></td>
             <td>
             <input type="submit" name="submit" value="Change Password">
             </td>
             <td>
          
             </td>
         </tr>
      
            

           

            
         
            </table>
        </fieldset>
    </form>


</body>

</html>