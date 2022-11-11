<?php
include ("../Model/DatabaseConnection.php");
session_start();

$errCurrPass =$errPass=$errMatch=$errConfPass= "";
$err=false;

if (isset($_POST["submit"])) {
    $currPass=$_REQUEST["currPassword"];
    $NewPass=$_REQUEST["newPassword"];
    $NewConfPass=$_REQUEST["confNewPassword"];

    if($currPass ==""){
        $errCurrPass="Enter Your Current Password";
        $err=true;
    }
    else {
        $errCurrPass="";
        $err=false;
    }


    if($NewPass==""){
        $errPass="Password Must be more than 4 character";
        $err=true;
    }
    else{
        $errPass="";
        $err=false;
    }

    if($NewConfPass==""){
        $errConfPass="Confrim Password Must be more than 4 character";
        $err=true;
    }
    else{
        $errConfPass="";
        $err=false;
    }

    if($NewPass!=$NewConfPass){
        $errMatch="Password and confirm password doesn't match!";
        $err=true;
    }

    else{
        $errMatch="";
        $err=false;
    }

    if($err==false){
        $connection=new DatabaseConnection();
        $conobj=$connection->OpenCon();

        //Here check the current password is mathcing or not
        $result=$connection->CheckCurrPass($conobj,"users",$_SESSION["Username"],$currPass);
        
        if ($result->num_rows > 0)
        {
            //Here update the password with new one 
            $pass=$connection->UpdatePassword($conobj,"users",$NewPass,$_SESSION["Username"]);

        }
      $connection->CloseCon($conobj);
    }

}

?>