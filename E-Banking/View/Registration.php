<?php 
include ("../Controller/RegController.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title> Registration </title>
    <style>
        fieldset{
            margin-left:20%;
            margin-right:20%;
            border-radius:10px;
            background-color: #ffccff;
        }
        input{
            border-radius:5px;
            border-color:white;
            font-family:inherit;
            font-size:15px;
            background-color: #ffccff;
            
        }
        .err{
            color:red;
            font-size:12px;
        }
        body{
            background-image: url('Media/4.jpg');
        }
     
    </style>
    <script src="../JS/RegValidation.js" ></script>
</head>

<body>
   <?php include 'Header.php'; ?>

    <form method="post" action="" onsubmit="return validateForm()">
     

        
       <fieldset>
     <center> <legend><b>REGISTRATION</b></legend><br>
           <table> 
            <tr>
                <td>Name : <br><br></td>
                <td> <input type="text" name="name" id="name" class="form-control" /> <br><br></td>
                <td class="err"> 
                    <p id="errorname"> </p>
                <?php echo $errName;?> <br><br>  </td>
            </tr>
         
            <tr>
                <td>
                <label>Email :<br><br> </label></td>
                <td>  <input type="text" name="email" id="email" class="form-control" /><br><br> </td>
                <td class="err">
                <p id="erroremail"> </p>    
                <?php echo $errEmail;?><br><br> </td>
                
            </tr>

            <tr>
                <td>
                <label>User Name : <br><br></label></td>
                <td> <input type="text" name="userName" id="userName" class="form-control" /><br><br> </td>
                <td class="err">
                <p id="errorusername"> </p>    
                <?php echo $errUser;?> <br><br></td>
            </tr>

            <tr>
                <td>
                <label>Password : <br><br></label></td>
                <td> <input type="Password" name="password" id="password" class="form-control" /><br> <br></td>
                <td class="err">
                <p id="errorpass"> </p>    
                <?php echo $errPass;?> <br><br></td>
            </tr>

            <tr>
                <td>
                <label>Confirm password :<br><br> </label></td>
                <td> <input type="Password" name="confirmPassword" id="confirmPassword"  class="form-control" /><br><br> </td>
                <td class="err">
                <p id="errorCpass"> </p>    
                <?php echo $errConfirmPass;?><br><br> </td>
                <td class="err"><?php echo $match;?><br><br> </td>
            </tr>

            <tr>
                <td>
                   Gender :<br> <br>
                </td>
              
              <td>  
                <input type="radio" id="Male" name="gender" value="Male">
                <label for="male">Male</label>
                <input type="radio" id="Female" name="gender" value="Female">
                <label for="female">Female</label>
                <input type="radio" id="Other" name="gender" value="Other">
                <label for="other">Other</label> <br><br>
                </td>
                <td class="err">
                <p id="errorgender"> </p>    
                <?php echo $errGender; ?><br><br></td>
            </tr>

            <tr>
                <td>
                    <label>Date of Birth :<br><br> </label></td>
                <td> <input type="Date" name="dateOfBirth" id="dob" class="form-control" /><br><br></td>
                <td class="err">
                <p id="errordob"> </p>    
                <?php echo $errDob;?><br><br> </td>
            </tr>

            <tr>
                <td class="btn">
                <input type="submit" name="submit" value="Submit" class="btn btn-info" />
                
                </td>
                <td class="btn">
                <input type="reset" name="reset" value="Reset" class="btn btn-info" /><br></td>
               
            </tr>
            
           

          
            </table>
            </center>
        </fieldset>

        <?php include 'Footer.php'; ?>
       
    </form>
    
    <br />
</body>

</html>