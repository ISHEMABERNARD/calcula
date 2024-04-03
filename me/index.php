<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function RandomNumber($min, $max) {
    return rand($min, $max);
}

// Usage example
$randomNumber = RandomNumber(1, 30);
echo $randomNumber;

 ?>
    
</body>
</html>
