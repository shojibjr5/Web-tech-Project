<?php 
session_start();
include("LogHeader.php");
include("../Controller/complainController.php");

?>

<!DOCTYPE html>
<html>

<head>
    <style>
        input{
            border-radius:5px;
            background-color: #ffccff;
           
        }
        textarea{
            border-radius:5px;
            background-color: #ffccff;
        }
        fieldset{
            margin-left:30%;
            margin-right:20%;
            background-color: #ffccff;
          
        }
        .search {
    width: 10em;  
    height: 2em;
}
body{
            background-image: url('Media/4.jpg');
        }
        a{
         color:black;   
        }
        h3{
            margin-top:100px;
            margin-left:130px;
        }
    </style>
</head>
<body>
   <center> <h3>Dear <?php echo $_SESSION["Name"];?>, If you have any complain or suggestion, please send us!!  </h3></center>

                    <form action="" method="post" >
                     
                        <fieldset>
                            <center>
                            <h2><b>Complain Box</b></h2>
                                <table>
                            <tr>
                            <td>
                            <input type="text" name="subject" id="subject" placeholder="Subject" > 
                            </td>
                            <td><?php echo $errSub;?> </td>
                            </tr>
                              
                        <tr>
                            <td>
                            <textarea cols="30" rows="10" name="message" id="message" placeholder="Message.." ></textarea>
                            </td>
                            <td><?php echo $errMsg;?> </td>
                            </td>
                        </tr>
                       <tr>
                           <td>
                            <input type="submit" name="submit" value="Send" class="search" placeholder="Subject">
                           </td>
                       </tr>
                       
                        </table>
                        </center>
 
                        </fieldset>
                    </form>
                </div>

    </body>
     </html>

