<?php
include("../Model/DatabaseConnection.php");
$err=$errSub=$errMsg="";
if (isset($_POST["submit"])) {

    $subject=$_REQUEST["subject"];
    $msg=$_REQUEST["message"];

    if($subject==""){
        $errSub="Please Add a subject";
        $err=true;
    }
    else{
        $errSub="";
        $err=false;
    }

    if($msg==""){
        $errMsg="Please write down your message here";
        $err=true;
    }
    else{
        $errMsg="";
        $err=false;
    }

    if($err==false){
        $connection=new DatabaseConnection();
        $conobj=$connection->OpenCon();
        $userQuery=  $connection->SendComplain($conobj,"complain",$_SESSION["Username"],$_SESSION["Email"],$subject,$msg);

        $connection->CloseCon($conobj);
    }


}












?>