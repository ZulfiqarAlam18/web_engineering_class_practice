<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
// task one
$num = 5;
$temp = 1;

for ($i = 1 ; $i <= $num; $i++){

    $temp *= $i;

}
echo $temp. "<br>";


// task two

$rows = 7; // Number of rows

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}




?>




</body>
</html>