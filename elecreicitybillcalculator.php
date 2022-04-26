<?php

$a=3.50;
$b=4.0;
$c=5.20;
$d=6.50;

$fiftyunits=50;
$hundredunits=100;
$hundredunits2=200;
$twofiftyabove=250;

if($fiftyunits<$a and $hundredunits<$a and $hundredunits2<$a and $twofiftyabove<a){
        echo"No bill found";
}
elseif($fiftyunits==$a){
echo"Your bill is".$a;
}
elseif ($hundredunits==$b){
    echo"Your bill is".$b;
}
elseif ($hundredunits2==$c){
    echo"Your bill is".$c;
}
else{
        echo"Your bill is".$d;
    
}

?>