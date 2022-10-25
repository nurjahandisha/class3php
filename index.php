<?php

$eva = 26;
$diva = 24;
$disha = 21;
$esha = 10;

if($eva > $diva && $eva > $disha){
    echo "eva is a older then diva</br>";
}elseif($diva > $disha && $diva > $eva){
    echo "diva is older then disha";

}else{
    echo"eva is older then diva</br>";
}
function checkyear($tamim,$safa,$yeamim){
    
$eva = $tamim;
$diva =$safa;
$disha = $yeamim;

if($eva > $diva && $eva > $disha){
    echo "eva is a older then diva</br>";
}elseif($diva > $disha && $diva > $eva){
    echo "diva is older then disha</br>";

}else{
    echo"eva is older then diva</br>";
}

}
checkyear(18,19,9);

// check Alphabetic
$name = "nur";
echo ctype_alpha($name);
echo "</br>";
var_dump($name);
echo"</br>";
if( ctype_alpha($name)==1){
    echo"hello Nur</br>";
}else{
    echo"who are you</br>";
}
$a = 40;
if($a>0){
    echo "$a is a positive num</br>";
}elseif($a<0){
    echo "$a is a negative num</br>";
}else{
    echo "$a is a nutral num</br>";
}
if($a>0){
    if($a%2==0){
        echo"$a is a positive even num</br>";
    }else{
        echo"$a is positive odd num</br>";
    }
}

$email ="tamim@gmail.com";
$password ="nur";
if($email=="tamim@gmail.com"){
    // password
    if($password=="nur"){
        echo"login</br>";
    }else{
        echo"your password is incorrect</br>";
    }

}else{
    echo"your email is incorrect</br>";
}
$num=4;
echo $num % 2 == 0 ?'even num</br>':'odd num</br>';

// switch

$weekday = 5;

switch($weekday){
    case 1:
        echo"today is monday";
    break;
    case 2:
        echo"today is tuesday";
    break;
    case 3:
        echo"today is wednesday";
    break;
    case 4:
        echo"today is thursday";
    break;
    case 5:
        echo"today is friday";
    break;
    case 6:
        echo"today is saturday";
    break;
    default:
        echo"enter the valid weekday";
    break;
    
    $amount= 50000;
    $year= 1;
    $interest= 10;

    $totalinterest=($interest/100)*$year;
    echo$totalinterest;
    $totalinterestmoney=$amount*$totalinterest;
    $totalpayable=$amount*$totalinterestmoney;
    $permonthpayable=$totalpayable/($year*12);
    echo$permonthpayable;
        

}