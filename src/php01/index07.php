<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function Score($x, $y, $z) {
        $totalScore = $x + $y + $z;
        if ($totalScore > 210) {
            echo "合計点は" . $totalScore . "点なので合格です";
        } else {
            echo "合計点は" . $totalScore . "点なので不合格です";
        }
    }
    $test = Score(80, 30, 20);
    echo $test;
    function getTriangleArea($base, $height) {
        return $base * $height / 2;
    }
    function getSquareArea ($base, $height) {
        return $base * $height;
    }
    function getTrapezoidArea ($upperBase, $lowerBase, $height) {
        return ($upperBase + $lowerBase) * $height / 2;
    }
    echo getSquareArea(5,6);
    echo getTriangleArea(5,6);
    echo getTrapezoidArea(3,7,5);
    ?>
</body>
</html>