<?php
include ("../Model/DatabaseConnection.php");
session_start();

$errUser =$errPass= "";
$err=false;

if (isset($_POST["submit"])) {
    $username=$_REQUEST["userName"];
    $password=$_REQUEST["password"];

    if($username =="" || strlen($username)>4){
        $errUser="Please retype your username";
        $err=true;
    }
    else {
        $errUser="";
        $err=false;
    }


    if($password=="" || strlen($password)<5){
        $errPass="Password Must be more than 4 character";
        $err=true;
    }
    else{
        $errPass="";
        $err=false;
    }

    if($err==false){
        $connection=new DatabaseConnection();
        $conobj=$connection->OpenCon();
        $result=$connection->Login($conobj,"users",$username,$password);
        
        if ($result->num_rows > 0)
        {
           while($row = $result->fetch_assoc())
           {
           echo "Name: " . $row["Name"]. " - Email: " . $row["Email"]."Username : ".$row["Username"]."<br>";
           $_SESSION['Name']= $row["Name"];
           $_SESSION['Username']=$row["Username"];
           $_SESSION['Email']=$row["Email"];
           }
    

        }
      $connection->CloseCon($conobj);
    }

}

?>