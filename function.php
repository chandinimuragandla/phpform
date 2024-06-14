<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
     body{
        background-color: aliceblue;
     }
    </style>
</head>
<body>
    <h1>FUNCTIONS</h1>
    <?php

    $string = "Hello World!";
    echo strpos($string,"Wo <br>");
   echo strtolower("$string <br>");
   echo strtoupper("$string <br>");
   echo substr($string, 2,-2 )."<br>";
   
   print_r(explode(" ", $string));
$numer = -5.5;

echo pow(2,3 )."<br>";

echo rand(1,100)."<br>";

$array=["apple","banana", "orange"];
echo count($array)."<br>";
echo is_array($array)."<br>";
echo array_push($array ,"Kiwi <br> ");
print_r($array);

//echo array_pop($array);
//print_r($array_reverse($array));


//print_r(array_merge($array1, $array2));

//dates and Time
echo date("y-m-d H:i:s")."<br>";
$date="2024-06-14 12:00:00";
echo strtotime($date);
 ?>
 <h3>user-defined func</h3>
 <?php

function sayHello( string $name )
{
 return "Hello " . $name . "!";

}
// sayHello()."<br>";
 $test = sayHello("Chandini")."<br>";
 echo $test;

 function calculator(int $num01, int $num02)
 {
    global $test;
    $result = $num01 + $num02;
    return $result;
 }
  $test = calculator(2,5)."<br>";
  echo $test;
 ?>
 <h4>Scopes in php</h4>
 <?php
  $test = "chandini" ."<br>";
  echo $test;
function myFunction($test)
{

    //Define a local varaibles
    $localVar = "Hello, World!";

    //use the local variables
    return $GLOBALS["$test"];
}
echo myFunction($test);
 ?>
</body>
</html>