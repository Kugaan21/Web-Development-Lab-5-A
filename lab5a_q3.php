<?php
function calculateArea($length, $width) {
    if ($length <= 0 || $width <= 0) {
        return "Invalid dimensions. Length and width must be positive numbers.";
    }
    return $length * $width;
}

$length = 5;
$width = 10;
$area = calculateArea($length, $width);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate Area</title>
</head>
<body>
    <b><p>The area of a rectangle with a width of <?php echo $width; ?> and <?php echo $length; ?> is <?php echo $area; ?></p></b>
</body>
</html>
