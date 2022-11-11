<?php 
// 
if (isset($_POST["submit"])) {

    $target_File="../File/".$_FILES["fileupload"]["name"];

    if($target_File=="../File/")
    {
    $target_File="../File/default_pic.png";
    }
if(move_uploaded_file($_FILES["fileupload"]["tmp_name"],$target_File))
{

    $connection=new DatabaseConnection();
    $conobj=$connection->OpenCon();
    $userQuery=  $connection->UpdatePhoto($conobj,"profilepicture",$_SESSION["Name"],$_SESSION["Username"],$target_File);
    $connection->CloseCon($conobj);

}


}


?>