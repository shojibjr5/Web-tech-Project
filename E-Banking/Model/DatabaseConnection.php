<?php
class DatabaseConnection{
function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "ebanking";

 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 return $conn;
 }




 function Login($conn,$table,$Username,$password)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE Username='". $Username."' AND Password='". $password."'");

        if ($result->num_rows > 0)
        {
            echo "Login Successful <br>";
        }
        else {
        echo "Login Failed !<br>";
        }
    return $result;
}
function CheckBalance($conn,$table,$AccountNumber,$Pin)
{
   $result = $conn->query("SELECT * FROM ". $table." WHERE AccNumber='". $AccountNumber."' AND Pin='". $Pin."'");
   return $result;
}

function CheckCurrPass($conn,$table,$Username,$password)
{
   $result = $conn->query("SELECT * FROM ". $table." WHERE Username='". $Username."' AND Password='". $password."'");

       if ($result->num_rows > 0)
       {
       }
       else {
       echo "Current Password Doesn't Match !<br>";
       }
   return $result;
}

function UpdatePassword($conn,$table,$Password,$Username)
{
    $sql = "UPDATE $table SET Password='$Password' WHERE Username='$Username'";
    if ($conn->query($sql) === TRUE) {
      echo "Successfully Updated the Password!!";
       $result= TRUE;
   } 
   else {
       $result= FALSE ;
       
   }
   return  $result;
}
function UpdatePhoto($conn,$table,$Name,$Username,$ImagePath)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Username='". $Username."' AND Name='". $Name."'");

    if ($result->num_rows > 0)
        {
            $sql = "UPDATE $table SET ImagePath='$ImagePath' WHERE Username='$Username'";
            if ($conn->query($sql) === TRUE) {

               $result= TRUE;
           } 
           else {
               $result= FALSE ;  
           }
        }
        else{
            $stmt=$conn->prepare("INSERT INTO profilepicture (Name,Username,ImagePath) VALUES(?,?,?)"); 
            $stmt->bind_param("sss",$Name,$Username,$ImagePath);
            if($stmt->execute())
            {
                echo "";
                $result=true;
            }
            else 
            {
                echo "";
                echo $stmt->error;
            }
            $stmt->close();
        }

   return  $result;
}
function SendComplain($conn,$table,$Username,$Email,$Subject,$Message)
 {
    $check=false;
    $stmt=$conn->prepare("INSERT INTO complain (Username,Email,Subject,Message) VALUES(?,?,?,?)"); 
    $stmt->bind_param("ssss",$Username,$Email,$Subject,$Message);
    if($stmt->execute())
    {
        echo "Complain Sent Successfully!!";
        $check=true;
    }
    else 
    {
        echo "Sorry, SOmething wrong!!!<br>";
        echo $stmt->error;
    }
    $stmt->close();
    return $check;
  
 }

 function GetPhoto($conn,$table,$Username,$Name)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Username='". $Username."' AND Name='". $Name."'");
    return $result;
}



function CheckUsername($conn,$table,$User)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Username like '".$User."' ");
    return $result;
}

function CheckPhone($conn,$table,$Phone)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Phone like '".$Phone."' ");
    return $result;
}

function ShowData($conn,$table,$Email,$User)
{
    $result = $conn->query("SELECT * FROM ". $table." WHERE Email='". $Email."' AND Username='". $User."'");
    return $result;
}




 function InsertData($conn,$table,$Name,$Email,$Username,$Password,$Gender,$DOB)
 {
    $check=false;
    $stmt=$conn->prepare("INSERT INTO users (Name,Email,Username,Password,Gender,DOB) VALUES(?,?,?,?,?,?)"); 
    $stmt->bind_param("ssssss",$Name,$Email,$Username,$Password,$Gender,$DOB);
    if($stmt->execute())
    {
        echo "User Added Successfully!!";
        $check=true;
    }
    else 
    {
        echo "Already have an account!!!<br>";
        echo $stmt->error;
    }
    $stmt->close();
    return $check;
  
 }



 function Search($conn,$table,$username)
 {
    $result = $conn->query("SELECT * FROM ". $table." WHERE username='". $username);
    return $result;
 }






 function ShowAll($conn,$table)
 {
    $result = $conn->query("SELECT * FROM  $table");
    return $result;
 }

 function UpdateUser($conn,$table,$Name,$Email,$Username,$Password,$Gender,$DOB)
 {
     $sql = "UPDATE $table SET Name='$Name',Gender='$Gender',DOB='$DOB',Email='$Email',Password='$Password' WHERE Username='$Username'";
     if ($conn->query($sql) === TRUE) {
       echo "Update Successfull!!";
        $result= TRUE;
    } 
    else {
        $result= FALSE ;
        
    }
    return  $result;
 }







function CloseCon($conn)
 {
    $conn -> close();
 }
}
?>