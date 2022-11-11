<?php 
include ("../Model/DatabaseConnection.php");
session_start();
?>

<?php
$User="";
$radio1=$radio2=$radio3="";
$FName=$LName=$Email=$User=$Phone=$Address=$Date=$photo="";
$Image="";
$connection = new DatabaseConnection();
$conobj=$connection->OpenCon();

$GetImage=$connection->GetPhoto($conobj,"profilepicture",$_SESSION["Username"],$_SESSION["Name"]);
$userQuery=$connection->ShowData($conobj,"Users",$_SESSION["Email"],$_SESSION["Username"]);

if ($userQuery->num_rows > 0) {

    // output data of each row
    while($row = $userQuery->fetch_assoc()) {
      $Name=$row["Name"];
      $Email=$row["Email"];
      $User=$row["Username"];
      $Date=$row["DOB"];
      $Pass=$row["Password"];
      // $photo=$row["File_Path"];

      if(  $row["Gender"]=="Male" )
      {
           $radio1="checked"; 
      }

      else if($row["Gender"]=="Female")
      {
           $radio2="checked"; 
     }
      else
      {
          $radio3="checked";
      }

   
  } 
}


if ($GetImage->num_rows > 0) {
while($row = $GetImage->fetch_assoc()) {
    $Image=$row["ImagePath"];

}
}



?>
<!DOCTYPE html>
<html>

<head>
    <title> update </title>
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
            background-color:#ffccff;
            border:0px;

            
        }

        .err{
            color:red;
            font-size:12px;
        }
        body{
            background-image: url('Media/4.jpg');
        }
        a{
            color:black;
        }
        img{
            border-radius:20px;
            width:160px;
            margin-bottom:20px;
        }
     
    </style>
</head>

<body>
   <?php include 'LogHeader.php'; ?>

    <form method="post" action="" enctype="multipart/form-data">
     

        
       <fieldset>
     <center> <legend><b>Profile Information</b></legend><br></center>
     <?php $Cookie_name=$_SESSION['Username'];
                    $Cookie_value=$_SESSION['Name'];
                    if(isset($_SESSION["Name"])) 
                    {
                    
                    }

                    $name=$_SESSION['Username'];
                    $value=$_SESSION['Name'];

                    if(!isset($_COOKIE[$name]))
                    {
                        setcookie($name,$value,time()+(3600),"/");
                        
                    }

                    if(!isset($_COOKIE[$name]))
                    {
                        echo "<center><p>New User : ".$_SESSION['Name']."</p></center>";
                    }
                    else {
                        echo "<center><p>Old User : ".$_COOKIE[$name]."</p></center>";
                    }?>
          
          <center>
          <table> 
              <tr>
                  <td></td>
                  <td>
                  <img src="<?php echo $Image; ?>"  alt="" class="class1-img">
                  </td>
              </tr>
            <tr>
                <td>Name : <br><br></td>
                <td> <input type="text" name="name" class="form-control" value="<?php echo $Name; ?>" readonly/> <br><br></td>
                <td class="err"> <br><br>  </td>
            </tr>
         
            <tr>
                <td>
                <label>Email :<br><br> </label></td>
                <td>  <input type="text" name="email" class="form-control" value="<?php echo $Email; ?>" readonly/><br><br> </td>
                <td class="err"><br><br> </td>
                
            </tr>

            <tr>
                <td>
                <label>User Name : <br><br></label></td>
                <td> <input type="text" name="userName" class="form-control" value="<?php echo $User; ?>" readonly/><br><br> </td>
                <td class="err"><br><br></td>
            </tr>

            <tr>
                <td>
                <label>Password : <br><br></label></td>
                <td> <input type="text" name="password" class="form-control" value="<?php echo $Pass;?>"readonly/><br> <br></td>
                <td class="err"><br><br></td>
            </tr>


            <tr>
                <td>
                   Gender :<br> <br>
                </td>
              
              <td>  
               <?php 
               
               if($radio1=="checked"){
                echo "Male";   
                   
               }
               else if($radio2=="checked"){
                   echo "Female";
               }
               else{
                   echo "Other";
               }
               
               ?>
               
                
                <br><br>
                </td>
                <td class="err"> <br><br></td>
            </tr>

            <tr>
                <td>
                    <label>Date of Birth :<br><br> </label></td>
                <td> <input type="Date" name="dateOfBirth" class="form-control" value="<?php echo $Date;?>"readonly/><br><br></td>
                <td class="err"><br><br> </td>
            </tr>
         

            <tr>
                <td></td>
                <td class="btn">
               <a href="Profile.php">Update Profile</a>
                </td>
               
            </tr>
            
           

          
            </table>
            </center>
        </fieldset>

        <?php include 'Footer.php'; ?>
       
    </form>
    
    <br />
</body>

</html>