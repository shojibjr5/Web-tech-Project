<?php 

include ("../Model/DatabaseConnection.php");
$errNumber=$errPin="";
if (isset($_POST["submit"])) {


$AccountNumber=$_REQUEST["accountNo"];
$Pin=$_REQUEST["pin"];

if($AccountNumber!="" && $Pin!=""){

    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $result=$connection->CheckBalance($conobj,"Account",$AccountNumber,$Pin);
    
    if ($result->num_rows > 0)
    {
       while($row = $result->fetch_assoc())
       {
       
       $_SESSION["AccName"]=$row["Name"];
       $_SESSION["Balance"]=$row["Balance"];
       }


    }
    else {
      $_SESSION["NotFound"]= "Account not found !!";
    
    }
  $connection->CloseCon($conobj);
}
else{
  $errNumber="Must need a Account Number";
  $errPin="Provide a Pin Number";
}

}



?>