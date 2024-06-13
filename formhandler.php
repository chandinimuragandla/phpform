<?php 

 if($_SERVER["REQUEST_METHOD"] == "get"){
    $firstname =htmlspecialchars($_post["firstname"]);
    $lastname =htmlspecialchars($_post["lastname"]);
    $favouritepet = htmlspecialchars($_post["favouritepet"]);

    echo "there is a data , that the user submitted:";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepet;
    echo "<br>";
    echo $submit;
    echo "<br>";

    header("Location:../index.php");
 }
    else {
        header("Location:../index.php");
    }
?>