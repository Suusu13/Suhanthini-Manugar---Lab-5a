<!DOCTYPE html>
<html lang="en">
<head>

    <title>Calculate Rectangle Area</title>
</head>
<body>
    <?php
        function calculateArea($length, $width) {
            return $length * $width;
        }

        $length = 4;
        $width = 2;

        $area = calculateArea($length, $width);

        echo "<b><p>The area of a rectangle with a width of $width and length of $length is $area.</b></p>";
    ?>
</body>
</html>
