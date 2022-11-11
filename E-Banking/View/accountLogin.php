<?php include("LogHeader.php");
include("../Controller/AccountLoginController.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>


    <title>my account</title>
    <style>
        input{
            border-radius:5px;
            background-color: #ffccff;
        }
        fieldset{
            margin-left:30%;
            margin-right:30%;
            border-radius:10px;
            background-color: #ffccff;
            margin-top:100px;
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
    <div class="wrapper">
        
        <form  method="post" class="form" novalidate>
            <fieldset>
           <center> <h2 class="title">My account</h2>
           <table>
            <tr>
                <td>
                <label for="accountNo" class="input-label">Account Number: </label><br><br>
                </td>

                <td>
                <input type="text" name="accountNo" id="accountNo" class="input" placeholder="Enter account number"><br><br>
                </td> 
                <td><?php echo $errNumber; ?></td>
            </tr>

            <tr>
                <td>
                <label for="pin" class="input-label">Account Pin: </label><br><br>
                </td>

                <td>
                <input type="password" name="pin" id="pin" class="input" placeholder="Enter your pin" ><br><br>
                </td>
                <td><?php echo $errPin; ?></td>
            </tr>
           
            <br>

                <tr>
                    <td></td>
                    <td>
                    <input type="submit" value="Check Balance" name="submit">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                    <?php  if(!empty($_SESSION["AccName"])){echo "<br>Account Holder Name : ".$_SESSION["AccName"];}  ?>
            <br>
            <?php  if(!empty($_SESSION["Balance"])){echo "<br>Account balance : ".$_SESSION["Balance"]."<br><br>";}  ?>
            <?php  if(!empty($_SESSION["NotFound"])){echo $_SESSION["NotFound"]."<br><br>";}  ?>
           
                    </td>
                </tr>

            
            </table>
            </center>
            </fieldset>
            
        </form>
    </div>
</body>
</html>