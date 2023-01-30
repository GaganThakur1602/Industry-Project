<?php


$name = "Gagan"."Thakur";
$income = 200+200;

echo strrev($name);
echo "<br>";
echo strpos($name , "Tha");

echo str_replace("Thakur","Pratap Singh",$name);

echo "<br>";

$num1 = 0;
$num2 = 5;

echo " Num 1 + Num 2 is resulting in " . ($num1 + $num2)."<br>";
echo " Num 1 - Num 2 is resulting in " . ($num1 - $num2)."<br>";
echo " Num 1 * Num 2 is resulting in " . ($num1 * $num2)."<br>";
echo " Num 1 / Num 2 is resulting in " . ($num1 / $num2)."<br>";
echo " Num 1 ^ Num 2 is resulting in " . ($num1 ** $num2)."<br>";


if ($num1==0 or $num2==0){
    echo "One of the number is equal to zero<br>";
}
else if ($num2>$num1){
    echo "Num 2 is greater than Num 1<br>";
}

switch($num1){
    case 1:
        echo "The number is 1 <br>";
        break;
    case 0:
        echo "The number is 0 <br>";
        break;
    default:
        echo "The number is niether 0 nor 1 <br> ";
        break;
    
    }

do{
    echo "".($num2);
    $num2-=1;
}while ($num2!=0);

$num2 = 5;
echo "<br>";
for($num=0;$num<=5;$num++){
    echo "".($num);
}


$arr = array("Gagan","Om","Vishy","Badal");

for ($i=0; $i <4; $i++) { 
    echo $arr[$i];

}
echo "<br>";
foreach ($arr as $value){
    echo "$value <br>";
}


function marks($marksarr){
    $sum =0 ;

    foreach ($marksarr as $key => $value) {
        $sum += $value;
        # code...
    }

    return $sum/count($marksarr);

}

$marks = [25,50,75,100,125];

$sum = marks($marks);

echo $sum."<br>";

$name_surname = array('Gagan'=>'Thakur','Mayur'=>'Rathod','Vineet'=>'Bhadoriya');

foreach ($name_surname as $key => $value) {
    echo "$value"."<br>";
    # code...
}

$matrix = [[0,1,2,3],[4,5,6,7],[8,9,10,11]];

for ($i=0; $i <3; $i++) {
    for ($j=0; $j <3 ; $j++) { 
        echo $matrix[$i][$j]." ";

    } 
    echo "<br>";
}
?>