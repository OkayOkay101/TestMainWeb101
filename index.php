<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>word</h1>
    
</body>
</html>

<?php 
$myArr = array(2, 15, 4, 54);
$sets = [
  [[2, 15, 4, 54], [2, 4, 54]],
  [[43, 65, 23, 89, 53, 9, 6], [6]],
  [[718, 991, 449, 644, 380, 440], [718, 644, 380, 440]],
];


foreach ($sets as $set){
    foreach ($set as $x){
        foreach ($x as $y){
    if($y % 2 == 0){
        echo "Even"; 
        echo "<br>";
    }
    else{
        echo "Odd";
        echo "<br>";
    }
        }
    }
}

?>