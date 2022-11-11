<?php
include ("../Model/DatabaseConnection.php");
session_start();
$errName=$errEmail=$errUser=$errPass=$errConfirmPass=$errGender=$errDob=$match="";
$err=false;
if (isset($_POST["submit"])) {
    $Name=$_REQUEST["name"];
    $Email=$_REQUEST["email"];
    $Username=$_REQUEST["userName"];
    $Password=$_REQUEST["password"];
    $Gender="";
    $DOB=$_REQUEST["dateOfBirth"];

    if(isset($_REQUEST["gender"])){
        $Gender=$_REQUEST["gender"];
        $errGender="";
        $err=true;
    }
    else{
        $errGender="Please select Your Gender";
        $err=false;
    }

    if($Name=="" || strlen($Name)<6 ){
        $errName="Name is Not Correct";
        $err=true;
    }
    else {
        $errName="";
        $err=false;
    }
    if($Username =="" || strlen($Username)<4){
        $errUser="Please retype your username";
        $err=true;
    }
    else {
        $errUser="";
        $err=false;
    }
    if($Email==""){
        $errEmail="Valid Email Required";
        $err=true;
    }
    else{
        $errEmail="";
        $err=false;
    }
    if($Password=="" || strlen($Password)<5){
        $errPass="Password Must be more than 4 character";
        $err=true;
    }
    else{
        $errPass="";
        $err=false;
    }


    if($DOB==""){
        $errDob="Please Select your dob";
        $err=true;
    }
    else{
        $errDob="";
        $err=false;
    }

    if($err==false){
        $connection=new DatabaseConnection();
        $conobj=$connection->OpenCon();
        $userQuery=  $connection->UpdateUser($conobj,"Users",$Name,$Email,$Username,$Password,$Gender,$DOB);
        $_SESSION["Email"]=$Email;
        $_SESSION["Name"]=$Name;
        $connection->CloseCon($conobj);

    }



}

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>