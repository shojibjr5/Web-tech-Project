<?php
session_start(); 
?>



<?php
// define variables and set to empty values
$name = $email  =$accountNo ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["name"]);
  $accountNo = test_input($_POST["accountNo"]);



 
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>






<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Bank transaction </title>
  

</head>
<body>
<a href="accountPage.html"> Account page </a> &nbsp|
<a href="Logged_In_Dashboard.php">Home </a>

<h2> Bank transaction </h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <br><br>
 
  Account no: <input type="text" name="accountNo">
  <br><br>


  

  <input type="submit" name="submit" value="Submit">  
</form>
    





<?php

echo $name;
echo "<br>";


echo $accountNo;
echo "<br>";



echo "<br>";


?>


<?php
echo "10000";
echo " BDT";

?>

</body>
</html>
