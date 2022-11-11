<?php
$Amount=$_POST["Amount"];
$Option=$_POST["Option"];

if($Amount=="")
{
    echo "Amount is  Empty";
}
else
{
    if($Option=="USD2BDT"){
        $amount = floatval($Amount);
        $amount= $amount*86;
        echo $amount." BDT";
    }
    if($Option=="BDT2USD"){
        $amount = floatval($Amount);
        $amount= $amount/86;
        $amount = number_format($amount, 2);
        echo $amount." USD";
    }

    if($Option=="BDT2RUPEE"){
        $amount = floatval($Amount);
        $amount= $amount/1.13;
        $amount = number_format($amount, 2);
        echo $amount." Rupee";
    }
    if($Option=="RUPEE2BDT"){
        $amount = floatval($Amount);
        $amount= $amount*1.13;
        $amount = number_format($amount, 2);
        echo $amount." BDT";
    }
}




?>